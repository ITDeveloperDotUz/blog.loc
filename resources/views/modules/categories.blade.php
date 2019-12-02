<?php

$categories = App\Category::paginate(7);


?>

<aside class="widget latest-post-widget">
    <h2 class="widget-title text-uppercase text-center">Bo'limlar</h2>
    <ul>
        @foreach($categories as $cat)
            <li class="media">
                <div class="media-left">
                    <a href="{{ route('categories.show', $cat->slug) }}" class="popular-img"><img src="{{ Voyager::image($cat->image) }}" alt="">
                    </a>
                </div>
                <div class="latest-post-content">
                    <h2 class="text-uppercase"><a href="{{ route('categories.show', $cat->slug) }}">{{ $cat->name }}</a></h2>
                </div>
            </li>
        @endforeach
    </ul>
</aside>