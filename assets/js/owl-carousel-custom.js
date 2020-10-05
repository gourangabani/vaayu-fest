jQuery(document).ready(function () {
    jQuery('#teamCarousel').owlCarousel({
        nav: true,
        dots: false,
        margin: 50,
        loop: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        autoPlay: false,
        URLhashListener: true,
        startPosition: 'URLHash',
        animateOut: 'slideOutUp',
        animateIn: 'slideInUp',
        responsive: {
            0: {
                items: 1.5,
                center: true
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });
    jQuery('#sponsorsCarousel').owlCarousel({
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
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    jQuery('#eventsCarousel').owlCarousel({
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
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
});