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