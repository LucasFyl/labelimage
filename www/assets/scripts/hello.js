/*jshint smarttabs:true */
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


	TweenMax.set('header', {y:'-45px'});
	TweenMax.to('.fadeIn', 0.25, {opacity:1,ease:Power1.easeOut,delay:0.1});
	
});

$(window).load(function(){

	var animHeader = new TimelineMax({paused:true});
	animHeader.set('header', {backgroundColor:'#f6f2ef'})
			.to('header', 0.25, {y:0,ease:Power2.easeOut,delay:0.3})
			.staggerTo(['nav li.anim-from-bottom'], 0.25, {marginTop:0,opacity:1,ease:Power1.easeOut}, 0.15)
			.to('h1.anim-from-bottom', 0.25, {bottom:245,opacity:1,ease:Power1.easeOut})
			.staggerTo('nav ul li span', 0.5, {opacity:1,top:16,ease:Power2.easeOut})
			.to('.loader', 0.5, {opacity:0,ease:Power1.easeInOut}, "-=0.5")
			.set('.loader', {display:'none'});



	animHeader.play();
	
});