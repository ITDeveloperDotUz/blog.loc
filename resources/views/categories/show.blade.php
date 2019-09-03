<?php

$pageBg = Voyager::image($category->image);

?>

@extends('layouts.app')

@section('content')

<div class="col-md-8">
    <div class="archive-header text-center">
        <div class="archive-title">
            <span class="archive-name">{{ __('posts.posts') }} - {{ count($category->posts) }}</span>
        </div>
    </div>
    @if(count($category->posts))
        <div class="container-fluid">
            <div class="row">
                @foreach($category->posts as $post)
                    @include('categories.posts')
                @endforeach
            </div>
        </div>
    @endif

</div>
@endsection