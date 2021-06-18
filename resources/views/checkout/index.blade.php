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
<!-- Section checkout form-->
<section class="section section-sm section-first bg-default text-md-left">
    <div class="container">
        <div class="row row-50 justify-content-center">
            <div class="col-md-10 col-lg-6">
                <h3 class="font-weight-medium">Billing Address</h3>
                <form class="rd-form rd-mailform form-checkout">
                    <div class="row row-30">
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="checkout-first-name-1" type="text" name="name" data-constraints="@Required"/>
                                <label class="form-label" for="checkout-first-name-1">First Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="checkout-last-name-1" type="text" name="name" data-constraints="@Required"/>
                                <label class="form-label" for="checkout-last-name-1">Last Name</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap">
                                <input class="form-input" id="checkout-company-1" type="text" name="name" data-constraints="@Required"/>
                                <label class="form-label" for="checkout-company-1">Company</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap">
                                <input class="form-input" id="checkout-address-1" type="text" name="name" data-constraints="@Required"/>
                                <label class="form-label" for="checkout-address-1">Address</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap">
                                <input class="form-input" id="checkout-city-1" type="text" name="name" data-constraints="@Required"/>
                                <label class="form-label" for="checkout-city-1">City/Town</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="checkout-email-1" type="email" name="email" data-constraints="@Email @Required"/>
                                <label class="form-label" for="checkout-email-1">E-Mail</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="checkout-phone-1" type="text" name="phone" data-constraints="@Numeric"/>
                                <label class="form-label" for="checkout-phone-1">Phone</label>
                            </div>
                        </div>
                    </div>
                    <label class="checkbox-inline text-transform-capitalize">
                        <input name="input-checkbox-1" value="checkbox-1" type="checkbox"/>My Billing Address and Shipping Address are the same
                    </label>
                </form>
            </div>
            <div class="col-md-10 col-lg-6">
                <h3 class="font-weight-medium">Delivery Address</h3>
                <form class="rd-form rd-mailform form-checkout">
                    <div class="row row-30">
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="checkout-first-name-2" type="text" name="name" data-constraints="@Required"/>
                                <label class="form-label" for="checkout-first-name-2">First Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="checkout-last-name-2" type="text" name="name" data-constraints="@Required"/>
                                <label class="form-label" for="checkout-last-name-2">Last Name</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap">
                                <input class="form-input" id="checkout-company-2" type="text" name="name" data-constraints="@Required"/>
                                <label class="form-label" for="checkout-company-2">Company</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap">
                                <input class="form-input" id="checkout-address-2" type="text" name="name" data-constraints="@Required"/>
                                <label class="form-label" for="checkout-address-2">Address</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap">
                                <input class="form-input" id="checkout-city-2" type="text" name="name" data-constraints="@Required"/>
                                <label class="form-label" for="checkout-city-2">City/Town</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="checkout-email-2" type="email" name="email" data-constraints="@Email @Required"/>
                                <label class="form-label" for="checkout-email-2">E-Mail</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="checkout-phone-2" type="text" name="phone" data-constraints="@Numeric"/>
                                <label class="form-label" for="checkout-phone-2">Phone</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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
                <tr>
                    <td><a class="table-cart-figure" href="single-product.html"><img src="images/product-mini-4-146x132.png" alt="" width="146" height="132"/></a><a class="table-cart-link" href="single-product.html">Forest Berry</a></td>
                    <td>$18.00</td>
                    <td>
                        <div class="table-cart-stepper">
                            <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                        </div>
                    </td>
                    <td>$18</td>
                </tr>
                <tr>
                    <td><a class="table-cart-figure" href="single-product.html"><img src="images/product-mini-5-146x132.png" alt="" width="146" height="132"/></a><a class="table-cart-link" href="single-product.html">Tomatoes</a></td>
                    <td>$16.00</td>
                    <td>
                        <div class="table-cart-stepper">
                            <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                        </div>
                    </td>
                    <td>$16</td>
                </tr>
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
                <h3 class="font-weight-medium">Payment methods</h3>
                <div class="box-radio">
                    <div class="radio-panel">
                        <label class="radio-inline active">
                            <input name="input-group-radio" value="checkbox-1" type="radio" checked>Direct Bank Transfer
                        </label>
                        <div class="radio-panel-content">
                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will be shipped right away.</p>
                        </div>
                    </div>
                    <div class="radio-panel">
                        <label class="radio-inline">
                            <input name="input-group-radio" value="checkbox-1" type="radio">PayPal
                        </label>
                        <div class="radio-panel-content">
                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                        </div>
                    </div>
                    <div class="radio-panel">
                        <label class="radio-inline">
                            <input name="input-group-radio" value="checkbox-1" type="radio">Cheque Payment
                        </label>
                        <div class="radio-panel-content">
                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-lg-6">
                <h3 class="font-weight-medium">Cart total</h3>
                <div class="table-custom-responsive">
                    <table class="table-custom table-custom-primary table-checkout">
                        <tbody>
                        <tr>
                            <td>Cart Subtotal</td>
                            <td>$44</td>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>$44</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
