<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use App\Models\Pack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FavouriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packs = DB::table('packs as p')
            ->select('f.pack_id', 'p.title', 'p.price', 'p.picture')
            ->join('favourites as f','p.id','=','f.pack_id')
            ->where('f.user_id','=', Auth()->id())
            ->get();
        return view('favourite.index', ['packs'=>$packs]);
    }

    /**
     * Add the favourite pack.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add($id)
    {
        $newFav = Favourite::insert(
            ['user_id' => Auth()->id(), 'pack_id' => $id]
        );
        if($newFav) {
            return back()->with('success', 'The pack has been added to favourites successfully');
        }else{
            return back()->with('error', 'Something went wrong please try again later');
        }
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function emptyList()
    {
        //Empty the favourite list
        $favourites = Favourite::where('user_id', '=',Auth()->id())->get(['id']);
        Favourite::destroy($favourites->toArray());

        if($favourites){
            return back()->with('success', 'The list has been emptied successfully');
        }else{
            return back()->with('error', 'Something went wrong please try later');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete task
        $favourite = Favourite::where('user_id','=',Auth()->id())->where('pack_id','=',$id)->first();
        if($favourite){
            $favourite->delete();
            return back()->with('success', 'The pack has been deleted from favourites successfully');
        }else{
            return back()->with('error', 'Something went wrong please try later');
        }
    }
}
