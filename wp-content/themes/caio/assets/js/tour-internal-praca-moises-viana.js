// pano viewer 01
var
	panoView_01,
	panorama_01,
	viewer_01;

panoView_01 = document.querySelector('.pano-viewer-01');

panorama_01 = new PANOLENS.ImagePanorama('../../assets/img/tour/03/pano/01.jpg');

viewer_01 = new PANOLENS.Viewer({
	output: 'console',
	container: panoView_01,
	cameraFov: 70,
	controlBar: false,
	autoHideInfospot: false,
});

viewer_01.OrbitControls.minFov = 40;
viewer_01.OrbitControls.maxFov = 90;

viewer_01.add(panorama_01);

panorama_01.addEventListener( 'enter-fade-start', function(){
	viewer_01.tweenControlCenter( new THREE.Vector3(1000, 300, 0), 10);
});

infospot_01_01 = new PANOLENS.Infospot(100);
infospot_01_01.position.set(-600, 0, 1600);
infospot_01_01.addHoverText('Arco');
infospot_01_01.addEventListener('click', function(){
	$("#arco").click();
});

infospot_01_02 = new PANOLENS.Infospot(100);
infospot_01_02.position.set(-2000, -100, 0);
infospot_01_02.addHoverText('Frente');
infospot_01_02.addEventListener('click', function(){
	$("#frente").click();
});

infospot_01_03 = new PANOLENS.Infospot(100);
infospot_01_03.position.set(1500, -50, 2600);
infospot_01_03.addHoverText('Lateral');
infospot_01_03.addEventListener('click', function(){
	$("#lateral").click();
});

infospot_01_04 = new PANOLENS.Infospot(100);
infospot_01_04.position.set(1500, 50, -25);
infospot_01_04.addHoverText('Monumento Centro');
infospot_01_04.addEventListener('click', function(){
	$("#monumento").click();
});

infospot_01_05 = new PANOLENS.Infospot(100);
infospot_01_05.position.set(-900, -50, 1500);
infospot_01_05.addHoverText('Entrada Diagonal');
infospot_01_05.addEventListener('click', function(){
	$("#diagonal-01").click();
});

infospot_01_06 = new PANOLENS.Infospot(100);
infospot_01_06.position.set(-100, -50, -2000);
infospot_01_06.addHoverText('Entrada Diagonal');
infospot_01_06.addEventListener('click', function(){
	$("#diagonal-02").click();
});

infospot_01_07 = new PANOLENS.Infospot(100);
infospot_01_07.position.set(3000, -50, -3000);
infospot_01_07.addHoverText('Entrada Diagonal');
infospot_01_07.addEventListener('click', function(){
	$("#diagonal-03").click();
});

infospot_01_08 = new PANOLENS.Infospot(100);
infospot_01_08.position.set(3000, -50, 300);
infospot_01_08.addHoverText('Entrada Diagonal');
infospot_01_08.addEventListener('click', function(){
	$("#diagonal-04").click();
});

panorama_01.add(
	infospot_01_01,
	infospot_01_02,
	infospot_01_03,
	infospot_01_04,
	infospot_01_05,
	infospot_01_06,
	//infospot_01_07,
	//infospot_01_08
);