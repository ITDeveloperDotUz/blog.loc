/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('bootstrap');

//window.Vue = require('vue');
window.$ = require('jquery');
window.slick = require('slick-carousel');
//window.masonry = require('masonry-layout');
window.isotope = require('isotope-layout');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });




// custom

$(document).ready(function () {
    "use strict";
    /* === Footer Instagram === */

    (function () {
        $('#footer-instagram').not('.slick-initialized').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 8,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 6,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }());
    /* === menu drop-down === */
    (function () {
        $('#food-feature-carousel').not('.slick-initialized').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            prevArrow: '<i class="fa fa-angle-left left"></i>',
            nextArrow: '<i class="fa fa-angle-right right"></i> ',
            responsive: [

                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }());
    (function () {
        $('.related-post-carousel-items').not('.slick-initialized').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            autoPlay: true,
            responsive: [
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }());
    (function () {
        $('.archi-feature-category').not('.slick-initialized').slick({
            centerMode: true,
            slidesToShow: 3,
            centerPadding: '60px',
            prevArrow: '<i class="fa fa-angle-left left"></i>',
            nextArrow: '<i class="fa fa-angle-right right"></i> ',
            responsive: [

                {
                    breakpoint: 800,
                    settings: {
                        centerMode: true,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        centerMode: true,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }());
    (function () {
        $('.popular-post-slider').not('.slick-initialized').slick({
            infinite: true,
            arrows: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 2,
            dots: true,
            responsive: [
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        dots: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true
                    }
                }
            ]
        });
    }());
    $('#myCarousel').slick({
        dots: true,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 6000,
        speed: 800,
        slidesToShow: 1,
        adaptiveHeight: true,
        nextArrow: $('.testimonials-next')
    });

    $(function(){
        $(window).scroll(function(){
            scrolls();
        });
        scrolls();
        function scrolls(){
            var winTop = $(window).scrollTop();
            if(winTop >= 30){
                $("#app").addClass("sticky-header");
                $('.wrapper').addClass('wrapper-padding');
                $('#head-img').css({
                    'max-height': 50 + 'px',
                    'margin-top': ''
                });
            }else{
                $("#app").removeClass("sticky-header");
                $('.wrapper').removeClass('wrapper-padding');
                $('#head-img').css({
                    'max-height': '',
                    'margin-top': -150 + 'px'
                });
            }
        }
    });

    $('#related_posts').slick({
        dots: true,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 6000,
        speed: 800,
        slidesToShow: 3,
        adaptiveHeight: true,
    });

    $('#blog0gallery-slick').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 6000,
        speed: 800,
        slidesToShow: 1,
        adaptiveHeight: true,
        prevArrow: $('.prev'),
        nextArrow: $('.next')
    });
    /* === Search === */
    (function () {
        $('.top-search a').click(function (e) {
            e.preventDefault();
            //when the notification icon is clicked open the menu
            $(this).toggleClass('active');
            $('.show-search').fadeToggle(function () {
                //then bind the close event to html so it closes when you mouse off it.
                $('html').bind('click', function () {
                    $('.show-search').fadeOut(function () {
                        //once html has been clicked and the menu has closed, unbind the html click so nothing else has to lag up
                        $('html').unbind('click');
                    });
                    $('.top-search a').removeClass('active');
                });
                $('.show-search').bind('click', function (e) {
                    e.stopPropagation();
                });
            });
        });
    }());
    // (function () {
    //     if (screen.width > 768) {
    //         var $dropdown = $(".nav .dropdown");
    //         $dropdown.mousemove(function () {
    //             $(this).addClass("open");
    //         });
    //         $dropdown.mouseleave(function () {
    //             $dropdown.removeClass("open");
    //         });
    //     }
    //     $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
    //         // Avoid following the href location when clicking
    //         event.preventDefault();
    //         // Avoid having the menu to close when clicking
    //         event.stopPropagation();
    //         // Re-add .open to parent sub-menu item
    //         $(this).parent().addClass('open');
    //         $(this).parent().find("ul").parent().find("li.dropdown").toggle('open');
    //         /* $(this).parent().find("ul").parent().find("li.dropdown").removeClass('open');*/
    //
    //     });
    // }());
    //scroll top

    (function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.scroll-up').fadeIn();
            } else {
                $('.scroll-up').fadeOut();
            }
        });
        $('.scroll-up a').click(function () {
            $('html, body').animate({scrollTop: 0}, 800);
            return false;
        });
    }());
}());
