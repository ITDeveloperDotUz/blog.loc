@extends('layouts.app')

<?php
$perm2post = TCG\Voyager\Models\Post::first();
$pageBg = Voyager::image($post->image);
?>

@section('banner')
    <div class="features-content" style="background-image: url({{ $pageBg }})">
        <div class="container">
            <div class="row">
                {{--<div class="col-md-5 col-sm-offset-7">--}}
                    {{--<div class="marketing-promo-box text-center">--}}
                        {{--<a href="http://demo.shapedtheme.com/kotha-pro-html/index-marketing.html" class="promo-tag text-uppercase">Marketing Expert</a>--}}
                        {{--<h2 class="promo-title">--}}
                            {{--<a href="http://demo.shapedtheme.com/kotha-pro-html/index-marketing.html">How to Get Customers Without--}}
                                {{--Spending Any Money</a>--}}
                        {{--</h2>--}}
                        {{--<p class="promo-subtitle">LET ME SHOW YOU HOW</p>--}}
                        {{--<a href="http://demo.shapedtheme.com/kotha-pro-html/index-marketing.html" class="btn promo-btn text-uppercase">Start Here</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@endsection
@section('content')

    <div class="col-md-8">
        <article class="single-blog">

            <div class="post-content">
                <div class="entry-header text-center text-uppercase">
                    <a href="{{ route('categories.show', $post->category->id) }}" class="post-cat">{{ $post->category->name }}</a>
                    <h2>{{ $post->title }}</h2>
                </div>
                <div class="entry-content">
                    {!! $post->body !!}
                </div>
                @include('posts.meta_links')
            </div>
        </article>
        @include('posts.author_block')
        <div class="row"><!--blog next previous-->
            @if($prevPost)
                <div class="col-md-6">
                    <div class="single-blog-box" style="background-image: url({{ Voyager::image($prevPost->image) }})">
                        <a href="{{ route('posts.show', $prevPost->id) }}">
                            <div class="overlay">
                                <div class="promo-text">
                                    <p><i class="float-left fa fa-angle-left"></i></p>
                                    <h5>{{ $prevPost->title }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @else
                <div class="col-md-6"></div>
            @endif
            @if($nextPost)
                <div class="col-md-6">
                    <div class="single-blog-box" style="background-image: url({{ Voyager::image($nextPost->image) }})">
                        <a href="{{ route('posts.show', $nextPost->id) }}">
                            <div class="overlay">
                                <div class="promo-text">
                                    <p><i class=" float-right fa fa-angle-right"></i></p>
                                    <h5>{{ $nextPost->title }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endif

        </div>

        @if($post->show_comments)
            @include('posts.comments')
        @endif
        <!--leave comment-->
        @if($post->discussion)
            @include('posts.leave_comment')
        @endif
    </div>
@endsection