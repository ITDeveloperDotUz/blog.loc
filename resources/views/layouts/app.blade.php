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
    <header class="">
        <h1>Sticky Header Pow!</h1>
        <nav class="">
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Gallery</a>
            <a href="">Contact</a>
            <div class="container">
                <div class="">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    {{--<ul class="top-social-icons list-inline float-right">--}}
                    {{--<li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#"><i class="fa fa-facebook"></i></a></li>--}}
                    {{--<li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#"><i class="fa fa-twitter"></i></a></li>--}}
                    {{--<li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#"><i class="fa fa-instagram"></i></a></li>--}}
                    {{--<li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#"><i class="fa fa-pinterest"></i></a></li>--}}
                    {{--<li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#"><i class="fa fa-google-plus"></i></a></li>--}}
                    {{--<li class="top-search">--}}
                    {{--<a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#" class="sactive">--}}
                    {{--<i class="fa fa-search"></i>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                    <ul class="nav navbar-nav text-uppercase">
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Home
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index.html">Home Default</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-feminine.html">Home Feminine</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-travel.html">Home Travel</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-food.html">Home Food</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html">Home Material</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-marketing.html">Home Digital Marketing</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-retro.html">Home Retro Blog</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-archi.html">Home Architecture</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-magazine.html">Home Magazine</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Home
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index.html">Home Default</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-feminine.html">Home Feminine</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-travel.html">Home Travel</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-food.html">Home Food</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html">Home Material</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-marketing.html">Home Digital Marketing</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-retro.html">Home Retro Blog</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-archi.html">Home Architecture</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-magazine.html">Home Magazine</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Home
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index.html">Home Default</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-feminine.html">Home Feminine</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-travel.html">Home Travel</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-food.html">Home Food</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html">Home Material</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-marketing.html">Home Digital Marketing</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-retro.html">Home Retro Blog</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-archi.html">Home Architecture</a></li>
                                <li class="dropdown-item"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-magazine.html">Home Magazine</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>


            <!-- /.container-fluid -->
        </nav>
        <div class="kotha-logo text-center">

            <h1><a href="{{ route('home') }}"><img src="../img/material-logo.png" alt="kothPro"></a></h1>

        </div>
    </header>

    <div class="wrapper">
        @yield('banner')>
        <div class="container"
            <div class="row">
                @yield('content')
                @include('layouts.sidebar')
            </div>
        </div>
        @include('layouts.instagram_feed')
        @include('layouts.footer')
    </div>
</div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
