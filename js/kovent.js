/**
 * KOVENT JS
 */
// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});


var addVideo = {
  init: function ($) {
    var h = $('header.intro'),
        i = h.css('background-image').match(/url\((.*)\)/),
        p = '';
    if (i.length) {
      p = 'poster="' + i.pop() + '"';
    }
    $('<div><video autoloop loop autoplay ' + p + '><source src="/img/lights.mp4" type="video/mp4"></video>')
      .css('height', '100%')
      .css('width', '100%')
      .css('position', 'absolute')
      .css('z-index', '-99')
      .css('overflow', 'hidden')
      .prependTo(h);
    setTimeout(function () {
      h.css('background', 'transparent');
    }, 1000);
  }
};

if (Modernizr.video.h264 && jQuery(window).width() > 768) {
  setTimeout(function () {
    addVideo.init(jQuery);
  }, 100);
} else {
  console.log('No video support, or small device');
}
