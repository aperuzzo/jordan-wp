

//---------------------------------------------
jQuery( window ).load(function() {
	jQuery('.entry-content-home').each( function(){

		// wrap all <p>'s except first in div
		jQuery( this).children().slice(1).wrapAll('<div class="hide-p"></div>');

	});

	//add toggle button to posts with more than one <p>
	jQuery('.hide-p').after('<i class="fa fa-plus-square-o p-toggle"></i>');
	jQuery('.hide-p').hide();
	
	
	

	stickyHeader();
	pToggle();
	
});


function pToggle(){
	jQuery('.p-toggle').click(function(){
		jQuery(this).siblings('.hide-p').toggle('slow');
		if (jQuery(this).hasClass('fa-plus-square-o')){
			jQuery(this).removeClass('fa-plus-square-o').addClass('fa-minus-square-o');

		}else {
			jQuery(this).removeClass('fa-minus-square-o').addClass('fa-plus-square-o');
		}
	})
}
function stickyHeader(){
var headerLogo = jQuery('#header-logo')
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > 70){  
		    jQuery('.site-header').addClass("sticky");
		    jQuery(headerLogo).detach();

		  } else{
		  	jQuery(headerLogo).prependTo('.site-header');
		    jQuery('.site-header').removeClass("sticky");
		  }
		});
}


