console.log("main.js loaded");

if (!window.console) window.console = {};
if (!window.console.log) window.console.log = function() {};

var cornerstoneAPI = (function(options) {
	var shared = {},
		options = options || {}


	var menuAnimation = new TimelineMax({paused: true});
	menuAnimation.to(".mobile-nav-menu", 0.75, { autoAlpha: 1, left: 0, ease: Back.easeInOut});

	// MOBILE ICON - HAMBURGER
	$(".mobile-nav-btn").on("click", function(){
		$(this).toggleClass("open");

  		if ($(this).hasClass("played")) {
  			menuAnimation.reverse();	
  		} else {
  			menuAnimation.play();
  		}	
  		$(this).toggleClass("played");
	});

	var aboutInfographicAnimation = new TimelineMax({paused: true});
	aboutInfographicAnimation.from(".l-about-graph", 0.5, { autoAlpha: 0, top: -50, ease: Back.easeInOut});

	// INFOGRAPHIC ABOUT ME TOGGLE BTN
	$(".l-about-toggle-btn").on("click", function(){
		console.log("pressed");
		if ($(this).hasClass("played")) {
			aboutInfographicAnimation.reverse();
		} else {
			aboutInfographicAnimation.play();
		}
		$(this).toggleClass("played");
	});

	//$( "span" ).click(function() {
	//	console.log("presed");
	//	$( ".l-about-infographic img" ).slideToggle();
	//});

	// MIXITUP
	$(".l-works-grid").mixItUp({
		animation: {
			duration: 400,
			reverseOut: true,
			effects: 'fade translateZ(-360px) stagger(34s)',
			easing: 'cubic-bezier(0.455, 0.03, 0.515, 0.955)'
			//easing: 'cubic-bezier(0.68, -0.55, 0.265, 1.55)'
		}
	});

	$(".controls li a").on("click", function(e){
		e.preventDefault();
	})

	// BOTTOM BEFORE CLOUSURE
	var init = function() {
		console.log('cornerstone API works');
		// myFunctions();
	};
	shared.init = init;

	return shared;
}());

$(document).ready(function() {
	cornerstoneAPI.init();

});
