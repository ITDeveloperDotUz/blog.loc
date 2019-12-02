<?php

$latest_posts = new App\Post;
$latests = $latest_posts->getLatest(5);


?>

<aside class="widget latest-post-widget">
    <h2 class="widget-title text-uppercase text-center">So'nggi maqolalar</h2>
    <ul>
        @foreach($latests as $latest)
            <li class="media">
                <div class="media-left">
                    <a href="{{ route('posts.show', $latest->slug) }}" class="popular-img"><img src="{{ Voyager::image($latest->image) }}" alt="">
                    </a>
                </div>
                <div class="latest-post-content">
                    <h2 class="text-uppercase"><a href="{{ route('posts.show', $latest->slug) }}">{{ $latest->title }}</a></h2>
                    <p>{{ $latest->created_at->format('Y-m-d') }}</p>
                </div>
            </li>
        @endforeach
    </ul>
</aside>