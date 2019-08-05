<div class="post-meta">
    <ul class="float-left list-inline author-meta">
        <li class="list-inline-item author">Muallif <a href="{{ route('authors.show', $post->authorId->id) }}">{{ $post->authorId->name }} </a></li>
        <li class="list-inline-item date"> {{ $post->created_at->format('Y-m-d') }}</li>
    </ul>
    <ul class="float-right list-inline social-share">
        <li class="list-inline-item"><a href="https://fb.com/betbe4"><i class="fa fa-facebook"></i></a></li>
        <li class="list-inline-item"><a href="https://twitter.com/betbe4"><i class="fa fa-twitter"></i></a></li>
        <li class="list-inline-item"><a href="https://instagram/betbe4"><i class="fa fa-instagram"></i></a></li>
        <li class="list-inline-item"><a href="mailto://contact@betbe4.uz"><i class="fa fa-envelope"></i></a></li>
        <li class="list-inline-item"><a href="https://t.me/betbe4"><i class="fa fa-telegram"></i></a></li>

    </ul>
</div>