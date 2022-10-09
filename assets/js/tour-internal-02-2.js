// pano viewer 01
var
	panoView_01,
	panorama_01,
	viewer_01;

panoView_01 = document.querySelector('.pano-viewer-01');

panorama_01 = new PANOLENS.ImagePanorama('assets/img/tour/02-2/pano/01.jpg');

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