<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class UserController extends Controller
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
     * Display the profile.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function profile()
    {
        $user_id = Auth::id();
        $user = User::find($user_id);
        $user->totalreservations = Reservation::where('user_id', $user_id)->count();


        /*select u.id, p.title, p.id, r.quantity, r.status, s.name,
         p.available_hour_from, p.available_hour_to
        from packs as p
        join reservations as r on p.id = r.pack_id
        join users as uon r.user_id = u.id
        join stores as s on p.store_id = s.id where p.store_id =2*/

        $user->reservations = DB::table('packs as p')
            ->select('u.id', 'p.title', 'p.id', 'r.quantity', 'r.status', 's.name',
                'p.available_hour_from', 'p.available_hour_to', 'p.available_day_from',
                'p.available_day_to', 's.building_number', 's.street_name', 's.postal_code', 's.city', 's.country')
            ->join('reservations as r', 'p.id', '=', 'r.pack_id')
            ->join('users as u', 'r.user_id', '=', 'u.id')
            ->join('stores as s', 'p.store_id', '=', 's.id')
            ->where('u.id', "=", $user_id)
            ->get();

        return view('user.profile', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = Auth()->id();
        $user = User::find($user_id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {

        if (Auth()->id() == $id) {
            if ($request) {
                $this->validate(request(), [
                    'avatar' => ['sometimes', 'nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', Rule::unique('users', 'email')->ignore($id), 'max:255'],
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
                ]);
            }
            $user = User::find($id);

            if ($request->hasfile('avatar')) {
                $avatar = $request->file('avatar');

                //Delete old avatar only if he is not the default one and exists
               if (($user->avatar !== 'default_avatar.png') && file_exists('images/uploads/users/' . $user->avatar)) {
                    unlink('images/uploads/users/' . $user->avatar);
                }
                $filename = time() . '.' . $avatar->getClientOriginalExtension();

                //Implement check here to create directory if not exist already
                Image::make($avatar)->resize(300, 300)->save(public_path('images/uploads/users/' . $filename));
                $user->avatar = $filename;
            }else{
                $user->avatar = 'default_avatar.png';
            }

            $user->name = request('name');
            $user->email = request('email');
            $user->password = Hash::make(request('password'));

            $user->save();
        }
        return redirect('profile')->with('success', 'Profile updated successfully');
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
