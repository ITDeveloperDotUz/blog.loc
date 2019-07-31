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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
</head>
<body>
<div id="app">
    <header class="kotha-menu marketing-menu">

        <nav class="navbar navbar-expand-md navbar-light bg-light">

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

            <h1><a href="http://demo.shapedtheme.com/kotha-pro-html/index.html"><img src="../img/material-logo.png" alt="kothPro"></a></h1>

        </div>
    </header>
    <div class="features-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-sm-offset-7">
                    <div class="marketing-promo-box text-center">
                        <a href="http://demo.shapedtheme.com/kotha-pro-html/index-marketing.html" class="promo-tag text-uppercase">Marketing Expert</a>
                        <h2 class="promo-title">
                            <a href="http://demo.shapedtheme.com/kotha-pro-html/index-marketing.html">How to Get Customers Without
                                Spending Any Money</a>
                        </h2>
                        <p class="promo-subtitle">LET ME SHOW YOU HOW</p>
                        <a href="http://demo.shapedtheme.com/kotha-pro-html/index-marketing.html" class="btn promo-btn text-uppercase">Start Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kotha-default-content material-blog">
        <div class="container">
            <div class="row">
                @yield('content')
                <div class="col-md-4">
                    <div class="kotha-sidebar material-sidebar">
                        <aside class="widget about-me-widget  text-center">
                            <div class="about-me-content">
                                <div class="about-me-img">
                                    <img src="../img/me.jpg" alt="" class="img-me img-circle">
                                    <h2 class="text-uppercase">Kotha Smith</h2>
                                    <p>Kotha Smith is an enthusiastic and passionate Story Teller. He loves to do different
                                        home-made things
                                        and share to the world.</p>
                                </div>
                            </div>
                            <div class="social-share">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a class="s-facebook" href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="s-twitter" href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a class="s-google-plus" href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="list-inline-item"><a class="s-linkedin" href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a class="s-instagram" href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="widget news-letter-widget">
                            <h2 class="widget-title text-uppercase text-center">Get Newsletter</h2>
                            <form action="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#">
                                <input type="email" placeholder="Your email address" required="">
                                <input type="submit" value="Subscribe Now" class="text-uppercase text-center btn btn-subscribe">
                            </form>
                        </aside>
                        <aside class="widget widget-popular-post">
                            <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>
                            <ul>
                                <li>
                                    <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#" class="popular-img"><img src="../img/p-1.jpg" alt="">
                                    </a>
                                    <div class="p-content">
                                        <h4><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#" class="text-uppercase">A Mindblowing Interior Design</a></h4>
                                        <span class="p-date">February 15, 2016</span>
                                    </div>
                                </li>
                                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#" class="popular-img"><img src="../img/p-2.jpg" alt="">
                                    </a>
                                    <div class="p-content">
                                        <h4><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#" class="text-uppercase">A Table with amazing books</a></h4>
                                        <span class="p-date">February 15, 2016</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#" class="popular-img"><img src="../img/p-3.jpg" alt="">
                                    </a>
                                    <div class="p-content">
                                        <h4><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#" class="text-uppercase">Home is peaceful Place</a></h4>
                                        <span class="p-date">February 15, 2016</span>
                                    </div>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget latest-post-widget">
                            <h2 class="widget-title text-uppercase text-center">Latest Posts</h2>
                            <ul>
                                <li class="media">
                                    <div class="media-left">
                                        <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#" class="popular-img"><img src="../img/recent-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="latest-post-content">
                                        <h2 class="text-uppercase"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#">A Theme to Tell Stories</a></h2>
                                        <p>April 20, 2017</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#" class="popular-img"><img src="../img/recent-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="latest-post-content">
                                        <h2 class="text-uppercase"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#">Just Wondering at Beach</a></h2>
                                        <p>May 27, 2017</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#" class="popular-img"><img src="../img/recent-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="latest-post-content">
                                        <h2 class="text-uppercase"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#">Lorem Ipsum Dolor sit amet</a></h2>
                                        <p>April 20, 2017</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#" class="popular-img"><img src="../img/recent-4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="latest-post-content">
                                        <h2 class="text-uppercase"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#">Lorem Ipsum Dolor sit amet</a></h2>
                                        <p>May 27, 2017</p>
                                    </div>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget insta-widget">
                            <h2 class="widget-title text-uppercase text-center">INSTAGRAM FEED</h2>
                            <div class="instagram-feed">
                                <div class="single-instagram">
                                    <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html">
                                        <img src="../img/ft-insta-1.jpg" alt="">
                                    </a>
                                    <div class="insta-overlay">
                                        <div class="insta-meta">
                                            <ul class="list-inline text-center">
                                                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-heart-o"></i></a> 325</li>
                                                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-comment-o"></i></a> 20</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" class="insta-link"></a>
                                </div>
                                <div class="single-instagram">
                                    <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html">
                                        <img src="../img/ft-insta-6.jpg" alt="">
                                    </a>
                                    <div class="insta-overlay">
                                        <div class="insta-meta">
                                            <ul class="list-inline text-center">
                                                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-heart-o"></i></a> 325</li>
                                                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-comment-o"></i></a> 20</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" class="insta-link"></a>
                                </div>
                                <div class="single-instagram">
                                    <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html">
                                        <img src="../img/ft-insta-4.jpg" alt="">
                                    </a>
                                    <div class="insta-overlay">
                                        <div class="insta-meta">
                                            <ul class="list-inline text-center">
                                                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-heart-o"></i></a> 325</li>
                                                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-comment-o"></i></a> 20</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" class="insta-link"></a>
                                </div>
                                <div class="single-instagram">
                                    <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html">
                                        <img src="../img/ft-insta-3.jpg" alt="">
                                    </a>
                                    <div class="insta-overlay">
                                        <div class="insta-meta">
                                            <ul class="list-inline text-center">
                                                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-heart-o"></i></a> 325</li>
                                                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-comment-o"></i></a> 20</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" class="insta-link"></a>
                                </div>
                                <div class="single-instagram">
                                    <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html">
                                        <img src="../img/ft-insta-7.jpg" alt="">
                                    </a>
                                    <div class="insta-overlay">
                                        <div class="insta-meta">
                                            <ul class="list-inline text-center">
                                                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-heart-o"></i></a> 325</li>
                                                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-comment-o"></i></a> 20</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" class="insta-link"></a>
                                </div>
                                <div class="single-instagram">
                                    <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html">
                                        <img src="../img/ft-insta-8.jpg" alt="">
                                    </a>
                                    <div class="insta-overlay">
                                        <div class="insta-meta">
                                            <ul class="list-inline text-center">
                                                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-heart-o"></i></a> 325</li>
                                                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-comment-o"></i></a> 20</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" class="insta-link"></a>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget add-widget">
                            <h2 class="widget-title text-uppercase text-center">Advertisement</h2>

                            <div class="add-image">
                                <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><img src="../img/add-image.jpg" alt=""></a>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid insta-feed text-center">
            <h2 class="text-uppercase">Follow@ <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html">Instagram</a></h2>
            <!--div id="footer-instagram" class="footer-insta slick-initialized slick-slider">
                <div aria-live="polite" class="slick-list draggable">
                    <div class="slick-track" role="listbox" style="opacity: 1; width: 1344px; transform: translate3d(0px, 0px, 0px);">
                        <div class="item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00" style="width: 168px;">
                            <div class="single-instagram">
                                <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0">
                                    <img src="../img/ft-insta-1.jpg" alt="">
                                </a>
                                <div class="insta-overlay">
                                    <div class="insta-meta">
                                        <ul class="list-inline text-center">
                                            <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0"><i class="fa fa-heart-o"></i></a> 325</li>
                                            <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0"><i class="fa fa-comment-o"></i></a> 20</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" class="insta-link" tabindex="0"></a>
                            </div>
                        </div>
                        <div class="item slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide01" style="width: 168px;">
                            <div class="single-instagram">
                                <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0">
                                    <img src="../img/ft-insta-2.jpg" alt="">
                                </a>
                                <div class="insta-overlay">
                                    <div class="insta-meta">
                                        <ul class="list-inline text-center">
                                            <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0"><i class="fa fa-heart-o"></i></a> 325</li>
                                            <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0"><i class="fa fa-comment-o"></i></a> 20</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" class="insta-link" tabindex="0"></a>
                            </div>

                        </div>
                        <div class="item slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide02" style="width: 168px;">
                            <div class="single-instagram">
                                <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0">
                                    <img src="../img/ft-insta-3.jpg" alt="">
                                </a>
                                <div class="insta-overlay">
                                    <div class="insta-meta">
                                        <ul class="list-inline text-center">
                                            <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0"><i class="fa fa-heart-o"></i></a> 325</li>
                                            <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0"><i class="fa fa-comment-o"></i></a> 20</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" class="insta-link" tabindex="0"></a>
                            </div>

                        </div>
                        <div class="item slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide03" style="width: 168px;">
                            <div class="single-instagram">
                                <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0">
                                    <img src="../img/ft-insta-4.jpg" alt="">
                                </a>
                                <div class="insta-overlay">
                                    <div class="insta-meta">
                                        <ul class="list-inline text-center">
                                            <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0"><i class="fa fa-heart-o"></i></a> 325</li>
                                            <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0"><i class="fa fa-comment-o"></i></a> 20</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" class="insta-link" tabindex="0"></a>
                            </div>
                        </div>
                        <div class="item slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide04" style="width: 168px;">
                            <div class="single-instagram">
                                <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0">
                                    <img src="../img/ft-insta-5.jpg" alt="">
                                </a>
                                <div class="insta-overlay">
                                    <div class="insta-meta">
                                        <ul class="list-inline text-center">
                                            <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0"><i class="fa fa-heart-o"></i></a> 325</li>
                                            <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0"><i class="fa fa-comment-o"></i></a> 20</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" class="insta-link" tabindex="0"></a>
                            </div>
                        </div>
                        <div class="item slick-slide slick-active" data-slick-index="5" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide05" style="width: 168px;">
                            <div class="single-instagram">
                                <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0">
                                    <img src="../img/ft-insta-6.jpg" alt="">
                                </a>
                                <div class="insta-overlay">
                                    <div class="insta-meta">
                                        <ul class="list-inline text-center">
                                            <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0"><i class="fa fa-heart-o"></i></a> 325</li>
                                            <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0"><i class="fa fa-comment-o"></i></a> 20</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" class="insta-link" tabindex="0"></a>
                            </div>
                        </div>
                        <div class="item slick-slide slick-active" data-slick-index="6" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide06" style="width: 168px;">
                            <div class="single-instagram">
                                <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0">
                                    <img src="../img/ft-insta-7.jpg" alt="">
                                </a>
                                <div class="insta-overlay">
                                    <div class="insta-meta">
                                        <ul class="list-inline text-center">
                                            <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0"><i class="fa fa-heart-o"></i></a> 325</li>
                                            <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0"><i class="fa fa-comment-o"></i></a> 20</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" class="insta-link" tabindex="0"></a>
                            </div>
                        </div>
                        <div class="item slick-slide slick-active" data-slick-index="7" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide07" style="width: 168px;">
                            <div class="single-instagram">
                                <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0">
                                    <img src="../img/ft-insta-8.jpg" alt="">
                                </a>
                                <div class="insta-overlay">
                                    <div class="insta-meta">
                                        <ul class="list-inline text-center">
                                            <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0"><i class="fa fa-heart-o"></i></a> 325</li>
                                            <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" tabindex="0"><i class="fa fa-comment-o"></i></a> 20</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" class="insta-link" tabindex="0"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div-->
        </div>
        <footer class="container-fluid">
            <div class="row footer-widget-row">

                <div class="col-md-4 footer-widget contact-widget">
                    <div class="widget-title">
                        <img src="../img/kotha-white-logo.png" alt="">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eaccusam et justo duo
                        dolores eteem.</p>
                    <div class="address">
                        <h4 class="text-uppercase">contact Info</h4>
                        <p> 239/2 NK Street, DC, USA</p>
                        <p> Phone: +123 456 78900</p>
                        <a href="mailto:theme@kotha.com">theme@kotha.com</a>
                    </div>
                </div>
                <div class="col-md-4 footer-widget twitter-widget">
                    <h2 class="widget-title text-uppercase">
                        Latest TWeeTs
                    </h2>
                    <div class="single-tweet">
                        <p>Check our new theme 'kotha - Personal WordPress Blog Theme' on #themeforest #Envato
                            #WordPress <br>
                            <a href="https://t.co/kN5OPEuPzx">https://t.co/kN5OPEuPzx</a></p>
                        <h4><i class="fa fa-twitter"></i>Tweeted on 17 hours ago</h4>
                    </div>
                    <div class="single-tweet">
                        <p>Check our new theme 'kotha - Personal WordPress Blog Theme' on #themeforest #Envato
                            #WordPress
                            <br>
                            <a href="https://t.co/kN5OPEuPzx">https://t.co/kN5OPEuPzx</a></p>
                        <h4><i class="fa fa-twitter"></i>Tweeted on 17 hours ago</h4>
                    </div>
                </div>
                <!--div class="col-md-3 footer-widget social-widget">
                    <h2 class="widget-title text-uppercase">
                        Keep in touch
                    </h2>
                    <ul>
                        <li><a href=""><i class="fa fa-facebook"></i>facebook</a></li>
                        <li><a href=""><i class="fa fa-twitter"></i>twitter</a></li>
                        <li><a href=""><i class="fa fa-instagram"></i>instagram</a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i> google plus</a></li>
                        <li><a href=""><i class="fa fa-youtube"></i>Youtube</a></li>
                        <li><a href=""><i class="fa fa-envelope"></i> E-mail</a></li>
                        <li><a href=""><i class="fa fa-vimeo"></i> Vimeo </a></li>
                        <li><a href=""><i class="fa fa-pinterest"></i> Pinterest</a></li>

                    </ul>
                </div-->
                <div class="col-md-4 footer-widget testimonial-widget">
                    <h2 class="widget-title text-uppercase">Testimonials</h2>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        @foreach($quotes as $quote)
                            <div class="item">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>{{ $quote->quotation }}</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="../img/author.jpg" alt="">
                                        <div class="author-text">
                                            <h4>{{ $quote->author }}</h4>
                                            <h4>{{ $quote->created_at }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                    <a href="#" class="testimonials-next"></a>
                </div>
            </div>
            <div class="row text-center ft-copyright">
                <p>© 2017 <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html">Kotha PRO </a> - Designed with <i class="fa fa-heart"></i> by <a href="http://shapedtheme.com/">ShapedTheme</a></p>
            </div>
        </footer>

        <div class="scroll-up" style="display: none;">
            <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#"><i class="fa fa-angle-up"></i></a>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
