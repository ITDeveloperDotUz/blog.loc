<div
            class="top-comment single-blog"
            style="background: url('../img/about-me-bg.jpg') no-repeat;
                -webkit-background-size: 100%;
                background-size: 100%;"
    >
        <!--top comment-->
        <div class="row">
            <div class="col-4">
                <img src="{{ Voyager::image($post->authorId->avatar) }}" class="float-left img-circle" alt="">
            </div>
            <div class="col-8">
                <h4><a href="{{ $post->authorId->id }}">{{ $post->authorId->name }}</a></h4>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy hello ro mod tempor
                    invidunt ut labore et dolore magna aliquyam erat.</p>
                <ul class="float-right list-inline social-share">
                    <li class="list-inline-item"><a href="https://fb.com/betbe4"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/betbe4"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="https://instagram/betbe4"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="mailto://contact@betbe4.uz"><i class="fa fa-envelope"></i></a></li>
                    <li class="list-inline-item"><a href="https://t.me/betbe4"><i class="fa fa-telegram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>