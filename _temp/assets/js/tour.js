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