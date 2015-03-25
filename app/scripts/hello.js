$(document).ready(function(){

	new ScrollMagic.Scene({
        triggerElement: '#trigger',
        triggerHook: 1,
        duration: '25%'
    })
	.setTween(TweenMax.to('.landing h1', 0.5, {opacity:0}))
	// .addIndicators({name: 'headline'})
	.addTo(controller);

	new ScrollMagic.Scene({
        triggerElement: '#trigger2',
        triggerHook: 0,
        duration: '100%'
    })
	.setTween(TweenMax.to('.landing .background', 0.5, {marginTop:'-60%',ease:Linear.easeNone}))
	// .addIndicators({name: 'background'})
	.addTo(controller);
});