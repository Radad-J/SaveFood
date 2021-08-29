@extends('layouts.app')

@section('title', 'Category info')

@section('content')
    <div class="my-5">
        <h3>{{ $category->id }}, {{ $category->category }}</h3>
    </div>
@endsection
