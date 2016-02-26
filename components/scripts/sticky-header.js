function stickyHeader(){
var headerLogo = jQuery('#header-logo')
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > 1){  
		    jQuery('.site-header').addClass("sticky");
		    jQuery(headerLogo).detach();

		  } else{
		  	jQuery(headerLogo).prependTo('.site-header');
		    jQuery('.site-header').removeClass("sticky");
		  }
		});
}


