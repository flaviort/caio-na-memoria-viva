particlesJS('particles-js', {

	"particles": {
		"number": {
			"value": 50,
			"density": {
				"enable": true,
				"value_area": 500
			}
		},
		"color": {
			"value": "#fbef3a"
		},
		"shape": {
			"type": "circle",
			"stroke": {
				"width": 0,
				"color": "#000000"
			},
			"polygon": {
				"nb_sides": 5
			},
			"image": {
				"src": "img/github.svg",
				"width": 100,
				"height": 100
			}
		},
		"opacity": {
			"value": 1,
			"random": false,
			"anim": {
				"enable": true,
				"speed": 4.155844155844156,
				"opacity_min": 0.1,
				"sync": false
			}
		},
		"size": {
			"value": 2,
			"random": true,
			"anim": {
				"enable": false,
				"speed": 40,
				"size_min": 0.1,
				"sync": false
			}
		},
		"line_linked": {
			"enable": true,
			"distance": 130,
			"color": "#ddd",
			"opacity": 1,
			"width": 1
		},
		"move": {
			"enable": true,
			"speed": 2,
			"direction": "none",
			"random": false,
			"straight": false,
			"out_mode": "out",
			"bounce": false,
			"attract": {
				"enable": false,
				"rotateX": 600,
				"rotateY": 1200
			}
		}
	},

	"interactivity": {
		"detect_on": "window",
		"events": {
			"onhover": {
				"enable": true,
				"mode": "bubble"
			},
			"onclick": {
				"enable": false,
				"mode": "push"
			},
			"resize": true
		},
		"modes": {
			"grab": {
				"distance": 400,
				"line_linked": {
					"opacity": 1
				}
			},
			"bubble": {
				"distance": 400,
				"size": 10,
				"duration": 2,
				"opacity": 8,
				"speed": 3
			},
			"repulse": {
				"distance": 200,
				"duration": 0.4
			},
			"push": {
				"particles_nb": 4
			},
			"remove": {
				"particles_nb": 2
			}
		}
	},
	
	"retina_detect": true

});