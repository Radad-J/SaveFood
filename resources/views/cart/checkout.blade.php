@extends('layouts.app')
@section('content')
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="images/bg-about-2.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="text-transform-capitalize breadcrumbs-custom-title">Checkout</h2>
                    <h5 class="breadcrumbs-custom-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius <br class="d-none d-md-block">mod tempor incididunt ut labore et dolore magna aliqua.</h5>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="grid-shop.html">Shop</a></li>
                    <li class="active">Checkout</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Shopping Cart-->
    <section class="section section-sm bg-default text-md-left">
        <div class="container">
            <h3 class="font-weight-medium">Your shopping cart</h3>
            <div class="table-custom-responsive">
                <table class="table-custom table-cart">
                    <thead>
                    <tr>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(Cart::getContent() as $item)
                    <tr>
                        <td><a class="table-cart-figure" href="single-product.html"><img src="{{asset('images/uploads/packs/'.$item->attributes->picture)}}" alt="" width="146" height="132"/></a><a class="table-cart-link" href="single-product.html">{{$item->name}}</a></td>
                        <td>{{$item->price}}€</td>
                        <td>
                            <div class="table-cart-stepper">
                               <p>{{$item->quantity}}</p>
                            </div>
                        </td>
                        <td>{{Cart::get($item->id)->getPriceSum()}}€</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Section Payment-->
    <section class="section section-sm section-last bg-default text-md-left">
        <div class="container">
            <div class="row row-50 justify-content-center">
                <div class="col-md-10 col-lg-6">
                    <h3 class="font-weight-medium">Cart total</h3>
                    <div class="table-custom-responsive">
                        <table class="table-custom table-custom-primary table-checkout">
                            <tbody>
                            <tr>
                                <td>Cart Subtotal</td>
                                <td>{{Cart::getSubTotal()}}€</td>
                            </tr>
                            <tr>
                                <td>Shipping</td>
                                <td>Free</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>{{Cart::getTotal()}}€</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-10 col-lg-6">
                    <form action="{{route('checkout.charge')}}" method="POST">
                        {{ csrf_field() }}
                        <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="{{ env('STRIPE_PUB_KEY') }}"
                            data-amount="{{Cart::getTotal()*100}}"
                            data-name="SaveFood"
                            data-description="Save the earth whilst shopping"
                            data-image="{{asset('/images/favicon.ico')}}"
                            data-locale="auto"
                            data-currency="eur">
                        </script>
                        <script>
                            // Hide default stripe button, be careful there if you
                            // have more than 1 button of that class
                            document.getElementsByClassName("stripe-button-el")[0].style.display = 'none';
                        </script>
                        <button type="submit" class="modifbtn float-right button button-shadow-2 button-zakaria button-lg button-primary">Pay by card</button>
                    </form>
                </div>
            </div>
            </div>




    </section>
@endsection

