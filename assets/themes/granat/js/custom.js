//Header opacity
	
	$(window).scroll(function() {
		if ( $(window).scrollTop() > 10) {
			$("#masthead").addClass("darken");
		} else {
			$("#masthead").removeClass("darken");
		}

	});
	
	
	
//Mobile menu
	
	// define a few selected elements to help with faster DOM access
	var mobileSize, offsetVal,
	mobileMenu = $(".mobile-menu"),
	moveOnMenuOpen = $(".mobile-menu, .site-content, .header, .footer"),
	pageHeader = $(".header");

	// note whether the screen size is roughly a mobile device (tablet portrait and below), and set a global var accordingly
	function detectWindowSize() {
		if ($(window).width() <= 900) {
			mobileSize = true;
		} else {
			mobileSize = false;
			moveOnMenuOpen.removeClass("showNav");
		}

		if ($(window).width() < 985) {
			offsetVal = 122;
		} else {
			offsetVal = 115;
		}
	}

	// run this on page load
	detectWindowSize();

	// detect a browser window resize event and throttle the output slightly (limited to 10 times/second)
	// this keeps resize detection from being spastic on IE and Webkit ( http://paulirish.com/2009/throttled-smartresize-jquery-event-handler/ )
	( function( $,sr ){
	// debouncing function from John Hann ( http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/ )
	var debounce = function ( func, threshold, execAsap ) {
		var timeout;
		return function debounced ( ) {
			var obj = this, args = arguments;
			function delayed ( ) {
				if ( !execAsap )
					func.apply( obj, args );
				timeout = null;
			};

			if ( timeout )
				clearTimeout( timeout );
			else if ( execAsap )
				func.apply( obj, args );

			timeout = setTimeout( delayed, threshold || 100 );
		};
	}
		// smartresize
		jQuery.fn[sr] = function( fn ){ return fn ? this.bind( 'resize', debounce( fn ) ) : this.trigger( sr ); };

	} )( jQuery,'smartresize' );

	// detect the window size whenever the viewport changes
	$( window ).smartresize( function( ){
		detectWindowSize();
	});

	// show the main menu when you click the menu button
	$("#show_mobile_menu").on("click", function(e) {
		e.stopPropagation( );
		moveOnMenuOpen.toggleClass("showNav");
	});

	// hide the menu on page click/tap if mobile menu is showing
	$(".site-content, .footer, .header").on("click", function() {
		if (mobileSize) {
			moveOnMenuOpen.removeClass("showNav");
		}
	});
	
	

//Slider
	
	jQuery(document).ready(function($) {
	
	var cp = 1, tfc = ($(".slide")).length, cpo=1; 

	function slider_advance(direction) {
		if (!document.getElementsByTagName("video")[0].paused) { return false;} 
		$("#navDot" + cp + ", .slide" + cp).removeClass("active");
		if (direction == "next") {
			if (cp == tfc) {cp = 1;} else {cp = cp + 1;}
		} else if (direction == "prev") {
			if (cp == 1) {cp = tfc;} else {cp = cp - 1;}
		}
		$(".slide" + cp + ",#navDot" + cp).addClass("active");
	}

	function goto(id) {
		$(".navDot, .slide").removeClass("active");
		$(".slide" + id + ",#navDot" + id).addClass("active");
		cp = id;
	}

	var sliderAutoPlay = setInterval( function() { slider_advance("next"); },200000);
	
	function resetSlider() {
		clearInterval(sliderAutoPlay);
		sliderAutoPlay = setInterval( function() { slider_advance("next"); },200000);
	}
	
	$(".slide").on("click", function() {
		slider_advance("next");
		resetSlider();
	});

	$(".navDot").on("click", function() {
		var id = $(this).data("id");
		goto(id);
		resetSlider();
	});
	
	$("video").on("click", function(e) {
		e.stopPropagation();
	});	
	
	var v = document.getElementsByTagName("video")[0],
		v2 = document.getElementsByTagName("video")[1],
		v2Exists = $("#homeVideo2");

	$("#watchVideo").on("click", function(e) {
		e.stopPropagation();
		v.play();
		$(".site-header, #slideText1, .closeButton, #homeVideo1, .navDotContainer").addClass("playing");
		clearInterval(sliderAutoPlay);
	});
	
	$(".closeButton").on("click", function(e) {
		e.stopPropagation();
		$(".site-header, #slideText1, .closeButton, #homeVideo1, .navDotContainer").removeClass("playing");
		v.pause();
		window.setTimeout(function() {
			v.load();
		}, 750);
		sliderAutoPlay = setInterval( function() { slider_advance("next"); },10000);
	});

	playButton = $("#watchVideoMobile");

	if (navigator.userAgent.match(/(iPad|iPhone|iPod)/g) === null) {
		playButton.on("click touchend", function(e){
			e.stopPropagation();
			v.load();
			v.play();
			$(".site-header, #slideText1, .closeButton, #homeVideo1, .navDotContainer").addClass("playing");
			clearInterval(sliderAutoPlay);
		});
		
	} else {
	
		playButton.on("click touchend", function(e){
			e.stopPropagation();
			$(".site-header, #slideText1, .closeButton, #homeVideo1, .navDotContainer").addClass("playing");
			clearInterval(sliderAutoPlay);
			v.load();
			v.play();
			if (v.webkitSupportsFullscreen) { 
				setTimeout(function(){v.webkitEnterFullscreen()},1100);
			} else {
				if (v.requestFullscreen) {
					setTimeout(function(){v.requestFullscreen()},1100);
				} else if (v.mozRequestFullScreen) {
					setTimeout(function(){v.mozRequestFullScreen()},1100);
				}
			}
		});
	}
	
	if (v2Exists.length == 1) {

		$("#watchVideo2").on("click", function(e) {
			e.stopPropagation();
			v2.play();
			$(".site-header, #slideText2, .closeButton2, #homeVideo2, .navDotContainer").addClass("playing");
			clearInterval(sliderAutoPlay);
		});
		
		$(".closeButton2").on("click", function(e) {
			e.stopPropagation();
			$(".site-header, #slideText2, .closeButton2, #homeVideo2, .navDotContainer").removeClass("playing");
			v2.pause();
			window.setTimeout(function() {
				v2.load();
			}, 750);
			sliderAutoPlay = setInterval( function() { slider_advance("next"); },10000);
		});

		playButton2 = $("#watchVideoMobile2");

		if (navigator.userAgent.match(/(iPad|iPhone|iPod)/g) === null) {
			playButton2.on("click touchend", function(e){
				e.stopPropagation();
				v2.play();
				$(".site-header, #slideText2, .closeButton2, #homeVideo2, .navDotContainer").addClass("playing");
				clearInterval(sliderAutoPlay);
				
			});
			
		} else {

			playButton2.on("click touchend", function(e){
				e.stopPropagation();
				$(".site-header, #slideText2, .closeButton2, #homeVideo2, .navDotContainer").addClass("playing");
				clearInterval(sliderAutoPlay);
				v2.load();
				v2.play();
				if (v2.webkitSupportsFullscreen) { 
					setTimeout(function(){v2.webkitEnterFullscreen()},2500);
				} else {
					if (v2.requestFullscreen) {
						setTimeout(function(){v2.requestFullscreen()},1500);
					} else if (v2.mozRequestFullScreen) {
						setTimeout(function(){v2.mozRequestFullScreen()},1500);
					}
				}
			});
		}
	}
});