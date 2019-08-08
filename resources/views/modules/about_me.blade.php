<aside class="widget about-me-widget text-center" style="background-image: url({{ $defaultBg }});">
    <div class="about-me-content">
        <div class="about-me-img">
            @if($user)
                <img src="{{ Voyager::image($user->avatar) }}" alt="" class="img-me img-circle">
                <h2 class="text-uppercase">{{ $user->name }}</h2>
                <p>{{ setting($user->quote) }}</p>
            @else
                <img src="{{ Voyager::image(setting('site.logo')) }}" alt="" class="img-me img-circle">
                <h2 class="text-uppercase">{{ setting('site.title') }}</h2>
                <p>{{ setting('site.description') }}</p>
            @endif

        </div>
    </div>
    <div class="social-share">
        <ul class="list-inline">
            <li class="list-inline-item"><a class="s-facebook" href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a class="s-twitter" href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a class="s-google-plus" href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a class="s-linkedin" href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-linkedin"></i></a></li>
            <li class="list-inline-item"><a class="s-instagram" href="http://demo.shapedtheme.com/kotha-pro-html/index-material.html"><i class="fa fa-instagram"></i></a></li>
        </ul>
    </div>
</aside>