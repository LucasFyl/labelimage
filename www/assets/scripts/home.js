 /*jshint unused:false*/
$(document).ready(function(){
	'use strict';

	var vh = $( window ).height(),
		vh50 = ( vh / 2 ),
		height = vh50 - 22.5,
		posheight = (vh50 - 45) + 'px',
		negHeight = '-=' + height + 'px';

	var header = new ScrollMagic.Scene({
        triggerElement: '#trigger',
        duration: 45,
        triggerHook: 0
    })
	.setTween(TweenMax.to('header', 0.25, {top:'-=45',ease:Linear.easeNone}))
	// .addIndicators({name: 'header'})
	.addTo(controller);

	var firstBg = new ScrollMagic.Scene({
        triggerElement: '#trigger2',
        duration: height
    })
	.setTween(TweenMax.to('.background', 0.25, {backgroundPositionY:negHeight,ease:Linear.easeNone}))
	// .addIndicators({name: 'firstBg'})
	.addTo(controller);

	var positionBandeau = new ScrollMagic.Scene({
        triggerElement: '#trigger3'
    })
	.setTween(TweenMax.set('.bandeau', {position:'absolute',translateY:posheight}))
	// .addIndicators({name: 'positionBandeau'})
	.addTo(controller);

});