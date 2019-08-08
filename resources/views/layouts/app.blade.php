<?php
    $defaultBg = isset($postImg)?$postImg:Voyager::image(setting('site.default_header_bg'));
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
    <header class="" style="background-image: url({{ $defaultBg }})">
        <h1>Doimo komillikka intil!</h1>
        <!--Navbar -->
        <nav class="navbar-expand-md navbar-dark secondary-color lighten-1">
            <a class="navbar-brand" href="{{ route('home') }}">{{ setting('site.title') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
                    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Dropdown
                        </a>
                        <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item">
                        <a href="#" class="nav-link waves-effect waves-light">1
                            <i class="fa fa-envelope"></i>
                        </a>
                    </li>
                    <li class="nav-item avatar dropdown">
                        <a href="#" class="nav-link" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <img id="head-img" src="{{ $profilePhoto }}" class="rounded-circle z-depth-0 header-img"
                                 alt="avatar image">
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
                             aria-labelledby="navbarDropdownMenuLink-55">

                            @if($user)
                                <a class="dropdown-item" href="{{ route('voyager.dashboard') }}">Shaxsiy kabinet</a>
                                <a class="dropdown-item" href="{{ route('voyager.profile') }}">Mening ma'lumotlarim</a>
                                <form action="{{ route('voyager.logout') }}" id="logout" method="post">
                                    @csrf
                                    <a onclick="$('#logout').submit()" class="dropdown-item" href="#">Chiqish</a>
                                </form>
                            @else
                                <a class="dropdown-item" href="{{ route('voyager.login') }}">Shaxsiy kabinet</a>
                            @endif


                        </div>
                    </li>
                </ul>
            </div>
        </nav>

    </header>

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
</body>
</html>
