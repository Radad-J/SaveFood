<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
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
     * Show reservations by status
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function showReservations(Request $request)
    {
        return view('store.showReservations', ['reservations' => Reservation::getReservationsByStatus($request->status)]);
    }

    /**
     * Show reservations by status
     *
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function changeStatus($id, Request $request)
    {
        $reservation = Reservation::find($id);
        if ($request->status === $reservation->status) {
            $pack_day_to = Carbon::parse(Pack::find($reservation->pack_id)->available_day_to);
            $now = Carbon::now();
            if ($now->gt($pack_day_to)) {
                $reservation->status = "expired";
                //$reservation->updated_at = Carbon::now();
                $reservation->save();

                return back()->with('error', 'Sorry this pack is expired, you will find it in the "Expired" reservations section.');
            } else {
                $reservation->status = "claimed";
                $reservation->save();
                return back()->with('success', 'Reservation updated.If you want to see this reservation you can find it in the "Claimed" reservations section' . $pack_day_to);
            }
        }
        return back()->with('error', 'Something went wrong! Please try again later.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
