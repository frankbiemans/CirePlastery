(function($) {
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
})(jQuery);
