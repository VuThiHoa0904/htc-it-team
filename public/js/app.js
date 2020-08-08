"use strict";

(function ($) {

    jQuery(document).on('ready', function() {
        jQuery('.shop-slider').owlCarousel({
            loop: true,
            margin: 30,
            stagePadding: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2,
                    margin: 0,
                    stagePadding: 10,
                },
                991: {
                    items: 4
                }
            }
        })
    });
})(jQuery)