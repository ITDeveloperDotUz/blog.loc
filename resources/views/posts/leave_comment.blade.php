<div class="single-blog leave-comment">
    <h4>Fikr qoldirish</h4>
    <form class="form-horizontal contact-form" method="post" action="{{ route('comments.store') }}">
        @csrf
        <div class="form-group row">
            @if(auth()->user())
                <div class="col-md-6">
                    <input type="text" class="form-control" disabled value="{{ auth()->user()->name }}">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" disabled value="{{ auth()->user()->email }}">
                </div>
            @else
                <div class="col-md-6">
                    <input type="text" class="form-control" id="author_name" name="author_name" placeholder="Name" required="">
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" id="author_email" name="author_email" placeholder="Email" required="">
                </div>
            @endif
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <input type="text" class="form-control" id="author_website" name="author_website" placeholder="Website url">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <textarea class="form-control" rows="6" name="comment" placeholder="Write Massage" required=""></textarea>
            </div>
        </div>
        <input type="hidden" value="{{ $post->id }}" name="post_id">
        @if(auth()->user())
            <input type="hidden" value="{{ auth()->user()->id }}" name="author_id">
            <input type="hidden" value="{{ auth()->user()->name }}" name="author_name">
            <input type="hidden" value="{{ auth()->user()->email }}" name="author_email">
        @endif
        <button type="submit" class="btn send-btn">Post Comment</button>
    </form>
</div>