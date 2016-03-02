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
});

