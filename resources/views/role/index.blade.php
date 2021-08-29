@extends('layouts.app')

@section('title', 'List of roles')

@section('content')

    <div class="my-5">
        <h3>Liste des {{ $resource }}</h3>
        <ul>
            @foreach($roles as $role)
                <li>{{ $role->role}}</li>
            @endforeach
        </ul>
    </div>

@endsection
