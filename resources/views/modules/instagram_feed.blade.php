<?php

$popular_posts = new App\Post;
$posts = $popular_posts->getPopular(10);

?>

<aside class="widget insta-widget">
    <h2 class="widget-title text-uppercase text-center">Galereya</h2>
    <div class="instagram-feed">
        @foreach($posts as $post)
        <div class="single-instagram">
            <a href="{{ route('posts.show', $post->slug) }}">
                <img src="{{ Voyager::image($post->image) }}" alt="">
            </a>
            <div class="insta-overlay">
                <div class="insta-meta">
                    <ul class="list-inline text-center">
                        <li><a href="{{ route('posts.show', $post->slug) }}"><i class="fa fa-heart-o"></i></a> 325</li>
                        <li><a href="{{ route('posts.show', $post->slug) }}"><i class="fa fa-comment-o"></i></a> 20</li>
                    </ul>
                </div>
            </div>
            <a href="{{ route('posts.show', $post->slug) }}" class="insta-link"></a>
        </div>
        @endforeach
    </div>
</aside>