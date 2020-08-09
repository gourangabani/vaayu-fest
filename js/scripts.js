/*!
 * Start Bootstrap - Resume v6.0.1 (https://startbootstrap.com/template-overviews/resume)
 * Copyright 2013-2020 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-resume/blob/master/LICENSE)
 */

function Preloader() {
    var preloader = $('.preloader');
    preloader.delay(5000).fadeOut(500);
}

function setPreloader() {
    if (!sessionStorage.getItem('doNotShow')) {
        sessionStorage.setItem('doNotShow', true);
        Preloader();
    } else {
        $('.preloader').hide();
    }
};

function Modal() {
    var custom_modal = $('#film-making-workshop-modal');
    setTimeout(function () {
        custom_modal.modal();
    }, 10000);
}

function setModal() {
    if (!sessionStorage.getItem('doNotShowModal')) {
        sessionStorage.setItem('doNotShowModal', true);
        Modal();
    } else {
        $('.film-making-workshop-modal').hide();
    }
};

setPreloader();
setModal();

// let tl = gsap.timeline({
//     delay: 0.5
// });

// tl.from('.power-4', {
//         y: -100,
//         opacity: 0,
//         ease: 'slow',
//         duration: 1.5
//     }, 0.7)
//     .from('.power-2', {
//         // x: -50,
//         y: 50,
//         opacity: 0,
//         ease: 'power2',
//         duration: 2
//     }, 1);

(function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (
            location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length ?
                target :
                $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html, body").animate({
                        scrollTop: target.offset().top,
                    },
                    1000,
                    "easeInOutExpo"
                );
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $(".js-scroll-trigger").click(function () {
        $(".navbar-collapse").collapse("hide");
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $("body").scrollspy({
        target: "#sideNav",
    });

    // scroll to left
    $("#rightPaddle").click(function () {
        $('.scroll-wrapper').animate({
            scrollLeft: menuInvisibleSize
        }, scrollDuration);
    });

    // scroll to right
    $("#leftPaddle").click(function () {
        $('.scroll-wrapper').animate({
            scrollLeft: '0'
        }, scrollDuration);
    });

    // takes jQuery(element) a.k.a. $('element')
    function onScreen(element) {
        // window bottom edge
        var windowBottomEdge = $(window).scrollTop() + $(window).height();

        // element top edge
        var elementTopEdge = element.offset().top;
        var offset = 100;

        // if element is between window's top and bottom edges
        return elementTopEdge + offset <= windowBottomEdge;
    }

    if (onScreen($("#contact-us"))) {
        gsap.from(".power-2", {
            duration: 0.5,
            opacity: 0,
            y: -100,
            stagger: 0.1,
            ease: "back.in"
        });
    }
})(jQuery); // End of use strict