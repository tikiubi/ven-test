jQuery( function ( $ ) {
    'use strict';

    // Homepage products logo slider in Video section
    $('.js-video-product-logos').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        items: 1,
    })

    // Homepage posts slider in Blog section
    $('.js-blog-posts').owlCarousel({
        loop:false,
        margin:70,
        nav:true,
        items: 2,
        navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
    })

    // Toggle Sidenav
    $('.js-toggle-sidenav').on('click', function () {

        $('.js-sidenav').toggleClass('width-500');
        $('.js-transition-left').toggleClass('margin-left-500');

        let $toggle_text = $('.js-sidebar-toggle_text');
        let toggle_text = $(this).hasClass('open') ? $toggle_text.data('close') : $toggle_text.data('open');ssss
        $toggle_text.text(toggle_text);

        $(this).toggleClass('open', 'closed');

    })

    // Add background to fixed header when scroll
    $(window).scroll(function(){
        if ($(window).scrollTop() >= 100) {
            $('header').addClass('scrolled');
        }
        else {
            $('header').removeClass('scrolled');
        }
    });
});

