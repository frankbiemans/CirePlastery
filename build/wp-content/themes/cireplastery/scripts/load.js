$(window).on("load", function() {
    setTimeout(function() {

        if ($(window).width() >= 1200) {
            var niceScroll = $('body').niceScroll({
                cursorcolor: "#f1c400",
                cursoropacitymin: 0,
                cursoropacitymax: 0,
                cursorwidth: "8px",
                cursorborder: "1px solid #3c3c3c",
                cursorborderradius: "3px",
                zindex: 9950,
                scrollspeed: 60,
                mousescrollstep: 40,
                touchbehavior: true,
                emulatetouch: false,
                hwacceleration: true,
                boxzoom: false,
                dblclickzoom: true,
                gesturezoom: true,
                grabcursorenabled: false,
                autohidemode: true,
                background: "",
                iframeautoresize: true,
                cursorminheight: 32,
                preservenativescrolling: true,
                railoffset: false,
                bouncescroll: false,
                spacebarenabled: true,
                railpadding: {
                    top: 0,
                    right: 0,
                    left: 0,
                    bottom: 0
                },
                disableoutline: true,
                horizrailenabled: true,
                enabletranslate3d: true,
                enablemousewheel: true,
                enablekeyboard: true,
                smoothscroll: true,
                sensitiverail: true,
                enablemouselockapi: true,
                cursorfixedheight: false,
                hidecursordelay: 400,
                directionlockdeadzone: 6,
                nativeparentscrolling: true,
                enablescrollonselection: true,
                cursordragspeed: 0.3,
                rtlmode: "auto",
                cursordragontouch: false,
                oneaxismousemode: "auto",
                scriptpath: "",
                preventmultitouchscrolling: false,
                disablemutationobserver: false,
                enableobserver: true,
                scrollbarid: false
            });
        }

        $('body, #master-wrapper').removeAttr('style');

        $('.loading-screen').fadeOut(260, function() {
            $('.loading-screen').remove();

            $('.text-transition').waypoint({
                handler: function(direction) {
                    var __this = $(this.element);
                    __this.addClass('text-transition--transitioned');
                },
                offset: '90%'
            });

            $('.wp-fade-only-in').waypoint({
                handler: function(direction) {
                    var __this = $(this.element);
                    __this.addClass('wp-fade-only-in--faded-in');
                },
                offset: '95%'
            });

            $('.widget--transition-to-top').waypoint({
                handler: function(direction) {
                    var __this = $(this.element);
                    __this.addClass('widget--transition-to-top--transitioned');
                },
                offset: '90%'
            });

            $('.scale-in').waypoint({
                handler: function(direction) {
                    var __this = $(this.element);
                    __this.addClass('scale-in--scaled');
                },
                offset: '90%'
            });

            $('.slider-widget').waypoint({
                handler: function(direction) {
                    var __this = $(this.element);
                    __this.addClass('slider-widget--transitioned');
                },
                offset: '95%'
            });

        });

    }, 500);
});

(function($) {
    var onePageNav = $('.home .nav-holder').onePageNav({
        currentClass: 'current',
        easing: 'swing',
        changeHash: true,
        begin: function() {},
        end: function() {},
        scrollChange: function($currentListItem) {}
    });

    $('.home [href="#projecten"]').on('click', function(e) {
        e.preventDefault();
        $('.menu').find('a[href="/#projecten"]').trigger('click');
    });

    $('.hamburger').on('click', function() {
        $(this).toggleClass('is-active');
        $('.nav-holder').toggleClass('nav-holder--active');
    });

    $('.menu a').on('click', function() {
        $('.hamburger').removeClass('is-active');
        $('.nav-holder').removeClass('nav-holder--active');
    });

    $('.fake-submit').on('click', function() {
        $(this).closest('.form__submit-wrapper').find('[type=submit]').trigger('click');
    });

    $('.section--many-applications .fontpage-widget.widget--transition-to-top').each(function(i) {
        var num = i++;
        $(this).addClass('widget--transition-to-top--' + i);
    });

    $('.section--concrete-applications .fontpage-widget.widget--transition-to-top').each(function(i) {
        var num = i++;
        $(this).addClass('widget--transition-to-top--' + i);
    });

    $('[data-cookies-accept]').click(function(e) {
        var __this = $(this);
        var cookieBanner = __this.closest('.cookie-banner');
        $.ajax({
            method: "GET",
            url: "/wp-content/themes/startkit/php-actions/set-cookie.php",
        }).done(function(data) {
            __this.closest('.cookie-banner').animate({
                height: '0px'
            }, 260, function() {
                cookieBanner.remove();
            });
        });
    });

    var topslider = $('.top-slider').slick({
        infinite: true,
        dots: false,
        arrows: false,
        autoplay: true,
        draggable: false,
        autoplaySpeed: 4000
    });

    var projectslider = $('.project-sliders');
    projectslider.on('init', function(event, slick) {
        setSliderTitlePos();
    });
    projectslider.on('setPosition', function(event, slick) {
        setSliderTitlePos();

        var widgets = projectslider.find('.fontpage-widget--project');
        widgets.css({
            height: 'auto'
        }).css({
            height: Math.round(projectslider.find('.slick-track').outerHeight())
        });
    });
    projectslider.slick({
        infinite: false,
        dots: false,
        arrows: false,
        draggable: true,
        mobileFirst: true,
        slidesToShow: 1,
        responsive: [{
            breakpoint: 1,
            settings: "unslick"
        }, {
            breakpoint: 767,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 991,
            settings: {
                slidesToShow: 3
            }
        }]
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
            $('.nav-holder').addClass("nav-holder--scrolled");
        } else {
            $('.nav-holder').removeClass("nav-holder--scrolled");
        }
    });

})(jQuery);
