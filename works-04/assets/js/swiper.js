// Swiper
jQuery(function() {
	new Swiper('.swiper', {
		loop: true,
		effect: 'fade',
		fadeEffect: {
			crossFade: true,
		},
		autoplay: {
			delay: 4000,
			disableOnInteraction: false,
		},
		speed: 2000,
	});
});