$(document).ready(function(){

	TweenMax.to('.fadeIn', 0.25, {opacity:1,ease:Power1.easeOut,delay:0.1});
	TweenMax.staggerTo(['nav li.anim-from-bottom'], 0.25, {marginTop:0,opacity:1,ease:Power1.easeOut,delay:0.3}, 0.15);
	TweenMax.to('h1.anim-from-bottom', 0.25, {bottom:245,opacity:1,ease:Power1.easeOut,delay:0.4});
	TweenMax.staggerTo('nav ul li span', 0.5, {opacity:1,top:16,ease:Power2.easeOut,delay:0.6});

	

});