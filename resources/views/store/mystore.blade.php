@extends('layouts.app')
@section('content')

    <!--+breadcrumbs-->
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{ asset('images/bg-about.jpg') }}">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="text-transform-capitalize breadcrumbs-custom-title">My Store</h2>
                    <h5 class="breadcrumbs-custom-text">Here you will find all the information related to your
                        store.</h5>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('welcome')}}">Home</a></li>
                    <li class="active"><a href="{{route('store.mystore')}}">My Store</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Section About-->
    <section class="section section-xl bg-default text-md-left">
        <div class="container">
            <div class="row row-40 row-md-60 justify-content-center align-items-xl-center">
                <div class="col-md-11 col-lg-6 col-xl-5">
                    <!-- Quote Classic Big-->
                    <article class="quote-classic-big inset-xl-right-30">
                        <div class="heading-3 text-transform-capitalize quote-classic-big-text">
                            <div class="q">{{$store->name}}</div>
                        </div>
                    </article>
                    <!-- Bootstrap tabs-->
                    <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                        <!-- Nav tabs-->
                        <div class="nav-tabs-wrap">
                            <ul class="nav nav-tabs">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1"
                                                                            data-toggle="tab">About</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2"
                                                                            data-toggle="tab">Reservations</a></li>
                            </ul>
                        </div>
                        <!-- Tab panes-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1-1">
                                <table>
                                    <tr>
                                        <th>
                                            <span class="icon mdi mdi-web mr-2"></span> Website :
                                        </th>
                                        <td>
                                            {{$store->website}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <span class="icon mdi mdi-phone mr-2"></span> GSM :
                                        </th>
                                        <td>
                                            {{$store->GSM}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <span class="icon mdi mdi-map-marker mr-2"></span>Adress :
                                        </th>
                                        <td>
                                            {{$store->building_number}}, {{$store->street_name}}
                                            , {{$store->postal_code}}, {{$store->city}}
                                            , {{$store->country}}.
                                        </td>
                                    </tr>
                                </table>
                                <a class="button button-lg button-shadow-2 button-primary button-zakaria"
                                   href={{route('store.edit')}}>Edit my store</a>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-2">
                                <ul class="footer-modern-list footer-modern-list-2 d-sm-inline-block d-md-block">
                                    <li><a href="{{route('reservation.showResByStat', ['status' => "not claimed"])}}">Pending
                                            claim</a></li>
                                    <li><a href="{{route('reservation.showResByStat', ['status' => "claimed"])}}">Claimed</a>
                                    </li>
                                    <li><a href="{{route('reservation.showResByStat', ['status' => "expired"])}}">Expired
                                            packs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-11 col-lg-6 col-xl-7">
                    <img class="float-right" src="{{asset('images/uploads/stores/'.$store->avatar)}}" width="400"
                         height="400">
                </div>
            </div>
            <div class="row row-30 row-lg-50">
                <div class="col-sm-8 col-md-8 col-lg-10 col-xl-10">
                    <!-- RD Search Form-->
                    <form class="rd-search form-search" action="{{route('store.search')}}"
                          method="get">
                        @csrf
                        <div class="form-wrap">
                            <input class="form-input @error('search') is-invalid @enderror" id="search-form" type="text"
                                   name="search"
                                   autocomplete="off">
                            <label class="form-label" for="search-form">Search in store...</label>

                            <button class="button-search fl-bigmug-line-search74" type="submit"></button>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </form>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2 col-xl-2">
                    <a class="button button button-shadow-2 button-primary button-zakaria"
                       href={{route('pack.create')}}>Add new product</a>
                </div>
            </div>
            <div class="row row-30 row-lg-50">
                @if(sizeof($packs)>0)
                    @foreach($packs as $pack)
                        <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                            <!-- Product-->
                            <article class="product">
                                <div class="product-body">
                                    <div class="product-figure"><a href="{{route('pack.show',$pack->id)}}"><img
                                                src={{ asset('images/uploads/packs/'.$pack->picture) }} alt="{{ $pack->title }}"
                                                width="189" height="166"/></a>
                                    </div>
                                    <h5 class="product-title"><a
                                            href="{{ route('pack.show', $pack->id) }}">{{ $pack->title }}</a>
                                    </h5>
                                    <div class="product-price-wrap">
                                        @if(!is_null($pack->sale_price))
                                            <div class="product-price">{{ $pack->sale_price }} €</div>
                                        @else
                                            <div class="product-price">{{ $pack->price }} €</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="product-button-wrap">
                                    <div class="product-button mr-2"><a
                                            class="button button-secondary button-zakaria fas fa-edit"
                                            href="{{ route('pack.edit', $pack->id) }}"></a></div>


                                    <form method="post" action="{{route('cart.add')}}">
                                        @csrf
                                        <input type="hidden" name="pack_id" value="{{$pack->id}}">
                                        <div class="product-button ml-2">
                                            <button
                                                class="button button-primary button-zakaria fl-bigmug-line-shopping202"
                                                type="submit" name="button-cart"></button>
                                        </div>
                                    </form>
                                </div>
                            </article>
                        </div>
                    @endforeach
                @else
                    <div class="col-sm-6 col-md-4 col-lg-12 col-xl-12">
                        <h5 class="text-center"><i>No results found</i></h5>
                    </div>
                @endif
            </div>
        </div>
        <div class="pagination-wrap">
            <div>{{$packs->withQueryString()->links()}}</div>
        </div>
    </section>
@endsection

