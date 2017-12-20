

    (function($) {
        "use strict";

        // manual carousel controls
        $('.next').click(function(){ $('.carousel').carousel('next');return false; });
        $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });

    })(jQuery);



/*
    Fullscreen background
    */
$.backstretch([
    "Images/backgrounds/ecommerce3.jpg"

], {duration: 3000, fade: 750});

