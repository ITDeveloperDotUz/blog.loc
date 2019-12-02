<article class="single-blog post-list">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5 p-0">
                <div class="post-thumb" style="background-image: url({{ Voyager::image($cat->image) }});)">
                    <a href="{{ route('categories.show', $cat->slug) }}"></a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="post-content">
                    <div class="entry-header text-left text-uppercase">
                        <h2><a href="{{ route('categories.show', $cat->slug) }}">{{ $cat->getName() }}</a></h2>
                    </div>
                    <div class="entry-content">
                        <p class="entry-p">{{ $cat->description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>