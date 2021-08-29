@extends('layouts.app')

@section('title', 'List of categories')

@section('content')

    <div class="my-5">
        <h3>List of {{ $resource }}</h3>
        <ul>
            @foreach($categories as $category)
                <li>{{ $category->id}}, {{ $category->category}}</li>
            @endforeach
        </ul>
    </div>

@endsection
