
$(document).ready(function () {

    // SCROLL
    $(window).scroll( function(){
        
        // Header

        if ($(window).scrollTop() > 500 && $(window).scrollTop() <= 550) {
            $('.header').addClass('waiting-to-fix');
        } else if ($(window).scrollTop() > 550) {
            $('.header').addClass('is-fixed').removeClass('waiting-to-fix');
        } else {
            $('.header').removeClass('is-fixed').removeClass('waiting-to-fix');
        }


    });
        // Menu.
    var $menu = $('#menu');
    var $body = $('body');

    $menu.wrapInner('<div class="inner"></div>');

    $menu._locked = false;

    $menu._lock = function() {

        if ($menu._locked)
            return false;

        $menu._locked = true;

        window.setTimeout(function() {
            $menu._locked = false;
        }, 350);

        return true;

    };

    $menu._show = function() {

        if ($menu._lock())
            $body.addClass('is-menu-visible');

    };

    $menu._hide = function() {

        if ($menu._lock())
            $body.removeClass('is-menu-visible');

    };

    $menu._toggle = function() {

        if ($menu._lock())
            $body.toggleClass('is-menu-visible');

    };

    $menu
        .appendTo($body)
        .on('click', function(event) {
            event.stopPropagation();
        })
        .on('click', 'a', function(event) {

            var href = $(this).attr('href');

            event.preventDefault();
            event.stopPropagation();

            // Hide.
                $menu._hide();

            // Redirect.
                if (href == '#menu')
                    return;

                window.setTimeout(function() {
                    window.location.href = href;
                }, 350);

        }).append('<a class="close" href="#menu">Close</a>');

    $body
        .on('click', 'a[href="#menu"]', function(event) {

            event.stopPropagation();
            event.preventDefault();

            // Toggle.
                $menu._toggle();

        })
        .on('click', function(event) {

            // Hide.
                $menu._hide();
                // $body.removeClass('is-menu-visible');

        })
        .on('keydown', function(event) {

            // Hide on escape.
                if (event.keyCode == 27)
                    $menu._hide();

        });

//----- Testimonial Start ------

    $("#testimonial").owlCarousel({
        items: 1,
        loop:true,
        autoplay: true,
        navText: ["<i class='fa fa-angle-right'></i>","<i class='fa fa-angle-left'></i>"],
        center: true,
        margin: 0,
        nav: true,
        dots: false,
        autoHeight: true
    });

//----- Header Slide Start ------

    $("#header_slide").owlCarousel({
        items: 1,
        loop:true,
        autoplay: false
    });

    $('.video').parent().click(function () {
        if($(this).children(".video").get(0).paused){
            $(this).children(".video").get(0).play();
            $(this).children(".playpause").fadeOut();
            $(this).children(".overlay").fadeOut();            
        }else{
           $(this).children(".video").get(0).pause();
            $(this).children(".playpause").fadeIn();
            $(this).children(".overlay").fadeIn();
        }
    });

});

//----- Popup Start ------

$('.inline-popup').magnificPopup({
  type:'inline',
  midClick: true, // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
  gallery:{
    enabled:true
  }
});




/*$('.grid').masonry({
  // options
  itemSelector: '.grid-item',
  columnWidth: 200
});
*/