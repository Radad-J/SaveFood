<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        if (!is_null(Auth()->user()->store_id)) {
            if (!is_null($request->search)) {

                $this->validate(request(), [
                    'search' => ['required', 'min:3', 'max:25', 'string'],
                ]);

                $store = Store::find(Auth()->user()->store_id);

                //Get the packs with the same id store and the search criteria
                $packs = Pack::searchByStoreId($request->search, Auth()->user()->store_id);
                return view('store.mystore', ['store' => $store, 'packs' => $packs]);
            } else {
                return back()->with('error', 'Please enter a keyword');
            }
        } else {
            return redirect('/login')->with('error', 'This page is reserved for the store owners, please make a store before visiting this page');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myStore()
    {
        if (!is_null(Auth()->user()->store_id)) {

            $store = Store::find(Auth()->user()->store_id);
            $packs = Pack::where('store_id', Auth()->user()->store_id)->paginate(9);


            return view('store.mystore', ['store' => $store, 'packs' => $packs]);

        } else {
            return view('welcome')->with('error', 'This page is reserved for the store owners, please make a store before visiting this page');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::find(Auth()->id());
        if (is_null($user->store_id)) {
            return view('store.create');
        } else {
            return redirect('/')->with('error', 'Sorry, you already have a store.If you want to create another one please register a new account');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $user = User::find(Auth()->id());
        //Check if the user has no store so he can create one if not redirect with message
        if (is_null($user->store_id)) {
            if ($request) {
                $this->validate(request(), [
                    'avatar' => ['sometimes', 'nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
                    'name' => ['required', 'unique:stores,name', 'string', 'max:255'],
                    'website' => ['sometimes', 'nullable', 'url'],
                    'gsm' => [
                        'required',
                        'regex:/\+(9[976]\d|8[987530]\d|6[987]\d|5[90]\d|42\d|3[875]\d|2[98654321]\d|9[8543210]|8[6421]|6[6543210]|5[87654321]|[987654310]|3[9643210]|2[70]|7|1)\W*\d\W*\d\W*\d\W*\d\W*\d\W*\d\W*\d\W*\d\W*(\d{1,2})$/',
                        'string'],
                    'country' => ['required', 'string'],
                    'city' => ['required', 'string'],
                    'postal_code' => ['required', 'string'],
                    'street_name' => ['required', 'string'],
                    'building_number' => ['required', 'string'],
                ]);
            }

            //Check if the user uploaded an avatar
            if ($request->hasfile('avatar')) {
                $avatar = $request->file('avatar');

                $filename = time() . '.' . $avatar->getClientOriginalExtension();

                //Implement check here to create directory if not exist already
                Image::make($avatar)->resize(300, 300)->save(public_path('images/uploads/stores/' . $filename));

            } else {
                $filename = 'store_avatar.png';
            }

            //Create the store in the db
            $store = Store::create([
                'avatar' => $filename,
                'name' => $request->name,
                'website' => $request->website,
                'GSM' => $request->gsm,
                'country' => $request->country,
                'city' => $request->city,
                'postal_code' => $request->postal_code,
                'street_name' => $request->street_name,
                'building_number' => $request->building_number,
            ]);

            //Add the new id store to the users table
            if ($user) {
                $user->store_id = $store->id;
                $user->save();
            }
            return redirect()->route('store.mystore')->with('success', 'Store created successfully');
        } else {
            return redirect()->route('welcome')->with('error', 'Sorry, you need to create a store before accessing this link');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view('store.edit', ['store' => Store::find(Auth()->user()->store_id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (!is_null(Auth()->user()->store_id)) {

            $this->validate($request, [
                'avatar' => ['sometimes','nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
                'name' => ['required', Rule::unique('stores', 'name')->ignore(Auth()->user()->store_id), 'string', 'max:255'],
                'website' => ['sometimes','nullable', 'url'],
                'gsm' => [
                    'required',
                    'regex:/\+(9[976]\d|8[987530]\d|6[987]\d|5[90]\d|42\d|3[875]\d|2[98654321]\d|9[8543210]|8[6421]|6[6543210]|5[87654321]|[987654310]|3[9643210]|2[70]|7|1)\W*\d\W*\d\W*\d\W*\d\W*\d\W*\d\W*\d\W*\d\W*(\d{1,2})$/',
                    'string'],
                'country' => ['required', 'string'],
                'city' => ['required', 'string'],
                'postal_code' => ['required', 'string'],
                'street_name' => ['required', 'string'],
                'building_number' => ['required', 'string'],
            ]);

            $store = Store::find(Auth()->user()->store_id);

            if ($request->hasfile('avatar')) {
                $avatar = $request->file('avatar');

                //Delete old avatar only if he is not the default one and exists
                if (($store->avatar !== 'store_avatar.png') && file_exists('images/uploads/stores/' . $store->avatar)) {
                    unlink('images/uploads/stores/' . $store->avatar);
                }
                $filename = time() . '.' . $avatar->getClientOriginalExtension();

                //Implement check here to create directory if not exist already
                Image::make($avatar)->resize(300, 300)->save(public_path('images/uploads/stores/' . $filename));
                $store->avatar = $filename;
            }else{
                $store->avatar = 'store_avatar.png';
            }

            $store->name = request('name');
            $store->website = request('website');
            $store->GSM = request('gsm');
            $store->country = request('country');
            $store->city = request('city');
            $store->postal_code = request('postal_code');
            $store->street_name = request('street_name');
            $store->building_number = request('building_number');

            $store->save();

            return redirect()->route('store.mystore')->with('success', 'Store updated successfully');

        }else{
            return redirect()->route('shop.index')->with('error', 'Please create a store before update it');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
