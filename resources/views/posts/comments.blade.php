<div class="single-blog comment-area">
    <div class="comment-heading">
        <h3>{{ $post->comments->count() }} ta fikr bildirildi.</h3>
    </div>
    @foreach($post->comments as $comment)
        <div class="single-comment">
            <div class="media">
                <div class="media-left text-center">
                    <a href="#"><img class="media-object" src="../img/reply-1.jpg" alt=""></a>
                </div>
                <div class="media-body">
                    <div class="media-heading">
                        <h3 class="text-uppercase">
                            <a href="#">{{ $comment->author_name }}</a>
                            <a href="#" class="float-right btn btn-warning">Javob berish</a>
                        </h3>
                    </div>
                    <p class="comment-date">
                        {{ $comment->created_at->format('Y-m-d') }}
                    </p>
                    <p class="comment-p">
                        {{ $comment->comment }}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</div>