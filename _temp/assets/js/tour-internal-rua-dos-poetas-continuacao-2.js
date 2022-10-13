// pano viewer 01
var
	infospot_01_01,
	infospot_01_02,
	infospot_02_01,
	panoView_01,
	panorama_01,
	panorama_02,
	viewer_01;

panoView_01 = document.querySelector('.pano-viewer-01');

panorama_01 = new PANOLENS.ImagePanorama('../../assets/img/tour/02-3/pano/01.jpg');
panorama_02 = new PANOLENS.ImagePanorama('../../assets/img/tour/02-3/pano/02.jpg');

viewer_01 = new PANOLENS.Viewer({
	output: 'console',
	container: panoView_01,
	cameraFov: 70,
	controlBar: false,
	autoHideInfospot: false
});

viewer_01.OrbitControls.minFov = 60;
viewer_01.OrbitControls.maxFov = 90;

viewer_01.add(panorama_01);
viewer_01.add(panorama_02);

panorama_01.addEventListener( 'enter-fade-start', function(){
	viewer_01.tweenControlCenter( new THREE.Vector3(1000, -100, -100), 10);
});

panorama_02.addEventListener( 'enter-fade-start', function(){
	viewer_01.tweenControlCenter( new THREE.Vector3(-2000, -100, -2500), 10);
});

panorama_01.link( panorama_02, new THREE.Vector3(2000, 0, 100), 100, '../../assets/img/move-icon.png' );
panorama_02.link( panorama_01, new THREE.Vector3(-3000, -100, -350), 100, '../../assets/img/move-icon-2.png' );

infospot_01_01 = new PANOLENS.Infospot(70);
infospot_01_01.position.set(-1300, -50, 1000);
infospot_01_01.addHoverText('Túlio Simas Piva');
infospot_01_01.addEventListener('click', function(){
	$("#tulio").click();
});

infospot_01_02 = new PANOLENS.Infospot(70);
infospot_01_02.position.set(1000, -500, -500);
infospot_01_02.addHoverText('Fotos');
infospot_01_02.addEventListener('click', function(){
	$("#rua").click();
});

infospot_02_01 = new PANOLENS.Infospot(30);
infospot_02_01.position.set(-73, -50, -500);
infospot_02_01.addHoverText('Caio');
infospot_02_01.addEventListener('click', function(){
	$("#caio").click();
});

panorama_01.add(
	infospot_01_01,
	infospot_01_02,
);

panorama_02.add(
	infospot_02_01,
);