// pano viewer 01
var
	panoView_01,
	panorama_01,
	panorama_02,
	viewer_01;

panoView_01 = document.querySelector('.pano-viewer-01');

panorama_01 = new PANOLENS.ImagePanorama('../../assets/img/tour/02-4/pano/01.jpg');
panorama_02 = new PANOLENS.ImagePanorama('../../assets/img/tour/02-4/pano/02.jpg');

viewer_01 = new PANOLENS.Viewer({
	output: 'console',
	container: panoView_01,
	cameraFov: 70,
	controlBar: false,
	autoHideInfospot: false
});

viewer_01.OrbitControls.minFov = 60;
viewer_01.OrbitControls.maxFov = 80;

viewer_01.add(panorama_01);
viewer_01.add(panorama_02);

panorama_01.addEventListener( 'enter-fade-start', function(){
	viewer_01.tweenControlCenter( new THREE.Vector3(-100, 0, -2000), 10);
});

panorama_02.addEventListener( 'enter-fade-start', function(){
	viewer_01.tweenControlCenter( new THREE.Vector3(3000, 0, 0), 10);
});

panorama_01.link( panorama_02, new THREE.Vector3(0, -350, -3000), 100, '../../assets/img/move-icon.png' );
panorama_02.link( panorama_01, new THREE.Vector3(-3300, 100, 2000), 100, '../../assets/img/move-icon-2.png' );

infospot_01_01 = new PANOLENS.Infospot(70);
infospot_01_01.position.set(1100, 60, 1000);
infospot_01_01.addHoverText('Fotos');
infospot_01_01.addEventListener('click', function(){
	$("#placa").click();
});

infospot_01_02 = new PANOLENS.Infospot(200);
infospot_01_02.position.set(-2000, -1500, -2000);
infospot_01_02.addHoverText('Fotos');
infospot_01_02.addEventListener('click', function(){
	$("#rua").click();
});

infospot_01_03 = new PANOLENS.Infospot(100);
infospot_01_03.position.set(-400, -500, -2000);
infospot_01_03.addHoverText('Fotos');
infospot_01_03.addEventListener('click', function(){
	$("#fotos").click();
});

infospot_02_01 = new PANOLENS.Infospot(100);
infospot_02_01.position.set(-2000, -300, 2000);
infospot_02_01.addHoverText('Fotos');
infospot_02_01.addEventListener('click', function(){
	$("#rua-2").click();
});

infospot_02_02 = new PANOLENS.Infospot(100);
infospot_02_02.position.set(1500, 0, -1000);
infospot_02_02.addHoverText('Fotos');
infospot_02_02.addEventListener('click', function(){
	$("#outro-lado").click();
});

infospot_02_03 = new PANOLENS.Infospot(100);
infospot_02_03.position.set(1500, -50, 0);
infospot_02_03.addHoverText('Casa Caio');
infospot_02_03.addEventListener('click', function(){
	$("#casa-caio").click();
});

panorama_01.add(
	infospot_01_01,
	infospot_01_02,
	infospot_01_03
);

panorama_02.add(
	infospot_02_01,
	infospot_02_02,
	infospot_02_03
);