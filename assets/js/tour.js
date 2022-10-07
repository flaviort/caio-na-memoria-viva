// init panzoom
const element = document.getElementById('panzoom')
const panzoom = Panzoom(element, {
    maxScale: 4,
	minScale: 1,
	contain: "outside",
});

// enable mouse wheel
//const parent = element.parentElement
//parent.addEventListener('wheel', panzoom.zoomWithWheel);

setTimeout(function(){
	panzoom.reset()
}, 300);