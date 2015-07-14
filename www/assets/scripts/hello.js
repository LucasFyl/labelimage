/*jshint smarttabs:true */
/*jshint unused:false */
$(document).ready(function(){

	'use strict';
	
	$("body").niceScroll({
		cursorcolor: "#000000", // change cursor color in hex
        cursoropacitymin: 0, // change opacity when cursor is inactive (scrollabar "hidden" state), range from 1 to 0
        cursoropacitymax: 0.6, // change opacity when cursor is active (scrollabar "visible" state), range from 1 to 0
        cursorwidth: "5px", // cursor width in pixel (you can also write "5px")
        cursorborder: "1px solid #000", // css definition for cursor border
        zindex: 99999,
        railpadding: { top: 0, right: 5, left: 0, bottom: 0 },
        mousescrollstep: 60,
        scrollX: false,
        scrollY: true
	});

	var customScroll = $("body").getNiceScroll();
	$( window ).resize(function() {
		customScroll.resize();
	});


	TweenMax.set('header', {css:{y:'-45px'}});
	if($('#mobile-menu').is(':visible')) {
		TweenMax.set('#mobile-menu nav', {top:'-100vh',opacity:1});

		$('#mobile-menu').on('click', '.trigger', function(e){
			e.preventDefault();
			if( $('#mobile-menu nav').position(top) !== 0) {
				TweenMax.to('#mobile-menu nav', 0.75, {top:0,ease:Power4.easeOut});
			}
		});
		$('#mobile-menu').on('click', '.close-menu', function(e){
			e.preventDefault();
			TweenMax.to('#mobile-menu nav', 0.75, {top:'-100vh',ease:Power4.easeIn});
		});
	}


		
});

$(window).load(function(){
	var animHeader = new TimelineMax({paused:true});

	animHeader.set('header', {backgroundColor:'#f6f2ef'})
			.set('header .logo', {opacity:1})
			.to('header', 0.5, {css:{y:0},ease:Power1.easeOut}, "+=0.2")
			.staggerTo(['nav li.anim-from-bottom'], 0.5, {marginTop:0,opacity:1,ease:Power1.easeOut}, 0.15, "-=0.3")
			.to('h1.anim-from-bottom', 0.25, {bottom:245,opacity:1,ease:Power1.easeOut})
			.staggerTo('nav ul li span', 0.5, {opacity:1,top:16,ease:Power2.easeOut})
			.to('.fadein, .fadeIn', 0.25, {opacity:1,ease:Power1.easeOut})
			.to('.loader', 0.5, {opacity:0,ease:Power1.easeInOut}, "-=0.75")
			.set('.loader', {display:'none'});

	animHeader.play();
});