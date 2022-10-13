// pano viewer 01
var
	infospot_01_01,
	infospot_01_02,
	panoView_01,
	panorama_01,
	panorama_02,
	viewer_01;

panoView_01 = document.querySelector('.pano-viewer-01');

panorama_01 = new PANOLENS.ImagePanorama('../../assets/img/tour/01/pano/01.jpg');
panorama_02 = new PANOLENS.ImagePanorama('../../assets/img/tour/01/pano/02.jpg');

viewer_01 = new PANOLENS.Viewer({
	output: 'console',
	container: panoView_01,
	cameraFov: 60,
	controlBar: false,
	autoHideInfospot: false
});

viewer_01.OrbitControls.minFov = 50;
viewer_01.OrbitControls.maxFov = 80;

viewer_01.add(panorama_01);
viewer_01.add(panorama_02);

panorama_01.addEventListener( 'enter-fade-start', function(){
	viewer_01.tweenControlCenter( new THREE.Vector3(1000, 400, 0), 10);
});

panorama_02.addEventListener( 'enter-fade-start', function(){
	viewer_01.tweenControlCenter( new THREE.Vector3(1000, 100, 200), 10);
});

panorama_01.link( panorama_02, new THREE.Vector3(2500, 600, -3000), 150, '../../assets/img/move-icon.png' );
panorama_02.link( panorama_01, new THREE.Vector3(1000, 0, 900), 60, '../../assets/img/move-icon-2.png' );

infospot_01_01 = new PANOLENS.Infospot(100);
infospot_01_01.position.set(2000, 450, 230);
infospot_01_01.addHoverText('Por dentro');
infospot_01_01.addEventListener('click', function(){
	$("#por-dentro").click();
});

infospot_01_02 = new PANOLENS.Infospot(100);
infospot_01_02.position.set(2000, 900, -1300);
infospot_01_02.addHoverText('Prédio');
infospot_01_02.addEventListener('click', function(){
	$("#predio-frente").click();
});

infospot_02_01 = new PANOLENS.Infospot(100);
infospot_02_01.position.set(2000, 200, -100);
infospot_02_01.addHoverText('Prédio');
infospot_02_01.addEventListener('click', function(){
	$("#predio-tras").click();
});

infospot_02_02 = new PANOLENS.Infospot(100);
infospot_02_02.position.set(2000, -300, 500);
infospot_02_02.addHoverText('Trilhos');
infospot_02_02.addEventListener('click', function(){
	$("#trilhos").click();
});

panorama_01.add(
	infospot_01_01,
	infospot_01_02
);

panorama_02.add(
	infospot_02_01,
	infospot_02_02
);