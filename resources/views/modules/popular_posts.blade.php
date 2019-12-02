<?php

    $popular_posts = new App\Post;
    $populars = $popular_posts->getPopular(5);


?>

<aside class="widget widget-popular-post">
    <h3 class="widget-title text-uppercase text-center">Mashhur maqolalar</h3>
    <ul>
        @foreach($populars as $popular)
            <li>
                <a href="{{ route('posts.show', $popular->slug) }}" class="popular-img"><img src="{{ Voyager::image($popular->image) }}" alt="">
                </a>
                <div class="p-content">
                    <h4><a href="{{ route('posts.show', $popular->slug) }}" class="text-uppercase">{{ $popular->title }}</a></h4>
                    <span class="p-date"><i class="fa fa-calendar"></i> Sana: {{ $popular->created_at->format('Y-m-d') }}</span><br>
                    <span class="p-date"><i class="fa fa-user"></i> Muallif: {{ $popular->authorId->name }}</span><br>
                    <span class="p-date"><i class="fa fa-eye"></i> O'qildi: {{ $popular->hits }}</span>
                </div>
            </li>
        @endforeach
    </ul>
</aside>