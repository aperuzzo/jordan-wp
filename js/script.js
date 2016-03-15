

//---------------------------------------------
jQuery( window ).load(function() {
	jQuery('.entry-content-home').each( function(){

		// wrap all <p>'s except first in div (make a read more button)
		jQuery( this).children().slice(1).wrapAll('<div class="hide-p"></div>');

	});

	//add toggle button to posts with more than one <p>
	jQuery('.hide-p').after('<i class="fa fa-plus-square-o p-toggle"></i>');
	jQuery('.hide-p').hide();
	

	stickyHeader();
	pToggle();
	
	/* Scroll to specific section on front page via wordpress menu*/
    jQuery(function() {
        jQuery('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = jQuery(this.hash);
                target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    jQuery('html,body').animate({
                        scrollTop: (target.offset().top - 49)
                    }, 500);
                    return false;
                }
            }
        });
    });

    //hide bootstrap menu on click
    jQuery(document).on('click','.navbar-collapse.in',function(e) {
    if( jQuery(e.target).is('a') && jQuery(e.target).attr('class') != 'dropdown-toggle' ) {
        jQuery(this).collapse('hide');
    }
});
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


