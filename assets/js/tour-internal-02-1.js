// pano viewer 01
var
	panoView_01,
	panorama_01,
	viewer_01;

panoView_01 = document.querySelector('.pano-viewer-01');

panorama_01 = new PANOLENS.ImagePanorama('assets/img/tour/02-1/pano/01.jpg');

viewer_01 = new PANOLENS.Viewer({
	output: 'console',
	container: panoView_01,
	cameraFov: 60,
	autoRotate: true,
	autoRotateSpeed: .5,
	controlBar: false,
	autoHideInfospot: false
});

viewer_01.add(panorama_01);

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