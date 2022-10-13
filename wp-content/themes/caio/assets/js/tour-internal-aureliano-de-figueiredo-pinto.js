// pano viewer 01
var
	panoView_01,
	panorama_01,
	viewer_01;

panoView_01 = document.querySelector('.pano-viewer-01');

panorama_01 = new PANOLENS.ImagePanorama('../../assets/img/tour/02-1/pano/01.jpg');

viewer_01 = new PANOLENS.Viewer({
	output: 'console',
	container: panoView_01,
	cameraFov: 60,
	controlBar: false,
	autoHideInfospot: false
});

viewer_01.OrbitControls.minFov = 40;
viewer_01.OrbitControls.maxFov = 80;

viewer_01.add(panorama_01);

panorama_01.addEventListener( 'enter-fade-start', function(){
	viewer_01.tweenControlCenter( new THREE.Vector3(1000, 0, 0), 10);
});

infospot_01_01 = new PANOLENS.Infospot(100);
infospot_01_01.position.set(2000, 0, -100);
infospot_01_01.addHoverText('Fotos e Textos');
infospot_01_01.addEventListener('click', function(){
	$("#fotos").click();
});

panorama_01.add(
	infospot_01_01
);