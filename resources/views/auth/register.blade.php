@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my-4">
                    <div class="card-header">{{ __('Register') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- register.blade.php -->
                            <div class="image-upload text-center">
                                <label for="avatar"
                                       class="col-md-4 col-form-label text-center">{{ __('Avatar(optional)') }}<img
                                        style="border:3px lightgray solid;border-radius: 10px;cursor: pointer;padding: 5px"
                                        width="200" height="200" id="output"
                                        src="{{ asset('images/uploads/users/default_avatar.png') }}"/></label>

                                <input id="avatar" type="file" class="form-input form-control" name="avatar"
                                       onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                @error('avatar')
                                <p style="color:red"> {{ $message }} </p>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="mx-auto col-sm-6 col-md-5 col-lg-8">
                                    <h6 class="aside-title">Terms & Conditions</h6>
                                    <ul class="list-shop-filter">
                                        <li>
                                            <label class="checkbox-inline">
                                                <input
                                                    class="form-input form-control"
                                                    name="terms"
                                                    type="checkbox">I allow SaveFood to store my email address and name according to our
                                                privacy policy.
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-inline">
                                                <input
                                                    class="form-input form-control"
                                                    name="terms and conditions"
                                                    type="checkbox">I agree with the <a href="{{route('terms-and-conditions')}}">terms &
                                                    conditions</a> and the <a href="{{route('privacy-policy')}}">privacy
                                                    policy</a>
                                            </label>
                                        </li>
                                    </ul>
                                    @error('terms')
                                    <p style="color:red"> {{ $message }} </p>
                                    @enderror
                                    @error('terms_and_conditions')
                                    <p style="color:red"> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-4 offset-md-4">
                                    <button type="submit" class="btn btn-primary text-center">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
