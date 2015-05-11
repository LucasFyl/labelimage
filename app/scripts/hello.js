$(document).ready(function(){

	'use strict';


	TweenMax.set('header', {y:'-45px'});
	TweenMax.to('.fadeIn', 0.25, {opacity:1,ease:Power1.easeOut,delay:0.1});
	
	var animHeader = new TimelineMax({paused:true});
	animHeader.set('header', {backgroundColor:'#f6f2ef'})
			  .to('header', 0.25, {y:0,ease:Power2.easeOut,delay:0.3})
			  .staggerTo(['nav li.anim-from-bottom'], 0.25, {marginTop:0,opacity:1,ease:Power1.easeOut}, 0.15)
			  .to('h1.anim-from-bottom', 0.25, {bottom:245,opacity:1,ease:Power1.easeOut})
			  .staggerTo('nav ul li span', 0.5, {opacity:1,top:18,ease:Power2.easeOut})
			  .to('.loader', 0.5, {opacity:0,ease:Power1.easeInOut}, "-=0.5")
			  .set('.loader', {display:'none'});

	animHeader.play();
});