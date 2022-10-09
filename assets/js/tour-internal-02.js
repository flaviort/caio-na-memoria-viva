// text slider
var text_slider = new Swiper ('.text-slider', {
	slidesPerView: 1,
	loop: true,
	effect: 'fade',
	fadeEffect: {
		crossFade: true
	},
	simulateTouch: true,
	autoHeight: true,
	calculateHeight: true,
	navigation: {
		nextEl: '.text-nav .next',
		prevEl: '.text-nav .prev',
	},
});

// correct services slider size on initial load
setTimeout(function(){
	gallery_slider.updateAutoHeight(300)
    text_slider.updateAutoHeight(300)
}, 300);