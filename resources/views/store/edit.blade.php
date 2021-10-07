@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card my-4">
                    <div class="card-header">{{ __('Edit') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{route('store.update')}}" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('patch') }}
                        <!-- edit.blade.php -->
                            <div class="image-upload text-center">
                                <label for="avatar"
                                       class="col-md-4 col-form-label text-center">{{ __('Avatar(optional)') }}
                                    <img
                                        style="border:3px lightgray solid;border-radius: 10px;cursor: pointer;padding: 5px"
                                        class="text-center @error('avatar') is-invalid @enderror"
                                        width="200" height="200" id="output"
                                        src="{{ asset('images/uploads/stores/'.$store->avatar ) }}"/></label>

                                <input id="avatar" value="{{ $store->avatar }}" type="file" class="form-control"
                                       name="avatar"
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
                                           value="{{ $store->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="website"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Website') }}</label>

                                <div class="col-md-6">
                                    <input id="website" type="url"
                                           class="form-control @error('website') is-invalid @enderror" name="website"
                                           value="{{ $store->website }}"
                                           placeholder="https://example.com">

                                    @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gsm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('GSM') }}</label>

                                <div class="col-md-6">
                                    <input id="gsm" type="tel"
                                           class="form-control @error('gsm') is-invalid @enderror" name="gsm"
                                           value="{{ $store->GSM }}" placeholder="Ex: +1 (234) 56 89 901" required>

                                    @error('gsm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="country">Country</label>
                                <!-- require - pas de champs vide -->
                                <div class="col-md-6">
                                    <select name="country" id="country"
                                            onchange="countryChange(this);"
                                            class="py-1 text-xl lg:text-base text-gray-dark rounded-lg mt-3">
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right" for="city">City</label>
                                <!-- require - pas de champs vide -->
                                <div class="col-md-6">
                                    <select name="city" id="city"
                                            class="py-1 text-xl lg:text-base text-gray-dark rounded-lg mt-3">
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="postal_code"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Postal code') }}</label>

                                <div class="col-md-6">
                                    <input id="gsm" type="text"
                                           class="form-control @error('postal_code') is-invalid @enderror"
                                           name="postal_code"
                                           value="{{ $store->postal_code }}" placeholder="Ex: 1070" required>

                                    @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="street_name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Street name') }}</label>

                                <div class="col-md-6">
                                    <input id="street_name" type="text"
                                           class="form-control @error('street_name') is-invalid @enderror"
                                           name="street_name"
                                           value="{{ $store->street_name }}" placeholder="Ex: Rue Wayez" required>

                                    @error('street_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="building_number"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Building number') }}</label>

                                <div class="col-md-6">
                                    <input id="building_number" type="text"
                                           class="form-control @error('building_number') is-invalid @enderror"
                                           name="building_number"
                                           value="{{ $store->building_number }}" placeholder="5" required
                                           autocomplete="building_number">

                                    @error('building_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
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
<script>
    addEventListener('load', function () {
        //Get the country from the select
        let countries = document.getElementById('country');
        countries.length = 0;

        //Give a default option to the select
        let defaultOption = document.createElement('option');
        defaultOption.text = 'Choose a country';

        //Give the default option a 0 as index to show up first
        countries.add(defaultOption);
        countries.selectedIndex = 0;

        //Prepare to send the request
        var myHeaders = new Headers();
        myHeaders.append("X-CSCAPI-KEY", "TVIzM2RxWkZidHNUUkhVT1ZKN3FtWERaTHo1MVdwSHdYSEkxS0Q1NQ==");

        var requestOptions = {
            method: 'GET',
            headers: myHeaders,
            redirect: 'follow'
        };
        //Fetch the results
        fetch("https://api.countrystatecity.in/v1/countries", requestOptions)
            .then(
                function (response) {
                    if (response.status !== 200) {
                        console.warn('Looks like there was a problem. Status Code: ' +
                            response.status);
                        return;
                    }

                    // Examine the text in the response
                    response.json().then(function (data) {
                        let option;

                        for (let i = 0; i < data.length; i++) {
                            option = document.createElement('option');
                            option.text = data[i].name;
                            option.value = data[i].name;
                            option.id = data[i].iso2;
                            countries.add(option);
                        }
                    });
                }
            )
            .catch(function (err) {
                console.error('Fetch Error -', err);
            });

        //Add an event onChange to select the value of the country select so we can get all the cities using the country iso code
    });

    function countryChange(e) {
        //Get the city from the select
        let cities = document.getElementById('city');
        cities.length = 0;

        //Give a default option to the select
        let defaultOption = document.createElement('option');
        defaultOption.text = 'Choose a city';
        cities.add(defaultOption);

        //Give the default option a 0 as index to show up first
        cities.selectedIndex = 0;

        const index = e.selectedIndex;
        const selectedIso = e.options[index].id;

        //Prepare the headers to fetch the data from the api
        let url = "https://api.countrystatecity.in/v1/countries/" + selectedIso + "/cities";

        var headers = new Headers();
        headers.append("X-CSCAPI-KEY", "TVIzM2RxWkZidHNUUkhVT1ZKN3FtWERaTHo1MVdwSHdYSEkxS0Q1NQ==");

        var requestCitiesOptions = {
            method: 'GET',
            headers: headers,
            redirect: 'follow'
        };

        //Fetch data
        fetch(url, requestCitiesOptions)
            .then(
                function (response) {
                    if (response.status !== 200) {
                        console.warn('Looks like there was a problem. Status Code: ' +
                            response.status);
                        return;
                    }

                    // Examine the text in the response
                    response.json().then(function (data) {
                        let option;

                        for (let i = 0; i < data.length; i++) {
                            option = document.createElement('option');
                            option.text = data[i].name;
                            option.value = data[i].name;
                            cities.add(option);
                        }
                    });
                }
            )
            .catch(function (err) {
                console.error('Fetch Error -', err);
            });

    }
</script>
