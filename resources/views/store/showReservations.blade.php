@extends('layouts.app')
@section('content')
    <!--+breadcrumbs-->
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{ asset('images/bg-profile.jpg') }}">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="text-transform-capitalize breadcrumbs-custom-title"> @if(count($reservations)>0){{ucfirst($reservations[0]->status)}}
                        reservations @else Reservations @endif</h2>
                    <h5 class="breadcrumbs-custom-text">Here you will find all the information related to your
                        store reservations.</h5>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('welcome')}}">Home</a></li>
                    <li><a href="{{route('store.mystore')}}">My Store</a></li>
                    <li class="active">Reservations</li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-md-10 mx-auto">
                @if(count($reservations)>0)
                    <table class="table table-responsive-md">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Pack</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Client name</th>
                            <th scope="col">Client email</th>
                            <th scope="col">Time of order</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reservations as $reservation)
                            <tr>
                                <td>{{$reservation->id}}</td>
                                <td><img width="90" height="90"
                                         src="{{asset('/images/uploads/packs/'.$reservation->picture)}}"/>
                                    <p>{{$reservation->title}}</p></td>
                                <td>{{$reservation->quantity}}</td>
                                <td>{{$reservation->name}}</td>
                                <td>{{$reservation->email}}</td>
                                <td>{{ $diff = Carbon\Carbon::parse($reservation->created_at)->diffForHumans() }}</td>
                                @if($reservation->status === "not claimed")
                                    <td>
                                        <form action="{{route('reservation.changeStatus',$reservation->id)}}"
                                              method="post">
                                            @csrf
                                            <button name="status" value="{{$reservation->status}}"
                                                    class="btn btn-primary">Claimed
                                            </button>
                                        </form>
                                    </td>
                                @elseif($reservation->status === "claimed")
                                    <td>{{$reservation->status}} at {{$reservation->updated_at}}</td>
                                @else
                                    <td>{{$reservation->status}}</td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <h5 class="mt-5" style="height: 200px">Whoops, seems like no one reserved yet! Don't worry let's
                        wait for it! </h5>
                @endif
            </div>
        </div>
    </section>
@endsection
