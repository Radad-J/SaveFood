@extends('layouts.app')

@section('title', 'Role info')

@section('content')
    <div class="my-5">
        <h3>{{ $role->id }}, {{ $role->role }}</h3>
    </div>
@endsection
