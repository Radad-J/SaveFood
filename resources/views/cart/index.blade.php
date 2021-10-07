@extends('layouts.app')
@section('content')

    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="images/bg-about-2.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="text-transform-capitalize breadcrumbs-custom-title">Cart Page</h2>
                    <h5 class="breadcrumbs-custom-text">Here you will find all your cart information including the items
                        and the total
                    </h5>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="grid-shop.html">Shop</a></li>
                    <li class="active">Cart Page</li>
                </ul>
            </div>
        </div>
    </section>
    @if(!Cart::isEmpty())
        <!-- Shopping Cart-->
        <section class="section section-xl bg-default">
            <div class="container">
                <!-- shopping-cart-->
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
                                <td><a class="table-cart-figure" href="{{route('pack.show', $item->id)}}"><img
                                            src="{{asset('images/uploads/packs/'.$item->attributes->picture)}}" alt=""
                                            width="146" height="132"/></a><a class="table-cart-link"
                                                                             href="{{route('pack.show', $item->id)}}">{{$item->name}}</a>
                                </td>
                                <td>{{$item->price}}€</td>
                                <td>
                                    <div class="table-cart-stepper">
                                        <input class="input-quantity form-input" id="quantity-{{$item->id}}"
                                               type="number" data-zeros="true"
                                               value="{{$item->quantity}}" min="1" max="1000">
                                    </div>
                                </td>
                                <td>{{Cart::get($item->id)->getPriceSum()}}</td>
                                <td>

                                    <button onclick="updatecart(this)" data-id="{{$item->id}}"
                                            type="submit" class="btn update-item fa fa-refresh"></button>

                                </td>
                                <td>
                                    <form action="{{route('cart.removeitem')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        <button type="submit" class="btn fa fa-trash-o"></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="group-xl group-justify justify-content-center justify-content-md-between">
                    <div>
                        <form method="post" action="{{route('cart.clear')}}"
                              class="rd-form rd-mailform rd-form-inline rd-form-coupon">
                            @csrf
                            <div class="form-button">
                                <button class="button button-lg button-secondary button-zakaria" type="submit">Empty
                                    cart
                                </button>
                            </div>
                        </form>
                    </div>
                    <div>
                        <div class="group-xl group-middle">
                            <div>
                                <div class="group-md group-middle">
                                    <div class="heading-5 font-weight-medium text-gray-500">Total</div>
                                    <div class="heading-3 font-weight-normal">{{Cart::getTotal()}}€</div>
                                </div>
                            </div>
                            <a class="button button-lg button-primary button-zakaria" href="{{route('cart.checkout')}}">Proceed
                                to
                                checkout</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    @else
        <h5 class="my-5">You have an empty cart try to find something <a style="text-decoration-line: underline"
                                                                         href={{route('shop.index')}}>here</a></h5>
    @endif
@endsection
<script type="text/javascript">
    function updatecart(e) {
        var idQty = e.getAttribute("data-id");
        var qtyname = 'quantity-' + idQty;
        $.ajax({
            url: '{{ route('cart.updateitem') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', id: e.getAttribute("data-id"), quantity:
                document.getElementById(qtyname).value
            },
            success: function (response) {
                if (response == true) {
                    window.location.href = '/cart';
                } else {
                    console.log('error');
                }
            }
        });
    }

</script>

