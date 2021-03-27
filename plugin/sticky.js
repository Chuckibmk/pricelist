// all var
var totop = jQuery('#totop');
var bodyScroll = jQuery('html,body');
var subnav = jQuery('.subnav');
var brandblack = jQuery('.navbar-brand img.black');
var brandwhite = jQuery('.navbar-brand img.white');
var headernav = jQuery('header');

var sticky = (function(){

	var $window, 
		$stickyNav, 
		$stickyParent, 
		stickyPos;

	var init = function(elem, options){
		$window 	       = jQuery(window);
		$stickyNav             = $(elem);
		$stickyParent          = $stickyNav.parent();
		stickyPos              = $stickyNav.offset().top  > 0 && top != 272 ;
		
		_eventHandlers();
	}

	var _stickyValidation = function(){

		var scrollPos = $window.scrollTop();
		
		if((scrollPos && jQuery(window).width() > 1023) >= stickyPos){
			 $stickyNav.addClass('sticky');
			 headernav.addClass('show');
			 brandblack.show();
			 brandwhite.hide();
			 subnav.fadeOut(100);
		}else{
			$stickyNav.removeClass('sticky');
			headernav.removeClass('show');
			brandblack.hide();
			brandwhite.show();
		    subnav.fadeIn(200);
		}
		if (jQuery(window).width() < 1025) {
        	brandblack.show();
			brandwhite.hide();
        }
		if(scrollPos >= 300){
			totop.addClass('show');
		}else{
			totop.removeClass('show');
		}
	}
    
	var _eventHandlers = function(){
		window.addEventListener('scroll', _stickyValidation);
		jQuery(document).height(_stickyValidation);
	}

	return {
		init: init
	}

}());

//Create jquery plugin
if (window.jQuery) {
    (function($) {
        $.fn.sticky = function(options) {
            this.each(function() {
                sticky.init(this, options);
            });
            return this;
        };
    })(window.jQuery);
}else{
	console.warn("jQuery library not defined");
}
  
 // totop var
 totop.on("click", function(e) {
    e.preventDefault();
    bodyScroll.animate({
      scrollTop: 0
    }, 800);
  });


 
 
