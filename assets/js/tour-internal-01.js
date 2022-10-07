// init panzoom
const element = document.getElementById('panzoom')
const panzoom = Panzoom(element, {
    maxScale: 4,
	minScale: 1,
	contain: "outside",
});

setTimeout(function(){
	panzoom.reset()
}, 300);

// pano viewer 01
var
	infospot_01_01,
	infospot_01_02,
	panoView_01,
	panorama_01,
	viewer_01;

panoView_01 = document.querySelector('.pano-viewer-01');

panorama_01 = new PANOLENS.ImagePanorama('assets/img/tour/01/pano/01.jpg');

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

infospot_01_01 = new PANOLENS.Infospot(100);
infospot_01_01.position.set(2000, 450, 230);
infospot_01_01.addHoverText('Por dentro');
infospot_01_01.addEventListener('click', function(){
	$("#gallery-01").click();
});

infospot_01_02 = new PANOLENS.Infospot(100);
infospot_01_02.position.set(2000, 500, 1200);
infospot_01_02.addHoverText('Folder');
infospot_01_02.addEventListener('click', function(){
	$("#gallery-02").click();
});

panorama_01.add(infospot_01_01, infospot_01_02);

// pano viewer 02
var
	panoView_02,
	panorama_02,
	viewer_02;

panoView_02 = document.querySelector('.pano-viewer-02');

panorama_02 = new PANOLENS.ImagePanorama('assets/img/tour/01/pano/02.jpg');

viewer_02 = new PANOLENS.Viewer({
	output: 'console',
	container: panoView_02,
	cameraFov: 60,
	autoRotate: true,
	autoRotateSpeed: .5,
	controlBar: false,
	autoHideInfospot: false
});

viewer_02.add(panorama_02);

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