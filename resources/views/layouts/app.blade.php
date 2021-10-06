<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>{{env('APP_NAME')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset("images/favicon.ico")}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css"
          href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLato%7CKalam:300,400,700">
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("css/fonts.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <!-- CDN material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>.ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {
            display: block;
        }</style>

</head>
<body>
<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
            src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
            alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
</div>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-bell">
            <div class="cssload-circle">
                <div class="cssload-inner"></div>
            </div>
            <div class="cssload-circle">
                <div class="cssload-inner"></div>
            </div>
            <div class="cssload-circle">
                <div class="cssload-inner"></div>
            </div>
            <div class="cssload-circle">
                <div class="cssload-inner"></div>
            </div>
            <div class="cssload-circle">
                <div class="cssload-inner"></div>
            </div>
        </div>
    </div>
</div>
<div id="app">
    <main>
        <div class="page">
            @include('flash-message')
            @if(Route::currentRouteName() === 'home')
                @include('layouts.home.header')
            @else
                @include('layouts.header')
            @endif
                @yield('content')

                @include('layouts.footer')
        </div>
    </main>
</div>
<div class="snackbars" id="form-output-global"></div>
<script src="{{asset("js/core.min.js")}}"></script>
<script src="{{asset("js/script.js")}}"></script>
</body>
</html>
