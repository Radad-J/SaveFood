@extends('layouts.app')
@section('content')

    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('images/bg-about-2.jpg')}}">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="text-transform-capitalize breadcrumbs-custom-title">Shop</h2>
                    <h5 class="breadcrumbs-custom-text">Here you will find everything you are looking for!
                        <br class="d-none d-md-block">from groceries to meals all you need in one place.</h5>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('welcome')}}">Home</a></li>
                    <li class="active">Shop</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Section Shop-->
    <section class="section section-xxl bg-default text-md-left">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-4 col-xl-3">
                    <div class="aside row row-30 row-md-50 justify-content-md-between">
                        <div class="aside-item col-sm-6 col-md-5 col-lg-12">
                            <h6 class="aside-title">Categories</h6>
                            <form action="{{route('shop.search')}}" method="get">
                                @csrf
                                <input type="hidden" value="category" name="searchCriteria">
                                <ul class="list-shop-filter">
                                    <li>
                                        <label class="checkbox-inline">
                                            <input name="categories[]" value="All" type="checkbox">All
                                        </label><span class="list-shop-filter-number">({{$totalCountPacks}})</span>
                                    </li>
                                    @foreach($packsByCat as $packByCat)
                                        <li>
                                            <label class="checkbox-inline form-check-label">
                                                <input name="categories[]" value="{{$packByCat->category}}"
                                                       type="checkbox">{{$packByCat->category}}
                                            </label><span class="list-shop-filter-number">({{$packByCat->total}})</span>
                                        </li>
                                    @endforeach
                                </ul>
                                @error('categories')
                                <p style="color:red"> {{ $message }} </p>
                                @enderror
                                <button style="width:100% !important;padding:0px 10px !important;"
                                        class="button button-sm button-primary button-zakaria" type="submit">Filter
                                </button>
                            </form>
                        </div>
                        <div class="aside-item col-12">
                            <form action="{{route('shop.search')}}" method="get">
                                <input type="hidden" value="price" name="searchCriteria">
                                @csrf
                                <h6 class="aside-title">Filter by Price</h6>
                                <!-- RD Range-->
                                <div class="rd-range" data-min="0" data-max="50" data-min-diff="1"
                                     data-start="[0, 50]"
                                     data-step="1" data-tooltip="false" data-input=".rd-range-input-value-1"
                                     data-input-2=".rd-range-input-value-2"></div>
                                <div class="group-xs group-justify">
                                    <div>
                                        @error('min')
                                        <p style="color:red"> {{ $message }} </p>
                                        @enderror
                                        @error('max')
                                        <p style="color:red"> {{ $message }} </p>
                                        @enderror
                                        <button class="button button-sm button-primary button-zakaria" type="submit">
                                            Filter
                                        </button>
                                    </div>
                                    <div>
                                        <div class="rd-range-wrap">
                                            <div class="rd-range-title">Price:</div>
                                            <div class="rd-range-form-wrap"><span>???</span>
                                                <input class="rd-range-input rd-range-input-value-1" type="text"
                                                       name="min">
                                            </div>
                                            <div class="rd-range-divider"></div>
                                            <div class="rd-range-form-wrap"><span>???</span>
                                                <input class="rd-range-input rd-range-input-value-2" type="text"
                                                       name="max">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- RD Search Form-->
                            <form class="rd-search form-search" action="{{route('shop.search')}}"
                                  method="get">
                                @csrf
                                <div class="form-wrap">
                                    <input type="hidden" value="title" name="searchCriteria">
                                    <input class="form-input form-control @error('search') is-invalid @enderror"
                                           id="search-form" type="text" name="search"
                                           autocomplete="off">
                                    <label class="form-label" for="search-form">Search in shop...</label>
                                    @error('search')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    @error('searchCriteria')
                                    <p style="color:red"> {{ $message }} </p>
                                    @enderror
                                    <button class="button-search fl-bigmug-line-search74" type="submit"></button>
                                </div>
                            </form>
                        </div>
                        <div class="aside-item col-sm-6 col-lg-12">
                            <h6 class="aside-title">Popular packs</h6>
                            <div class="row row-10 row-lg-20 gutters-10">
                                @foreach($randomPacks as $randomPack)

                                    <div class="col-4 col-sm-6 col-md-12">
                                        <!-- Product Minimal-->
                                        <article class="product-minimal">
                                            <div
                                                class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                                                <div class="unit-left"><a class="product-minimal-figure"
                                                                          href="{{route('pack.show', $randomPack->id)}}"><img
                                                            src="{{asset('images/uploads/packs/'.$randomPack->picture)}}"
                                                            alt="{{$randomPack->title}}" width="20"
                                                            height="20" style="width:110px"/></a></div>
                                                <div class="unit-body">
                                                    <p class="product-minimal-title"><a
                                                            href="{{route('pack.show', $randomPack->id)}}">{{$randomPack->title}}</a></p>
                                                    @if(is_null($randomPack->sold_price))
                                                        <p class="product-minimal-price">{{$randomPack->price}}???</p>
                                                    @else
                                                        <p class="product-minimal-price">{{$randomPack->sold_price}}
                                                            ???</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="product-top-panel group-md">
                        <p class="product-top-panel-title">Showing {{$packs->withQueryString()->firstItem()}}
                            - {{$packs->withQueryString()->lastItem()}} of {{$packs->withQueryString()->total()}}
                            results</p>
                        <div>
                            <div class="group-sm group-middle">
                                <div class="product-top-panel-sorting">
                                    <form action="{{route('shop.search')}}" method="get">
                                        <select name="sortBy" onchange="this.form.submit()">
                                            <option selected disabled>Method</option>
                                            <option value="newnessAsc">Sort by newness ascending</option>
                                            <option value="newnessDesc">Sort by newness descending</option>
                                            <option value="priceAsc">Sort by price ascending</option>
                                            <option value="priceDesc">Sort by price descending</option>
                                            <option value="alphabeticalAsc">Sort by alphabet ascending</option>
                                            <option value="alphabeticalDesc">Sort by alphabet descending</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="product-view-toggle"><a
                                        class="mdi mdi-apps product-view-link product-view-grid active"
                                        href="grid-shop.html"></a><a
                                        class="mdi mdi-format-list-bulleted product-view-link product-view-list"
                                        href="#"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-30 row-lg-50">
                        @foreach($packs as $pack)
                            <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                                <!-- Product-->
                                <article class="product">
                                    <div class="product-body">
                                        <div class="product-figure"><a class="product-minimal-figure"
                                                                       href="{{route('pack.show', $pack->id)}}"><img
                                                    src={{ asset('images/uploads/packs/'.$pack->picture) }} alt="{{ $pack->title }}"
                                                    width="189" height="166"/></a>
                                        </div>
                                        <h5 class="product-title"><a
                                                href="{{ route('pack.show', $pack->id) }}">{{ $pack->title }}</a>
                                        </h5>
                                        <div class="product-price-wrap">
                                            @if(!is_null($pack->sale_price))
                                                <div class="product-price">{{ $pack->sale_price }} ???</div>
                                            @else
                                                <div class="product-price">{{ $pack->price }} ???</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-button-wrap">
                                        <div class="product-button"><a
                                                class="button button-secondary button-zakaria fl-bigmug-line-search74"
                                                href="{{ route('pack.show', $pack->id) }}"></a></div>

                                        <form method="post" action="{{route('cart.add')}}">
                                            @csrf
                                            <input type="hidden" name="pack_id" value="{{$pack->id}}">
                                            <div class="product-button ml-3">
                                                <button
                                                    class="button button-primary button-zakaria fl-bigmug-line-shopping202"
                                                    type="submit" name="button-cart"></button>
                                            </div>
                                        </form>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination-wrap">
                        <div>{{$packs->withQueryString()->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
