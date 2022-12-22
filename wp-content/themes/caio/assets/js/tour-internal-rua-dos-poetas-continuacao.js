// pano viewer 01
var
	panoView_01,
	panorama_01,
	viewer_01;

panoView_01 = document.querySelector('.pano-viewer-01');

panorama_01 = new PANOLENS.ImagePanorama('../../assets/img/tour/02-2/pano/01.jpg');

viewer_01 = new PANOLENS.Viewer({
	output: 'console',
	container: panoView_01,
	cameraFov: 60,
	controlBar: false,
	autoHideInfospot: false,
});

viewer_01.OrbitControls.minFov = 40;
viewer_01.OrbitControls.maxFov = 80;

viewer_01.add(panorama_01);

panorama_01.addEventListener( 'enter-fade-start', function(){
	viewer_01.tweenControlCenter( new THREE.Vector3(-100, 0, -30), 10);
});

infospot_01_01 = new PANOLENS.Infospot(100);
infospot_01_01.position.set(-3500, 0, -850);
infospot_01_01.addHoverText('Fotos');
infospot_01_01.addEventListener('click', function(){
	$("#gallery-01").click();
});

infospot_01_02 = new PANOLENS.Infospot(100);
infospot_01_02.position.set(-2500, -100, -400);
infospot_01_02.addHoverText('Fotos');
infospot_01_02.addEventListener('click', function(){
	$("#gallery-02").click();
});

infospot_01_03 = new PANOLENS.Infospot(100);
infospot_01_03.position.set(2000, -800, -900);
infospot_01_03.addHoverText('Fotos');
infospot_01_03.addEventListener('click', function(){
	$("#gallery-03").click();
});

panorama_01.add(
	infospot_01_01,
	//infospot_01_02,
	infospot_01_03
);