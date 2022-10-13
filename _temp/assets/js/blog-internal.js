// news slider
var news_slider = new Swiper ('.news-slider', {
	slidesPerView: 1.2,
	loop: true,
	simulateTouch: true,
	autoHeight: true,
	calculateHeight: true,
	autoplay: {
		delay: 3500,
		disableOnInteraction: false,
		pauseOnMouseEnter: false,
	},
	navigation: {
		nextEl: '.news-slider-nav .next',
		prevEl: '.news-slider-nav .prev',
	},
	spaceBetween: 20,
	breakpoints: {
		768: {
			slidesPerView: 2,
			spaceBetween: 30,
		},
		1200: {
			slidesPerView: 3,
			spaceBetween: 30,
		},
	},
});