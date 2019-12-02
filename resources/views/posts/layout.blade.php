<article class="single-blog post-grid">
    <div class="post-thumb thumb-post" style="background-image: url({{ Voyager::image($post->image) }})">
        <a href="{{ route('posts.show', $post->slug) }}"></a>
    </div>
    <div class="post-content">
        <div class="entry-header text-left text-uppercase">
            <a href="{{ route('categories.show', $post->category->slug) }}" class="post-cat">{{ $post->category->getName() }}</a>
            <h2><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h2>
        </div>
        <div class="entry-content">
            <p class="entry-p">{{ $post->excerpt }}...</p>
        </div>
        <div class="continue-reading text-left text-uppercase">
            <a href="{{ route('posts.show', $post->slug) }}">Continue Reading</a>
        </div>
        @include('posts.meta_links')
    </div>
</article>