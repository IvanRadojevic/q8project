$(window).on('load', function () {
    $('.loader-wrap-svg').fadeOut('slow');
    $('body').removeClass('loading');
});
$(window).on('load', function () {
    new WOW().init();
});