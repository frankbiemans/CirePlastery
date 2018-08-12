function setSliderTitlePos() {
    var projectslider = $('.project-sliders');
    var title = $('.section--projects-slider h2');
    title.removeAttr('style');
    if ($(window).width() >= 1200) {
        var slideActive = projectslider.find('.slick-slide.slick-active');
        var slideWidth = slideActive.width();
        var slideMargin = parseInt(slideActive.css('margin-left'));

        var projectsliderOffset = projectslider.offset();
        var projectsliderOffsetLeft = projectsliderOffset.left;

        var titleLeftTotal = (slideWidth + projectsliderOffsetLeft + slideMargin * 2);
        var titleOffset = title.offset();
        var titleOffsetLeft = titleOffset.left;

        title.css({
            left: (titleLeftTotal - titleOffsetLeft + 'px')
        });
    }
}
