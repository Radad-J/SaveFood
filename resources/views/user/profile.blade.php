@extends('layouts.app')
@section('content')
    <div class="row py-5 px-4">
        <div class="col-md-8 mx-auto">
            <!-- Profile widget -->
            <div class="bg-white shadow rounded overflow-hidden">
                <div class="px-4 pt-0 pb-4 cover">
                    <div class="media align-items-end profile-head">
                        <div class="profile mr-3"><img src="{{asset('/images/uploads/users/'.$user->avatar)}}" alt="..."
                                                       width="130" class="rounded mb-2 img-thumbnail"><a
                                href="{{route('user.edit',$user->id)}}"
                                class="btn btn-outline-dark btn-sm btn-block">Edit
                                profile</a></div>
                        <div class="media-body mb-5 text-white">
                            <h4 class="mt-0 mb-0" style="color:white">{{ucfirst($user->name)}}
                            </h4>
                            <p class="mb-4"><i class="fas fa-map-marker-alt mr-2"></i>({{ucfirst($user->role->role)}})
                            </p>
                        </div>
                    </div>
                </div>
                <div class="py-4 px-4 mt-5">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        @if($user->totalreservations)
                            <h5 class="mb-0">My reservations ({{$user->totalreservations}})</h5>
                        @else
                            <h6>You have no reservations yet</h6>
                        @endif

                        @if(is_null($user->store_id))
                            <form method="GET" action="{{route('store.create')}}">
                                @csrf
                                <button type="submit" class="btn button">Become a partner</button>
                            </form>
                        @endif
                    </div>
                    @if($user->totalreservations)
                        <div class="row">
                            <div class="col">
                                <table class="table table-responsive-md">
                                    <thead>
                                    <tr>
                                        <th scope="col">Pack</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Store</th>
                                        <th scope="col">Claiming hours</th>
                                        <th scope="col">Claiming days</th>
                                        <th scope="col">To pick up</th>
                                        <th scope="col">Ordered</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user->reservations as $reservation)
                                        <tr>
                                            <td>
                                                <a href="{{route('pack.show',$reservation->id)}}"><img width="100"
                                                                                                       height="100"
                                                                                                       src="{{asset('images/uploads/packs/'.$reservation->picture)}}"/></a>
                                                <p>{{$reservation->title}}</p>
                                            </td>
                                            <td>{{$reservation->quantity}}</td>
                                            @if($reservation->status === "claimed")
                                                <td>{{$reservation->status}} ({{$diff = Carbon\Carbon::parse($reservation->updated_at)->diffForHumans()}})</td>
                                            @else
                                                <td>{{$reservation->status}}</td>
                                            @endif
                                            <td>{{$reservation->name}}</td>
                                            <td>From {{$reservation->available_hour_from}}
                                                to {{$reservation->available_hour_to}}</td>
                                            <td>From {{$reservation->available_day_from}}
                                                to {{$reservation->available_day_to}}</td>
                                            <td>{{$reservation->building_number}}, {{$reservation->street_name}}
                                                , {{$reservation->postal_code}}, {{$reservation->city}}
                                                , {{$reservation->country}}</td>
                                            <td>{{ $diff = Carbon\Carbon::parse($reservation->created_at)->diffForHumans() }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
