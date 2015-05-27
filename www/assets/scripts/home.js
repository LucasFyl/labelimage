 /*jshint unused:false*/
$(document).ready(function(){
	'use strict';

	var vh = $( window ).height(),
		vh50 = ( vh / 2 ),
		topPos = vh50 + 45 + 'px', 
		topPos2 = ( vh + vh50 ) - 22.5 + 'px', 
		bgPos = '-=' + ( vh50 - 22 ) + 'px';

	var firstTl = new TimelineMax({paused:true});
	var secondTl = new TimelineMax({paused:true});

	firstTl.set('.bandeau', {css:{position:'absolute',top:'100vh'}})
			.set('.background', {backgroundAttachment:'fixed',backgroundPositionY:bgPos})
			.set('.main-content', {css:{position:'fixed',top:topPos}});
			
	secondTl.set('.main-content', {css:{position:'absolute',top:topPos2}});


	var header = new ScrollMagic.Scene({
        triggerElement: '#trigger',
        duration: 45,
        triggerHook: 0
    })
	.setTween(TweenMax.to('header', 0.25, {top:'-=45',ease:Linear.easeNone}))
	// .addIndicators({name: 'header'})
	.addTo(controller);

	var firstPart = new ScrollMagic.Scene({
        triggerElement: '#trigger2',
        triggerHook: 'onLeave',
        offset: -45
    })
	.setTween(firstTl.play())
	// .addIndicators({name: 'firstBg'})
	.addTo(controller);

	var secondPart = new ScrollMagic.Scene({
        triggerElement: '.bandeau',
        triggerHook: 'onLeave',
        offset: -68
    })
	.setTween(secondTl.play())
	// .addIndicators({name: 'secondPart'})
	.addTo(controller);


});