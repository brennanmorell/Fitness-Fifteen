var $ = jQuery.noConflict();

//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    console.log("user scrolled");
    if ($(".navbar").offset().top > 50) {
        $(".navbar").addClass("top-nav-collapse");
        console.log("Time to collapse navbar");
    } else {
        $(".navbar").removeClass("top-nav-collapse");
        console.log("Time to uncollapse navbar")
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

