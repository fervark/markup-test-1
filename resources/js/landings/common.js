$(document).ready(function() {
	
	// Mask
	$(".phone").mask("+7 (999) 99-99-999");
	
	// Animate scroll
	$("a[href^='#']").click(function(){
		var _href = $(this).attr("href");
		$("html, body").animate({scrollTop: $(_href).offset().top+"px"});
		return false;
	});

}); 