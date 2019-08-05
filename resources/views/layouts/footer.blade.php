<footer class="container-fluid">
    <div class="row footer-widget-row">

        <div class="col-md-4 footer-widget contact-widget">
            <div class="widget-title">
                <h1 class="title">{{ setting('site.title') }}</h1>
            </div>
            <p>{{ setting('site.description') }}</p>
            <div class="social-widget">
                <h4 class="text-uppercase">Kuzatib boring</h4>
                <ul>
                    <li><a href="https://fb.com/betbe4"><i class="fa fa-facebook"></i>facebook</a></li>
                    <li><a href="https://twitter.com/betbe4"><i class="fa fa-twitter"></i>Twitter Blog</a></li>
                    <li><a href="https://instagram/betbe4"><i class="fa fa-instagram"></i>Instagram blog</a></li>
                    <li><a href="mailto://contact@betbe4.uz"><i class="fa fa-envelope"></i> E-mail</a></li>
                    <li><a href="https://t.me/betbe4"><i class="fa fa-telegram"></i> Telegram kanal</a></li>

                </ul>
            </div>
        </div>
        <div class="col-md-4 footer-widget twitter-widget">
            <h2 class="widget-title text-uppercase">
                Latest TWeeTs
            </h2>
            <div class="single-tweet">
                <p>Check our new theme 'kotha - Personal WordPress Blog Theme' on #themeforest #Envato
                    #WordPress <br>
                    <a href="https://t.co/kN5OPEuPzx">https://t.co/kN5OPEuPzx</a></p>
                <h4><i class="fa fa-twitter"></i>Tweeted on 17 hours ago</h4>
            </div>
            <div class="single-tweet">
                <p>Check our new theme 'kotha - Personal WordPress Blog Theme' on #themeforest #Envato
                    #WordPress
                    <br>
                    <a href="https://t.co/kN5OPEuPzx">https://t.co/kN5OPEuPzx</a></p>
                <h4><i class="fa fa-twitter"></i>Tweeted on 17 hours ago</h4>
            </div>
        </div>
        <!--div class="col-md-3 footer-widget ">
            <h2 class="widget-title text-uppercase">
                Keep in touch
            </h2>
            <ul>
                <li><a href=""><i class="fa fa-facebook"></i>facebook</a></li>
                <li><a href=""><i class="fa fa-twitter"></i>twitter</a></li>
                <li><a href=""><i class="fa fa-instagram"></i>instagram</a></li>
                <li><a href=""><i class="fa fa-google-plus"></i> google plus</a></li>
                <li><a href=""><i class="fa fa-youtube"></i>Youtube</a></li>
                <li><a href=""><i class="fa fa-envelope"></i> E-mail</a></li>
                <li><a href=""><i class="fa fa-vimeo"></i> Vimeo </a></li>
                <li><a href=""><i class="fa fa-pinterest"></i> Pinterest</a></li>

            </ul>
        </div-->
        <div class="col-md-4 footer-widget testimonial-widget">
            <h2 class="widget-title text-uppercase">Testimonials</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                @foreach($quotes as $quote)
                    <div class="item">
                        <div class="single-review">
                            <div class="review-text">
                                <p>{{ $quote->quotation }}</p>
                            </div>
                            <div class="author-id">
                                <img src="../img/author.jpg" alt="">
                                <div class="author-text">
                                    <h4>{{ $quote->author }}</h4>
                                    <h4>{{ $quote->created_at }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
            <a href="#" class="testimonials-next"></a>
        </div>
    </div>
    <div class="row text-center ft-copyright">
        {!! setting('site.footer_bottom_text') !!}
    </div>
</footer>

<div class="scroll-up" style="display: none;">
    <a href="#"><i class="fa fa-angle-up"></i></a>
</div>