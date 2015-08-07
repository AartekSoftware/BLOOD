$(function(){
	
	/* Home page carousel/slider */
	$('.carousel').carousel({
		interval: 4000
	});
	
	/* for Scrollup icon */
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn();
		} else {
			$('.scrollup').fadeOut();
		}
	});
	
}); /* End of main function */