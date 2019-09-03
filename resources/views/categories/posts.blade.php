<div class="single-blog post-grid card">
    <a href="{{ route('posts.show', $post->id) }}">
        <div class="card-header post-header text-white">
            <h4><strong>{{ $post->title }}</strong></h4>
        </div>
    </a>
    <div class="post-content">
        <div class="entry-content">
            <p>
                {{ $post->excerpt }}
            </p>
        </div>
        <hr />
        <div class="post-header-line">
            <a href="#"><span class="fa fa-user"></span> Bhaumik</a>
            | <a href=""><span class="fa fa-calendar"></span> Sept 16th, 2012</a>
            | <a href="#"><span class="fa fa-comment"></span> 3 Comments</a>
            | <a href="#"><span class="fa fa-share"></span> 39 Shares</a>
            | <span class="fa fa-tags"></span>
            Tags :
            <a href="#"><span class="label label-info">Snipp</span></a>
            <a href="#"><span class="label label-info">Bootstrap</span></a>
            <a href="#"><span class="label label-info">UI</span></a>
            <a href="#"><span class="label label-info">growth</span></a>
        </div>
    </div>
</div>