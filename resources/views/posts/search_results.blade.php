@extends('layouts.app')

@section('content')
    <div class="col-sm-8">
        <div class="archive-header text-center">
            <div class="archive-title">
                Matn parchasi: <span class="archive-name">{{ $fragment }}</span>
            </div>
        </div>
        @foreach($results as $post)
            <article class="single-blog">
                <div class="post-thumb">
                    <a href="{{ route('posts.show', $post->slug) }}"> <img src="{{ Voyager::image($post->image) }}" alt=""></a>
                </div>
                <div class="post-content">
                    <div class="entry-header text-left text-uppercase">
                        <a href="{{ route('posts.show', $post->category->slug) }}" class="post-cat">{{ $post->category->name }}</a>
                        <h2><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h2>
                    </div>
                    <div class="entry-content">
                        <p>{{ $post->excerpt }}
                        </p>
                    </div>
                    <div class="post-meta">
                        <ul class="list-inline author-meta">
                            <li class="list-inline-item author">Muallif <a href="{{ route('authors.show', $post->author_id) }}">{{ $post->authorId->name }} </a></li>
                            <li class="list-inline-item date"> {{ $post->created_at->format('Y-m-d') }}</li>
                        </ul>
                    </div>
                </div>
            </article>
        @endforeach


        <div class="post-pagination clearfix">
            <ul class="pagination text-left">
                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/archive-search.html#">1</a></li>
                <li class="active"><a href="http://demo.shapedtheme.com/kotha-pro-html/archive-search.html#">2</a></li>
                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/archive-search.html#">3</a></li>
                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/archive-search.html#">4</a></li>
                <li><a href="http://demo.shapedtheme.com/kotha-pro-html/archive-search.html#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
        </div>
    </div>
@endsection