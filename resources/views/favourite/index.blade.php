@extends('layouts.app')
@section('content')

    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="images/bg-about-2.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="text-transform-capitalize breadcrumbs-custom-title">Favourites Page</h2>
                    <h5 class="breadcrumbs-custom-text">Here you will find all your favourite packs.</h5>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Favourite Page</li>
                </ul>
            </div>
        </div>
    </section>
    @if(count($packs)>0)
        <!-- Shopping Cart-->
        <section class="section section-xl bg-default">
            <div class="container">
                <!-- shopping-cart-->
                <div class="table-custom-responsive">
                    <table class="table-custom table-cart">
                        <thead>
                        <tr>
                            <th>Pack picture</th>
                            <th>Pack name</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($packs as $pack)
                            <tr>
                                <td><a class="table-cart-figure" href="{{route('pack.show', $pack->pack_id)}}"><img
                                            src="{{asset('images/uploads/packs/'.$pack->picture)}}" alt="{{$pack->title}}"
                                            width="146" height="132"/></a>
                                </td>
                                <td>{{$pack->title}}</td>
                                @if(is_null($pack->sale_price))
                                    <td>{{$pack->price}}€</td>
                                @else
                                    <td>{{$pack->sale_price}}€</td>
                                @endif
                                <td>
                                    <a href="{{ route('favourite.destroy', $pack->pack_id) }}"
                                       class="btn fa fa-trash-o"></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="group-xl group-justify justify-content-center justify-content-md-between">
                    <div>
                        <div class="form-button">
                            <a href="{{ route('favourite.emptyList') }}" style="color:black"
                               class="button button-lg button-secondary button-zakaria" type="submit">Empty
                                list
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    @else
        <h5 class="my-5">You have an empty list try to find something <a style="text-decoration-line: underline"
                                                                         href={{route('shop.index')}}>here</a></h5>
    @endif
@endsection
