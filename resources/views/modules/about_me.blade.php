<?php $admin = App\User::find(1); ?>
<aside class="widget about-me-widget text-center"

>
    <div class="about-me-content">
        <div class="about-me-img">
            <img src="{{ Voyager::image($admin->avatar) }}" alt="" class="img-me img-circle">
            <h2 class="text-uppercase">{{ $admin->name }}</h2>
            <p>Kotha Smith is an enthusiastic and passionate Story Teller. He loves to do different
                home-made things
                and share to the world.</p>
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