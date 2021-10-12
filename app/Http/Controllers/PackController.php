<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Favourite;
use App\Models\Pack;
use App\Models\Rating;
use App\Models\Store;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class PackController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('pack.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store_id = Auth()->user()->store_id;
        //Check if the user has no store so he can create one if not redirect with message
        if (!is_null($store_id)) {
            if ($request) {
                $this->validate(request(), [
                    'title' => ['required', 'unique:stores,name', 'string', 'max:255'],
                    'categories' => ['required', 'array', 'min:1', 'max:4'],
                    'categories.*' => ['required', 'integer'],
                    'description' => ['required', 'string', 'min:10', 'max:255'],
                    'stock' => ['required', 'integer', 'min:1', 'max:255'],
                    'price' => ['required', 'numeric', 'between:0,99.99', 'min:0', 'max:100'],
                    'sale_price' => ['sometimes', 'nullable', 'numeric', 'between:0,99.99', 'min:0', 'max:100', 'lt:price'],
                    'available_day_from' => ['required', 'date', 'date_format:Y-m-d', 'after_or_equal:today'],
                    'available_day_to' => ['required', 'date', 'date_format:Y-m-d', 'after_or_equal:available_day_from'],
                    'available_hour_from' => ['date_format:H:i', 'required', 'string'],
                    'available_hour_to' => ['date_format:H:i', 'required', 'string', 'after:available_hour_from'],
                    'picture' => ['sometimes', 'nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
                ]);
            }

            //Check if the user uploaded an avatar
            if ($request->hasfile('picture')) {
                $picture = $request->file('picture');

                $filename = time() . '.' . $picture->getClientOriginalExtension();

                //Implement check here to create directory if not exist already
                Image::make($picture)->resize(300, 300)->save(public_path('images/uploads/packs/' . $filename));

            } else {
                $filename = 'default_pack.png';
            }

            //Create the store in the db
            $pack = Pack::create([
                'store_id' => $store_id,
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'sale_price' => $request->sale_price,
                'available_day_from' => $request->available_day_from,
                'available_day_to' => $request->available_day_to,
                'available_hour_from' => $request->available_hour_from,
                'available_hour_to' => $request->available_hour_to,
                'stock' => $request->stock,
                'picture' => $filename,
            ]);

            foreach ($request->categories as $category) {
                $row = DB::table('category_pack')->insert([
                    ['category_id' => $category, 'pack_id' => $pack->id],
                ]);
                if (!$row) return back()->with('Sorry! there was a problem during the process, please try later.');
            }

            return redirect()->route('store.mystore')->with('success', 'New pack created successfully');
        } else {
            return redirect()->route('welcome')->with('error', 'Sorry, you don\'t have a store.If you want to create one please register a new account');
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
        /*Get all the categories of the packs*/
        $pack = Pack::find($id);
        $categories = Pack::find($id)->categories;
        $cat = [];
        foreach ($categories as $category) {
            $cat[] = $category->category;
        }

        /*Featured packs to show*/
        $featuredPacks = Pack::inRandomOrder()->limit(4)->get();
        $store = Store::find($pack->store_id);

        /* Know if the pack is favourite or not*/
        $pack->favourite = Favourite::where('user_id', '=', Auth()->id())->where('pack_id', '=', $id)->exists();

        /*Ratings of the pack + number format*/
        $pack->avgRate = number_format(Rating::where('pack_id', '=', $id)->avg('rate'), 1);
        $pack->reviews = DB::table('ratings as r')
            ->select('u.name', 'r.rate', 'r.title', 'r.comment', 'u.avatar', 'r.created_at')
            ->join('users as u', 'u.id', '=', 'r.user_id')
            ->where('r.pack_id', '=', $id)->get();

        return view('pack.show', ['pack' => $pack, 'cat' => $cat, 'store' => $store, 'featuredPacks' => $featuredPacks]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pack = Pack::find($id);
        $allcategories = Category::all();

        $packcat = [];
        foreach ($pack->categories as $category) {
            $packcat[] = $category->id;
        }
        return view('pack.edit', ['pack' => $pack, 'allcategories' => $allcategories, 'packcat' => $packcat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $yesterday = Carbon::yesterday();

        $this->validate(request(), [
            'title' => ['required', 'unique:stores,name', 'string', 'max:255'],
            'categories' => ['required', 'array', 'min:1', 'max:4'],
            'categories.*' => ['required', 'integer'],
            'description' => ['required', 'string', 'min:10', 'max:255'],
            'stock' => ['required', 'integer', 'min:1', 'max:255'],
            'price' => ['required', 'numeric', 'between:0,49.99', 'min:0.10', 'max:50'],
            'sale_price' => ['sometimes', 'nullable', 'numeric', 'between:0,59.99', 'min:0.10', 'max:50', 'lt:price'],
            'available_day_from' => ['required', 'date', 'date_format:Y-m-d', 'after_or_equal:today'],
            'available_day_to' => ['required', 'date', 'date_format:Y-m-d', 'after_or_equal:available_day_from'],
            'available_hour_from' => ['date_format:H:i:s', 'required', 'string'],
            'available_hour_to' => ['date_format:H:i:s', 'required', 'string', 'after:available_hour_from'],
            'picture' => ['sometimes', 'nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $pack = Pack::find($id);

        if ($request->hasfile('picture') || !is_null($request->picture)) {
            $picture = $request->file('picture');

            //Delete old avatar only if he is not the default one and exists
            if (($pack->picture !== 'default_pack.png') && file_exists('images/uploads/packs/' . $pack->picture)) {
                unlink('images/uploads/packs/' . $pack->picture);
            }
            $filename = time() . '.' . $picture->getClientOriginalExtension();

            //Implement check here to create directory if not exist already
            Image::make($picture)->resize(300, 300)->save(public_path('images/uploads/packs/' . $filename));
            $pack->picture = $filename;
        }

        $pack->store_id = Auth()->user()->store_id;
        $pack->title = $request->title;
        $pack->description = $request->description;
        $pack->price = $request->price;
        $pack->sale_price = $request->sale_price;
        $pack->available_day_from = $request->available_day_from;
        $pack->available_day_to = $request->available_day_to;
        $pack->available_hour_from = $request->available_hour_from;
        $pack->available_hour_to = $request->available_hour_to;
        $pack->stock = $request->stock;

        //Delete the old categories and insert the new ones
        $deleteOldCat = Db::table('category_pack')->where('pack_id', '=', $id)->delete();
        if ($deleteOldCat) {
            foreach ($request->categories as $category) {
                $row = DB::table('category_pack')->insert([
                    ['category_id' => $category, 'pack_id' => $pack->id],
                ]);
                if (!$row) return back()->with('Sorry! there was a problem during the process, please try later.');
            }
        }

        $pack->save();
        return redirect()->route('store.mystore')->with('success', 'Pack updated successfully');

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
