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

