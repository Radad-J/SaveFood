<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Auth;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    public function charge(Request $request)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ));

            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => \Cart::getTotal() * 100,
                'currency' => 'usd'
            ));

            foreach(\Cart::getContent() as $item){

                $pack = Pack::find($item->id);
                if($pack) $pack->stock = $pack->stock - $item->quantity;

                if ($pack->stock < 0){
                    return redirect()->route('welcome')->with('error', 'Sorry! not enough in stock, please come back later');
                }else{
                        $pack->stock = $pack->stock;
                        $pack->save();

                    Reservation::create([
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                        'user_id' => Auth::check(),
                        'pack_id' => $item->id,
                        'quantity' => $item->quantity,
                        'status' => 'not claimed',
                    ]);
                }
            }

            \Cart::clear();

            return redirect()->route('welcome')->with('success', 'The payment was successful !');
        } catch (\Exception $e) {
            return redirect()->route('welcome')->with('error', 'There was a problem with the payment : ' . $e->getMessage());
        }
    }
}
