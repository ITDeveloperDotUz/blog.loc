<?php
    $defaultBg = isset($pageBg)?$pageBg:Voyager::image(setting('site.default_header_bg'));
    $user = auth()->user();
    $profilePhoto = $user?Voyager::image($user->avatar):Voyager::image(setting('site.logo'));
?>


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ setting('site.title') }}</title>
    <link rel="icon" href="/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{--<link rel="stylesheet" href="{{ asset('css/style.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
</head>
<body>
<div id="app">
    @include('layouts.header')

    <div class="wrapper">
        @yield('banner')
        <div class="mb-5"></div>

        <div class="container-fluid">
            <div class="row">
                @yield('content')
                @include('layouts.sidebar')
            </div>
        </div>
    </div>
        @include('layouts.instagram_feed')
        @include('layouts.footer')
</div>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('javascript')
</body>
</html>
