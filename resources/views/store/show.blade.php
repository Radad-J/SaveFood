@extends('layouts.app')
@section('content')

    <!--+breadcrumbs-->
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{ asset('images/bg-about.jpg') }}">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="text-transform-capitalize breadcrumbs-custom-title">Store</h2>
                    <h5 class="breadcrumbs-custom-text">Here you will find all the information related to the
                        store.</h5>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('welcome')}}">Home</a></li>
                    <li class="active"><a href="#">Store</a></li>
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
                                            <span class="icon mdi mdi-phone mr-2"></span>GSM :
                                        </th>
                                        <td>
                                            {{$store->GSM}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <span class="icon mdi mdi-map-marker mr-2"></span> Adress :
                                        </th>
                                        <td>
                                            {{$store->building_number}}, {{$store->street_name}}
                                            , {{$store->postal_code}}, {{$store->city}}
                                            , {{$store->country}}.
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-11 col-lg-6 col-xl-7">
                    <img class="float-right" src="{{asset('images/uploads/stores/'.$store->avatar)}}" width="400"
                         height="400">
                </div>
            </div>
        </div>
    </section>
@endsection

