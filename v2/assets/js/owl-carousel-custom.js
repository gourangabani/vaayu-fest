jQuery(document).ready(function () {
    jQuery('#home-updates-carousel').owlCarousel({
        navigation: true,
        nav: true,
        margin: 10,
        stagePadding: 20,
        center: true,
        items: 3,
        loop: true,
        center: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        autoPlay: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 1
            }
        }
    });
    jQuery('#home-latest-categories-carousel').owlCarousel({
        navigation: true,
        nav: true,
        margin: 50,
        loop: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        autoPlay: false,
        responsive: {
            0: {
                items: 1.5,
                center: true
            },
            600: {
                items: 5
            },
            1000: {
                items: 5
            }
        }
    });
});