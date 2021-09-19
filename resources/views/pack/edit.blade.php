@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my-4">
                    <div class="card-header">{{ __('Create new pack') }}</div>
                    <div class="card-body">
                        <form class="rd-form rd-mailform" method="post"
                              action="{{route('pack.update',$pack->id)}}" enctype="multipart/form-data">
                            {{ method_field('patch') }}
                            @csrf
                            <div class="row row-20 row-md-30">
                                <div class="col-lg-12">
                                    <div class="row row-20 row-md-30">
                                        <div class="col-lg-6">
                                            <div class="image-upload text-center">
                                                <label for="file-input">
                                                    <img
                                                        style="border:3px lightgray solid;border-radius: 10px;cursor: pointer;padding: 5px"
                                                        width="200" height="200" id="output"
                                                        src="{{ asset('images/uploads/packs/'.$pack->picture ) }}"/>
                                                </label>
                                                <input class="form-input form-control" name="picture" id="file-input"
                                                       type="file" value="{{ $pack->picture }}"
                                                       onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])"/>
                                                @error('picture')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <h6>{{ __('Categories') }}</h6>
                                                <ul class="list-shop-filter">
                                                    @foreach($allcategories as $category)
                                                        <li>
                                                            <label class="checkbox-inline">
                                                                <input
                                                                    class="form-input form-control @error('categories') is-invalid @enderror"
                                                                    name="categories[]"
                                                                    value="{{$category->id}}"
                                                                    type="checkbox"
                                                                    @if( in_array($category->id, $packcat) ) checked="1" @endif >{{$category->category}}
                                                            </label>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                                @error('categories')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-wrap">

                                                <input id="title" type="text" value="{{$pack->title}}"
                                                       class="form-control form-input @error('title') is-invalid @enderror"
                                                       name="title">
                                                <label for="title" class="form-label">{{ __('Title') }}</label>
                                                @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <label for="stock"
                                                       class="form-label">{{ __('Stock') }}</label>
                                                <input id="stock" value="{{$pack->stock}}"
                                                       class="form-input  form-control @error('stock') is-invalid @enderror"
                                                       name="stock" required
                                                       data-constraints="@Numeric">
                                                @error('stock')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-wrap">
                                                <textarea
                                                    class="form-control form-input textarea-lg @error('description') is-invalid @enderror"
                                                    id="description"
                                                    name="description"
                                                    data-constraints="@Required">{{$pack->description}}</textarea>
                                                <label class="form-label"
                                                       for="description">{{ __('Description') }}</label>
                                                @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input id="price" value="{{$pack->price}}"
                                                       class="form-input form-control @error('price') is-invalid @enderror"
                                                       name="price" required
                                                       data-constraints="@Numeric">
                                                <label for="price" class="form-label">{{ __('Price') }}</label>
                                                @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input id="sale_price" value="{{$pack->sale_price}}"
                                                       class="form-input form-control @error('sale_price') is-invalid @enderror"
                                                       name="sale_price"
                                                       data-constraints="@Numeric">
                                                <label for="sale_price"
                                                       class="form-label">{{ __('Sale price (Optional)') }}</label>
                                                @error('sale_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-wrap">
                                                <label class="form-input text-center" style="border:none"
                                                >{{ __('Claiming day from/to') }}</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input id="available_day_from" type="date"
                                                       value="{{$pack->available_day_from}}"
                                                       class="form-input form-control @error('available_day_from') is-invalid @enderror"
                                                       name="available_day_from" required>

                                                @error('available_day_from')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input id="available_day_to" type="date"
                                                       value="{{$pack->available_day_to}}"
                                                       class="form-input form-control @error('available_day_to') is-invalid @enderror"
                                                       name="available_day_to" required>

                                                @error('available_day_to')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 text-center">
                                            <div class="form-wrap">
                                                <label class="form-input" style="border:none" for="available_hour_from"
                                                >{{ __('Claiming hour from/to') }}</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input id="available_hour_from" type="time"
                                                       value="{{$pack->available_hour_from}}"
                                                       class="form-input form-control @error('available_hour_from') is-invalid @enderror"
                                                       name="available_hour_from" required>

                                                @error('available_hour_from')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input id="available_hour_to" type="time"
                                                       value="{{$pack->available_hour_to}}"
                                                       class="form-input form-control @error('available_hour_to') is-invalid @enderror"
                                                       name="available_hour_to" required>

                                                @error('available_hour_to')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="button button-lg button-primary button-zakaria" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
