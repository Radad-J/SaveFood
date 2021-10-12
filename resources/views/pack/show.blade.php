@extends('layouts.app')
@section('content')

    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('images/bg-about.jpg')}}">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="text-transform-capitalize breadcrumbs-custom-title">Single Product</h2>
                    <h5 class="breadcrumbs-custom-text">We do the best to provide you a easier shopping
                        <br class="d-none d-md-block">while saving our planet.</h5>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('welcome')}}">Home</a></li>
                    <li><a href="{{route('shop.index')}}">Shop</a></li>
                    <li class="active">Single Pack</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Single Product-->
    <section class="section section-sm section-first bg-default">
        <div class="container">
            <div class="row row-30">
                <div class="col-lg-6">
                    <div class="slick-vertical slick-product">
                        <!-- Slick Carousel-->
                        <div class="slick-slider carousel-parent" id="carousel-parent" data-items="1" data-swipe="true"
                             data-child="#child-carousel" data-for="#child-carousel">
                            <div class="item">
                                <div class="slick-product-figure"><img
                                        src="{{ asset('images/uploads/packs/'.$pack->picture) }}" alt="{{$pack->title}}"
                                        width="530" height="480"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-product">
                        <div class="row">
                            <div class="col-8">
                                <h3 class="text-transform-none font-weight-medium">{{ $pack->title }}</h3>
                            </div>
                            <div class="col-4">
                                @if($pack->favourite)
                                    <a href="{{ route('favourite.destroy', $pack->id) }}"><i
                                            style="color:red !important;" class="material-icons mt-2">
                                            favorite
                                        </i></a>
                                @else
                                    <a href="{{ route('favourite.add', $pack->id) }}"><i style="color:red !important;"
                                                                                         class="material-icons mt-2">
                                            favorite_border
                                        </i></a>
                                @endif
                            </div>
                        </div>

                        <ul>
                            <li>{{implode(', ',$cat)}}.</li>
                        </ul>
                        <div class="group-md group-middle">
                            @if(!is_null($pack->sale_price))
                                <div class="single-product-price">{{ $pack->sale_price }}€</div>
                                <del style="color:grey !important;"
                                     class="single-product-price">{{ $pack->price }}€
                                </del>
                            @else
                                <div class="single-product-price">{{ $pack->price }}€</div>
                            @endif
                            <div class="single-product-rating">
                                <span
                                    class=" @if($pack->avgRate >= 1 ) icon mdi mdi-star @else()icon mdi mdi-star-outline @endif"></span>
                                <span
                                    class=" @if($pack->avgRate >= 2 ) icon mdi mdi-star @else()icon mdi mdi-star-outline @endif"></span>
                                <span
                                    class=" @if($pack->avgRate >= 3 ) icon mdi mdi-star @else()icon mdi mdi-star-outline @endif"></span>
                                <span
                                    class=" @if($pack->avgRate >= 4 ) icon mdi mdi-star @else()icon mdi mdi-star-outline @endif"></span>
                                <span
                                    class=" @if($pack->avgRate >= 5 ) icon mdi mdi-star @else()icon mdi mdi-star-outline @endif"></span>
                            </div>
                            @if($pack->avgRate != 0 )
                                <span style="display: inline">{{$pack->rate}}</span>
                            @endif
                        </div>
                        <p>{{ $pack->description }}</p>
                        <hr class="hr-gray-100">
                        <ul class="list list-description">
                            <li><span>Claiming days:</span>
                                From {{ \Carbon\Carbon::parse($pack->available_day_from)->format('j F') }}
                                to {{ \Carbon\Carbon::parse($pack->available_day_to)->format('j F') }}</li>
                            <li><span>Claiming hours:</span>
                                From {{ \Carbon\Carbon::parse($pack->available_hour_from)->format('H:i') }}
                                to {{ \Carbon\Carbon::parse($pack->available_hour_to)->format('H:i') }}</li>
                            <li><span>Stock:</span><span>{{ $pack->stock }}</span></li>
                        </ul>
                        @if(\Carbon\Carbon::now()->gt($pack->available_day_to))
                            <h4 style="color:red" class="text-transform-none font-weight-medium my-4">Whoops, looks like this pack is unavailable or expired.</h4>
                        @else
                        <form action="{{route('cart.add')}}" method="post">
                            @csrf
                            <div class="group-xs group-middle mb-3">
                                <div class="product-stepper">
                                    <input type="hidden" name="pack_id" value="{{$pack->id}}">
                                    <input class="form-input" type="number" name="quantity" data-zeros="true" value="1"
                                           min="1" max="1000">
                                </div>
                                <div>
                                    <button class="button button-lg button-primary button-zakaria" type="submit">Add to
                                        cart
                                    </button>
                                </div>
                            </div>
                        </form>
                        @endif
                        <hr class="hr-gray-100">
                        <div class="group-xs group-middle"><span class="list-social-title">Share</span>
                            <div>
                                <ul class="list-inline list-social list-inline-sm">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap tabs-->
            <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                <!-- Nav tabs-->
                <div class="nav-tabs-wrap">
                    <ul class="nav nav-tabs nav-tabs-1">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1"
                                                                    data-toggle="tab">testimonials</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Reviews</a></li>
                    </ul>
                </div>
                <!-- Tab panes-->
                <div class="tab-content tab-content-1">
                    <div class="tab-pane fade show active" id="tabs-1-1">
                        <div class="box-comment">
                            <div class="unit flex-column flex-sm-row unit-spacing-md">
                                <div class="unit-left"><a class="box-comment-figure" href="{{route('store.show', $store->id)}}"><img
                                            src="{{asset('images/uploads/stores/'.$store->avatar)}}" alt="" width="119"
                                            height="119"/></a></div>
                                <div class="unit-body">
                                    <div class="group-sm group-justify">
                                        <div>
                                            <div class="group-xs group-middle">
                                                <h5 class="box-comment-author"><a href="#">{{$store->name}}</a></h5>

                                            </div>
                                        </div>
                                        <div class="box-comment-time">
                                            <time datetime="2020-11-30"></time>
                                        </div>
                                    </div>
                                    <p class="box-comment-text">
                                        {{$store->building_number}}, {{$store->street_name}}
                                        , {{$store->postal_code}}, {{$store->city}}
                                        , {{$store->country}}</td>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="tabs-1-2">
                        <div class="single-product-info">
                            <div class="unit unit-spacing-md flex-column flex-sm-row align-items-sm-center">
                                <div class="unit-body">
                                    @if(count($pack->reviews)>0)
                                        @foreach($pack->reviews as $review)
                                            <div class="row">
                                                <div class="col-2">
                                                    <img width="60" alt="{{$review->name}}"
                                                         src="{{asset('images/uploads/users/'.$review->avatar)}}"/>
                                                </div>
                                                <div class="col-4">
                                                <h5>{{$review->name}}</h5>
                                                </div>
                                                <div class="col-4">
                                                <h6>{{\Carbon\Carbon::parse($review->created_at)->format('d/m/Y')}}</h6>
                                                </div>
                                                <div class="col-12">
                                                    <div class="box-rating"><h6 class="mr-3"
                                                                                style="display: inline;color:black">{{ucFirst($review->title)}}</h6>
                                                        <span
                                                            style="color:#ffcc00" class="@if($review->rate >= 1 ) icon mdi mdi-star @else icon mdi mdi-star-outline @endif"></span>
                                                        <span
                                                            style="color:#ffcc00" class=" @if($review->rate >= 2 ) icon mdi mdi-star @else icon mdi mdi-star-outline @endif"></span>
                                                        <span
                                                            style="color:#ffcc00" class=" @if($review->rate >= 3 ) icon mdi mdi-star @else icon mdi mdi-star-outline @endif"></span>
                                                        <span
                                                            style="color:#ffcc00" class=" @if($review->rate >= 4 ) icon mdi mdi-star @else icon mdi mdi-star-outline @endif"></span>
                                                        <span
                                                            style="color:#ffcc00" class=" @if($review->rate >= 5 ) icon mdi mdi-star @else icon mdi mdi-star-outline @endif"></span>
                                                    </div>
                                                    @if(!is_null($review->comment))
                                                        <p>{{$review->comment}}</p>

                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <h6><i>No reviews yet, be first one to write a review!</i></h6>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Products-->
    <section class="section section-sm section-last bg-default">
        <div class="container">
            <h4 class="font-weight-sbold">Featured Products</h4>
            <div class="row row-lg row-30 row-lg-50 justify-content-center">
                @foreach($featuredPacks as $featuredpack)
                    <div class="col-sm-6 col-md-5 col-lg-3">
                        <!-- Product-->
                        <article class="product">
                            <div class="product-body">
                                <div class="product-figure"><img
                                        src="{{ asset('images/uploads/packs/'.$featuredpack->picture) }}" alt=""
                                        width="196"
                                        height="134"/>
                                </div>
                                <h5 class="product-title"><a
                                        href="{{route('pack.show', $featuredpack->id)}}">{{$featuredpack->title}}</a>
                                </h5>
                                @if(is_null($featuredpack->sale_price))
                                    <div class="product-price">{{$featuredpack->price}}€</div>
                                @else
                                    <div class="product-price product-price-old">{{$featuredpack->sale_price}}€
                                    </div>
                                    <div class="product-price">{{$featuredpack->sale_price}}€</div>
                                @endif
                            </div>
                            @if(!is_null($featuredpack->sale_price))
                                <span class="product-badge product-badge-sale">Sale</span>
                            @endif
                            <div class="product-button-wrap">
                                <div class="product-button"><a
                                        class="button button-secondary button-zakaria fl-bigmug-line-search74"
                                        href="{{route('pack.show', $featuredpack->id)}}"></a></div>
                                <div class="product-button"><a
                                        class="button button-primary button-zakaria fl-bigmug-line-shopping202"
                                        href="{{route('cart.checkout')}}"></a></div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
