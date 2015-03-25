$(document).ready(function(){

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

	$('.container-fluid').on("click", "a.arrow-down",function(){
		var wH = $(window).height();
		TweenLite.to(window, 1, {scrollTo:{y:wH}, ease:Power2.easeInOut});
	});

});