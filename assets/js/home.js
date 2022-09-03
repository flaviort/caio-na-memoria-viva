// banner slider
var banner_slider = new Swiper ('.banner-slider', {
	slidesPerView: 1,
	effect: 'fade',
	loop: true,
	fadeEffect: {
		crossFade: true
	},
	simulateTouch: true,
	autoHeight: true,
	calculateHeight: true,
	autoplay: {
		delay: 4000,
		disableOnInteraction: false,
		pauseOnMouseEnter: false,
	},
});