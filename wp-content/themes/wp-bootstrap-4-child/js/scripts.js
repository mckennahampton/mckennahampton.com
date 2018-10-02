(function ($) {

    $(document).ready(function () {

        $('#homepageLargeSlider').layerSlider({
            type: 'responsive',
            showCircleTimer: false
        });

        $('.ls-tilt').tilt({
            maxTilt: 20,
            speed: 2000,
            scale: 0.8
        })

        $('.logo-tilt').tilt({
            scale: 1.05,
            speed: 1000,
            perspective: 2000
        });

    });

}) (jQuery);