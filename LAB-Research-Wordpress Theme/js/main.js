jQuery(document).ready(function($){
    
    // Bootstrap menu fix
    $(".navbar-toggle").click(function(){
        $(".header").css('background', '#000');
    });
    
    
    $(".navbar-nav li a").click(function(){
        $(".navbar-collapse").removeClass('in');
    });
    
    
    // jQuery sticky menu
    $(".header").sticky({topSpacing:0});

    // jQuery smooth scroll
    $('.navbar-nav li a, .scroll-to-bottom a').bind('click', function(event) {
        var $anchor = $(this);
        var headerH = '70';
        $('html, body').stop().animate({
            scrollTop : $($anchor.attr('href')).offset().top - headerH + "px"
        }, 1200, 'easeInOutExpo');

        event.preventDefault();
    }); 
    
    
    
    // jQuery scroll psy
    $('body').scrollspy({ 
        target: '.navbar-collapse',
        offset: 95
    }); 
 
});
//this is for navigation
$(window).scroll(function(){	
	"use strict";	
	var scroll = $(window).scrollTop();
	if( scroll > 60 ){		
		$(".navbar").addClass("scroll-fixed-navbar");				
	} else {
		$(".navbar").removeClass("scroll-fixed-navbar");
	}
});
(function ($) {
    $(document).ready(function () {
        $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
            event.preventDefault();
            event.stopPropagation();
            $(this).parent().siblings().removeClass('open');
            $(this).parent().toggleClass('open');
        });
    });
})(jQuery);






//this is for fit window
	// Fits screen with window
//	$(function(){"use strict";
  //      $('.banner').css({'height':($(window).height())+'px'});
 //       $(window).resize(function(){
   //     $('.banner').css({'height':($(window).height())+'px'});
   //     });
   // });