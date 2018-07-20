$(window).on("load", function() {
    setTimeout(function() {

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
            preventmultitouchscrolling: true,
            disablemutationobserver: false,
            enableobserver: true,
            scrollbarid: false
        });

        $('body, #master-wrapper').removeAttr('style');

        $('.loading-screen').fadeOut(260, function() {
            $('.loading-screen').remove();

            $('.text-transition').waypoint({
                handler: function(direction) {
                    var __this = $(this.element);
                    __this.toggleClass('text-transition--transitioned');
                },
                offset: '90%'
            });

            $('.wp-fade-only-in').waypoint({
                handler: function(direction) {
                    var __this = $(this.element);
                    __this.toggleClass('wp-fade-only-in--faded-in');
                },
                offset: '90%'
            });

            $('.widget--transition-to-top').waypoint({
                handler: function(direction) {
                    var __this = $(this.element);
                    __this.toggleClass('widget--transition-to-top--transitioned');
                },
                offset: '90%'
            });

            $('.scale-in').waypoint({
                handler: function(direction) {
                    var __this = $(this.element);
                    __this.toggleClass('scale-in--scaled');
                },
                offset: '85%'
            });

            $('.slider-widget').waypoint({
                handler: function(direction) {
                    var __this = $(this.element);
                    __this.toggleClass('slider-widget--transitioned');
                },
                offset: '95%'
            });

        });

    }, 500);
});

(function($) {
    $('.nav-holder').onePageNav({
        currentClass: 'current',
        easing: 'swing',
        begin: function() {},
        end: function() {},
        scrollChange: function($currentListItem) {}
    });

    $('.section--many-applications .fontpage-widget.widget--transition-to-top').each(function(i) {
        var num = i++;
        $(this).addClass('widget--transition-to-top--0' + i);
    });

    $('.section--concrete-applications .fontpage-widget.widget--transition-to-top').each(function(i) {
        var num = i++;
        $(this).addClass('widget--transition-to-top--0' + i);
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

    $('.top-slider').slick({
        infinite: true,
        dots: false,
        arrows: false
    });

})(jQuery);
