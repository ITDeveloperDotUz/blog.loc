@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="row">
            @foreach($categories as $cat)
                <div class="col-md-12">
                    <article class="single-blog post-list">
                        <div class="media">
                            <div class="media-left">
                                <div class="post-thumb">
                                    <a href="{{ route('categories.show', $cat->id) }}"> <img src="{{ Voyager::image($cat->image) }}" alt=""></a>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="post-content">
                                    <div class="entry-header text-left text-uppercase">
                                        <h2><a href="{{ route('categories.show', $cat->id) }}">{{ $cat->name }}</a></h2>
                                    </div>
                                    <div class="entry-content">
                                        <p>{{ $cat->description }}
                                        </p>
                                    </div>
                                    <div class="post-meta">
                                        <ul class="list-inline author-meta">
                                            <li class="author">By <a href="http://demo.shapedtheme.com/kotha-pro-html/default-list.html#">Jennifer </a></li>
                                            <li class="date"> On February 12, 2017</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
            <div class="col-md-12">
                <div class="post-pagination  clearfix">
                    <ul class="pagination text-left">
                        <li><a href="http://demo.shapedtheme.com/kotha-pro-html/default-list.html#">1</a></li>
                        <li class="active"><a href="http://demo.shapedtheme.com/kotha-pro-html/default-list.html#">2</a></li>
                        <li><a href="http://demo.shapedtheme.com/kotha-pro-html/default-list.html#">3</a></li>
                        <li><a href="http://demo.shapedtheme.com/kotha-pro-html/default-list.html#">4</a></li>
                        <li><a href="http://demo.shapedtheme.com/kotha-pro-html/default-list.html#"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection