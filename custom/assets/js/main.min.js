console.log("main.js loaded");

if (!window.console) window.console = {};
if (!window.console.log) window.console.log = function() {};

var portfolioAPI = (function(options) {
	var shared = {};
	
	$(".l-home-btn").on("click", function(){
		window.location.href="../";
	});

	$(".l-post-home-btn").on("click", function(){
		window.location.href="../../";
	});

	// BACK TO TOP BUTTON
	$(window).on("scroll", function(){
		
		if($(this).scrollTop() > 200 ) {
			$(".l-top-btn").fadeIn();
		
		} else {
			$(".l-top-btn").fadeOut();
		}
	});

	$(".l-top-btn").on("click", function(){
	$("html, body").animate({scrollTop : 0}, 800);
	return false;
	});


	var menuAnimation = new TimelineMax({paused: true});
	menuAnimation.to(".mobile-nav-menu", 0.25, { autoAlpha: 1, left: 0, ease: Quad.easeInOut});

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

	var shareMenuAnimation = new TimelineMax({paused: true});
	shareMenuAnimation.to(".social-share", 0.5, { autoAlpha: 1, left: 0, ease: Back.easeInOut});

	// MOBILE ICON - HAMBURGER
	$(".l-share-btn").on("click", function(){
		console.log("click");
		$(this).toggleClass("open");

  		if ($(this).hasClass("played")) {
  			shareMenuAnimation.reverse();	
  		} else {
  			shareMenuAnimation.play();
  		}	
  		$(this).toggleClass("played");
	});

	// SPLASH SCREEN OVERLAY
	setTimeout(function() { 
		// Animation starts
		TweenMax.to(".l-splash-overlay" , 0.75, {
			autoAlpha: 0,
			//left: "20%",
			display: "none",
			ease: Back.easeInOut
		}); 

	}, 3500);

	$(".l-splash-overlay").on("click", function(){
		// Animation starts
		TweenMax.to(".l-splash-overlay" , 0.75, {
			autoAlpha: 0,
			//left: "20%",
			display: "none",
			ease: Back.easeInOut
		}); 
	});


	// WORKS NAV SLIDE IN
	setTimeout(function() { 
		// Animation starts
		TweenMax.to(".header-works-nav" , 0.5, {
			zIndex: 5,
			top: 14,
			autoAlpha: 1,
			ease: Quad.easeInOut
		}); 

	}, 750);

	// MIXITUP
	$(".l-works-section").mixItUp({
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
	});

	// stop after this
	//sto for real
	// Create a clone of the menu, right next to original.
	$('.header-site-nav').addClass('original').clone().insertAfter('.header-site-nav').addClass('cloned').css('position','fixed').css('top', 0).css('margin-top', 0).css('z-index','500').removeClass('original').hide();

	scrollIntervalID = setInterval(stickIt, 1);


	function stickIt() {

	  var orgElementPos = $('.original').offset();
	  orgElementTop = orgElementPos.top;               

	  if ($(window).scrollTop() >= (orgElementTop)) {
	    // scrolled past the original position; now only show the cloned, sticky element.

	    // Cloned element should always have same left position and width as original element.     
	    orgElement = $('.original');
	    coordsOrgElement = orgElement.offset();
	    leftOrgElement = coordsOrgElement.left;  
	    widthOrgElement = orgElement.css('width');
	    $('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
	    $('.original').css('visibility','hidden');
	  } else {
	    // not scrolled past the menu; only show the original menu.
	    $('.cloned').hide();
	    $('.original').css('visibility','visible');
	  }
	}

	// init
	var init = function() {


	}; // end init

	shared.init = init;

	return shared;
}());

$(document).ready(function() {
	portfolioAPI.init();

});
