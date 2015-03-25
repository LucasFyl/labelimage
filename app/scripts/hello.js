$(document).ready(function(){

	TweenMax.to('.fadeIn', 0.25, {opacity:1,ease:Power1.easeOut,delay:0.1});
	TweenMax.staggerTo(['nav li.anim-from-bottom'], 0.25, {marginTop:0,opacity:1,ease:Power1.easeOut,delay:0.3}, 0.15);
	TweenMax.to('h1.anim-from-bottom', 0.25, {bottom:245,opacity:1,ease:Power1.easeOut,delay:0.4});
	TweenMax.staggerTo('nav ul li span', 0.5, {opacity:1,top:20,ease:Power2.easeOut,delay:0.6});

	new ScrollMagic.Scene({
        triggerElement: '#trigger',
        triggerHook: 1,
        duration: '25%'
    })
	.setTween(TweenMax.to('.landing h1', 0.5, {opacity:0,ease:Power2.easeOut}))
	// .addIndicators({name: 'headline'})
	.addTo(controller);

	new ScrollMagic.Scene({
        triggerElement: '#trigger2',
        triggerHook: 0,
        duration: '100%'
    })
	.setTween(TweenMax.to('.landing .background', 0.5, {top:'-75%',ease:Linear.easeNone}))
	// .addIndicators({name: 'background'})
	.addTo(controller);

	new ScrollMagic.Scene({
        triggerElement: '#trigger3',
        triggerHook: 0.2,
        duration: '20%'
    })
	.setTween(TweenMax.to('header', 0.5, {opacity:0,ease:Power2.easeOut}))
	// .addIndicators({name: 'header'})
	.addTo(controller);


	$('.container-fluid').on("click", "a.arrow-down",function(){
		var wH = $(window).height();
		TweenLite.to(window, 1, {scrollTo:{y:wH}, ease:Power2.easeInOut});
	});

});