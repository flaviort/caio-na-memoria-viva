// show more / timeline
$('#show-more').click(function(){
    $(this).hide();
    $('.timeline.gradient').removeClass('gradient');
    $('.timeline.hidden').slideDown();
})

// gallery slider
var gallery_slider = new Swiper ('.gallery-slider', {
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
		nextEl: '.gallery-slider-nav .next',
		prevEl: '.gallery-slider-nav .prev',
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