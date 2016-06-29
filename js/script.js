$(document).ready(function(){
	$(".home-slider__wrapper").owlCarousel({
		items: 1,
		loop: true,
		nav: true,
		navText: ['←', '→'],
		autoplay: true,
		autoplayTimeout: 10000
	});
});