$(document).ready(function(){
	$(".home-slider__wrapper").owlCarousel({
		items: 1,
		loop: true,
		nav: true,
		navText: ['←', '→'],
		autoplay: true,
		autoplayTimeout: 10000
	});
	
	var siteMenuBtn = $('.site-header__open');
	siteMenuBtn.click(function(){
		var headerCon = $('.site-header');
		headerCon.toggleClass('active');
		
		var siteCon = $('.site');
		siteCon.toggleClass('active');
		
		$(this).toggleClass('active');
	});
});