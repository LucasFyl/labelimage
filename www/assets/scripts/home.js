 /*jshint unused:false*/
$(document).ready(function(){
	'use strict';

	var vh = $( window ).height(),
		vh50 = ( vh / 2 ),
		height = vh50 - 22.5,
		topPos = vh50 + 22.5 + vh50 + 45 + 'px', 
		topPos2 = vh50 + 45 + 'px', 
		bgPos = '-=' + ( vh50 + 22.5 ) + 'px',
		posheight = (vh50 - 45) + 'px',
		negHeight = '-=' + height + 'px';

	var timeline = new TimelineMax();
	timeline.set('.background', {backgroundAttachment:'fixed',backgroundPositionY:bgPos})
			.set('.main-content', {position:'fixed',top:topPos2})
			.set('.bandeau', {position:'absolute',top:'100vh'});

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
        triggerHook: 'onLeave',
        offset: -45
    })
	.setTween(timeline)
	.addIndicators({name: 'firstBg'})
	.addTo(controller);

	// var bandeau = new ScrollMagic.Scene({
 //        triggerElement: '.bandeau',
 //        duration: height,
 //        triggerHook: 'onLeave',
 //        offset: -45
 //    })
	// .setTween(bandeauTween)
	// .addIndicators({name: 'bandeau'})
	// .addTo(controller);


});