@extends('layouts.app')
@section('content')

    <div class="row py-5 px-4">
        <div class="col-md-8 mx-auto">
            <!-- Profile widget -->
            <div class="bg-white shadow rounded overflow-hidden">
                <div class="px-4 pt-0 pb-4 cover">
                    <div class="media align-items-end profile-head">
                        <div class="profile mr-3"><img src="{{asset('/images/uploads/users/'.$user->avatar)}}" alt="..."
                                                       width="130" class="rounded mb-2 img-thumbnail"><a href="#"
                                                                                                         class="btn btn-outline-dark btn-sm btn-block">Edit
                                profile</a></div>
                        <div class="media-body mb-5 text-white">
                            <h4 class="mt-0 mb-0" style="color:white">{{ucfirst($user->name)}}
                                ({{ucfirst($user->role->role)}})</h4>
                            <p class="small mb-4"><i class="fas fa-map-marker-alt mr-2"></i>New York</p>
                        </div>
                    </div>
                </div>
                <div class="bg-light p-4 d-flex justify-content-end text-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">215</h5><small class="text-muted"> <i
                                    class="fas fa-image mr-1"></i>Photos</small>
                        </li>
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">745</h5><small class="text-muted"> <i
                                    class="fas fa-user mr-1"></i>Followers</small>
                        </li>
                        <li class="list-inline-item">
                            <h5 class="font-weight-bold mb-0 d-block">340</h5><small class="text-muted"> <i
                                    class="fas fa-user mr-1"></i>Following</small>
                        </li>
                    </ul>
                </div>
                <div class="px-4 py-3">
                    <h5 class="mb-0">About</h5>
                    <div class="p-4 rounded shadow-sm bg-light">
                        <p class="font-italic mb-0">{{$user->role->role}}</p>
                    </div>
                </div>
                <div class="py-4 px-4">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="mb-0">My reservations</h5>
                        @if(is_null($user->store_id))
                        <form action="#" method="put">
                            @csrf
                            <button type="submit" class="btn button">Become a partner</button>
                        </form>
                        @endif
                    </div>
                    <div class="row">
                        @if($user->totalreservations)
                            <h4>{{$user->totalreservations}}</h4>
                        @else
                            <h4>You have no reservations yet</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
