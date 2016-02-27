// --------------------------------------------------------- //
// DOCUMENT READY
// --------------------------------------------------------- //
$(document).ready(function() {

    $(function(){
      $.okvideo({   video: 'bfF-jr-4WZY',  //50631254
                    volume: 0,
                    loop: true,
                    hd:false,
                    adproof: true,
                    annotations: false
                })
    });
});

// --------------------------------------------------------- //
// MUSIC PLAYER
// --------------------------------------------------------- //
$('#play-music').click(function(){
    $('#music').get(0).play();
    $('#play-music').hide();
    $('#pause-music').show();
});
$('#pause-music').click(function(){
    $('#music').get(0).pause();
    $('#play-music').show();
    $('#pause-music').hide();
});

// --------------------------------------------------------- //
// SCROLL MENU
// --------------------------------------------------------- //
var $root = $('html, body');
$('.menu_item').click(function() {
    var href = $.attr(this, 'href');
    $root.animate({
        scrollTop: $(href).offset().top - 65
    }, 800, function () {
        window.location.hash = href;
    });
    $('.menu-panel').removeClass('opened');
    $('.overlay-dark').removeClass('displayed');
    return false;
});

$('.site-nav_item').click(function(){

    $(this).addClass('active');
    $(this).siblings().removeClass('active');

});
$('.burger-menu-bt').click(function(){

    $('.menu-panel').addClass('opened');
    $('.overlay-dark').addClass('displayed');

});
$('.overlay-dark').click(function(){

    $('.menu-panel').removeClass('opened');
    $('.overlay-dark').removeClass('displayed');

});
$('.close-menu-bt').click(function(){

    $('.menu-panel').removeClass('opened');
    $('.overlay-dark').removeClass('displayed');

});


// --------------------------------------------------------- //
// SCROLL DOWN HERO ACTION
// --------------------------------------------------------- //
var $root = $('html, body');
$('.arrow-down').click(function() {
    var href = $.attr(this, 'href');
    $root.animate({
        scrollTop: $(href).offset().top
    }, 800, function () {
        window.location.hash = href;
    });
    return false;
});


// --------------------------------------------------------- //
// BACK TO TOP
// --------------------------------------------------------- //

$('.backtotop').click(function(){
        
$('html,body').animate({scrollTop: 0},2000);
return false;

});


// --------------------------------------------------------- //
// SCROLL
// --------------------------------------------------------- //
$(window).scroll(function() {
    var height = $(window).scrollTop();

    if(height > 1) {
        $('.site-header').addClass('scrolled');
    }

    if(height < 1) {
        $('.site-header').removeClass('scrolled');
    }

});