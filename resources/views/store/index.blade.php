@extends('layouts.app')
@section('content')

    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('images/bg-about-2.jpg')}}">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="text-transform-capitalize breadcrumbs-custom-title">Stores Page</h2>
                    <h5 class="breadcrumbs-custom-text">Here you will find all our partners.</h5>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('welcome')}}">Home</a></li>
                    <li class="active">Partners Page</li>
                </ul>
            </div>
        </div>
    </section>
    @if(count($stores)>0)
        <section class="section section-xl bg-default">
            <div class="container">
                <h4> {{$stores->withQueryString()->total()}} results</h4>
                <div class="table-custom-responsive">
                    <table class="table-custom table-cart">
                        <thead>
                        <tr>
                            <th>Store name</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>More info</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($stores as $store)
                            <tr>
                                <td><a class="table-cart-figure" href="{{route('store.show', $store->id)}}"><img
                                            src="{{asset('images/uploads/stores/'.$store->avatar)}}"
                                            alt="{{$store->name}}"
                                            width="160" height="132"/></a><a class="table-cart-link"
                                                                             href="{{route('store.show', $store->id)}}">{{$store->name}}</a>
                                </td>
                                <td>
                                    {{$store->country}}
                                </td>
                                <td>
                                    {{$store->city}}
                                </td>
                                <td><a class="button button-secondary button-zakaria fl-bigmug-line-search74"
                                       href="{{ route('store.show', $store->id) }}"></a></td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination-wrap">
                    <div>{{$stores->withQueryString()->links()}}</div>
                </div>
            </div>

        </section>
    @else
        <h5 class="my-5">No records matching your criteria? try something else <a
                style="text-decoration-line: underline"
                href={{route('store.index')}}>here</a>!</h5>
    @endif
@endsection
