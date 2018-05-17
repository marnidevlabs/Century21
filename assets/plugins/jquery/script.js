$(window).scroll(function(){
	if ($('.navigation').offset().top > 150) {
		$('.navigation').addClass("que-scroll");
	}else{
		$('.navigation').removeClass("que-scroll");
	}
})