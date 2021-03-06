/*!
 * Start Bootstrap - Agency Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
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

// Highlight the top nav as scrolling occurs
$(document).ready(function() {
    $(".navbar-fixed-top ul li").click(function() {
        $(".navbar-fixed-top ul li").removeClass("active");
        $(this).addClass("active");
    });
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

$(document).ready(function() {
    $("fieldset input").attr("class", "form-control");
    $("fieldset select").attr("class", "form-control");
    $("fieldset textarea").attr("class", "form-control");
    $("#usp-submit .exclude").attr("class", "btn btn-success");
    $("fieldset label").attr("class", "paa");
    $(".search-submit.screen-reader-text").attr("class", "btn btn-warning");
});