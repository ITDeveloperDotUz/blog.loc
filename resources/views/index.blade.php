@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            @foreach($topPosts as $tpost)
                <div class="col-md-3">
                    <div class="single-blog-box" style="background-image: url({{ Voyager::image($tpost->image) }})">
                        <a href="{{ route('posts.show', $tpost->id) }}">
                            <div class="overlay">
                                <div class="promo-text">
                                    <h5>{{ $tpost->title }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="col-md-8">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-6">
                    <article class="single-blog post-grid">
                        <div class="post-thumb thumb-post" style="background-image: url({{ Voyager::image($post->image) }})">
                            <a href="{{ route('posts.show', $post->id) }}"></a>
                        </div>
                        <div class="post-content">
                            <div class="entry-header text-left text-uppercase">
                                <a href="" class="post-cat"></a>
                                <h2><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
                            </div>
                            <div class="entry-content">
                                <p>{{ $post->excerpt }}...</p>
                            </div>
                            <div class="continue-reading text-left text-uppercase">
                                <a href="{{ route('posts.show', $post->id) }}">Continue Reading</a>
                            </div>
                            @include('posts.meta_links')
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
        <article class="single-blog">
            <div class="post-thumb">
                <div id="blog-gallery-slider" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div id="blog0gallery-slick" class="carousel-inner">
                        <div class="item active left">
                            <img src="../img/post-thumb-8.jpg" alt="">
                        </div>
                        <div class="item next left">
                            <img src="../img/post-thumb-9.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="../img/post-thumb-7.jpg" alt="">
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left prev carousel-control" href="#" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right next carousel-control" href="#" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
            <div class="post-content">
                <div class="entry-header text-left text-uppercase">
                    <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html" class="post-cat">Slider</a>
                    <h2><a href="http://demo.shapedtheme.com/kotha-pro-html/single-page.html">Awesome slider post</a></h2>
                </div>
                <div class="entry-content">
                    <p>Consetetur sadipscing elitr, Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                        diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                        accusam
                        et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                        Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, sed
                        diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                        voluptua...</p>
                </div>
                <div class="continue-reading text-left text-uppercase">
                    <a href="http://demo.shapedtheme.com/kotha-pro-html/single-page.html">Continue Reading</a>
                </div>
                <div class="post-meta">
                    <ul class="float-left list-inline author-meta">
                        <li class="list-inline-item author">By <a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#">Jennifer </a></li>
                        <li class="list-inline-item date"> On February 12, 2017</li>
                    </ul>
                    <ul class="float-right list-inline social-share">
                        <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="fa fa-pinterest"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </article>
        <div class="post-pagination clearfix">
            <ul class="pagination text-left">
                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#">1</a></li>
                <li class="active"><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#">2</a></li>
                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#">3</a></li>
                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#">4</a></li>
                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
        </div>
    </div>
@endsection

@section('javascript')

@endsection