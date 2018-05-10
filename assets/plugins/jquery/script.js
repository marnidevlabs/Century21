$(window).scroll(function(){
	if ($('.header').offset().top > 104) {
		$('.header').addClass("que_scroll");
	}else{
		$('.header').removeClass("que_scroll");
	}
})