<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart.index');
    }

    /**
     * Add to cart
     *
     * @return \Illuminate\Contracts\Foundation\Application|RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function add(Request $request)
    {
        $pack = Pack::find($request->pack_id);
        if($request->quantity > $pack->stock){
            return back()->with('error', 'The quantity chosen is greater than the quantity available');
        }else{
            if (!is_null($pack->sale_price)) {
                $pack->price = $pack->sale_price;
            }
            if ($request->quantity) {
                $pack->quantity = $request->quantity;
            } else {
                $pack->quantity = 1;
            }

            \Cart::add(
                $pack->id,
                $pack->title,
                $pack->price,
                $pack->quantity,
                ['picture' => $pack->picture]
            );
            return back()->with('success', 'Pack added to cart successfully');
        }
    }

    /**
     * Remove item from cart
     *
     * @return \Illuminate\Http\Response
     */
    public function removeitem(Request $request)
    {
        \Cart::remove([
            'id' => $request->id,
        ]);
        return back()->with('success', 'Pack removed successfully');
    }

    /**
     * Redirects to the checkout
     *
     * @return \Illuminate\Http\Response
     */
    public function clear()
    {
        \Cart::clear();
        return redirect('welcome')->with('success', 'Cart cleared successfully');
    }

    /**
     * Redirects to the checkout view if user is authenticated
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
        $auth = (Auth::check()) ?  view('cart.checkout') : redirect('/login')->with('error', 'Please log in or sign up before checking out');
        return $auth;
    }

    /**
     * Update cart
     *
     * @return \Illuminate\Http\Response
     */
    public function updateitem(Request $request)
    {
        $updatecart = \Cart::update($request->id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity,
            ),
        ));
        if($updatecart){
            return true;
        }else{
            return false;
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
