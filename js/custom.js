(function ($) {

  "use strict";

    function switchTheme() {
        const body = $('body')
        $('.color-mode-icon').toggleClass('active')
        body.toggleClass('dark-mode')
        const actualTheme = body.hasClass('dark-mode') ? 'Clair' : 'Sombre'

    }
    // COLOR MODE
    const isDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
    if (isDark) {
        switchTheme()
    }
    $('.color-mode').click(function(){
        switchTheme()
    })


    // HEADER
    $(".navbar").headroom();

    // PROJECT CAROUSEL
    $('.owl-carousel').owlCarousel({
    	items: 1,
	    loop:true,
	    margin:10,
	    nav:true
	});

    // SMOOTHSCROLL
    $(function() {
      $('.nav-link, .custom-btn-link').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 49
        }, 1000);
        event.preventDefault();
      });
    });  

    // TOOLTIP
    $('.social-links a').tooltip();

})(jQuery);
