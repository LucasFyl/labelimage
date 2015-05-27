 /*jshint unused:false*/
$(document).ready(function(){
	'use strict';

	var vh = $( window ).height(),
		vh50 = ( vh / 2 ),
		// height = vh50 - 22.5,
		// topPos = vh50 + 22.5 + vh50 + 45 + 'px', 
		topPos = vh50 + 45 + 'px', 
		bgPos = '-=' + ( vh50 - 22 ) + 'px';
		// posheight = (vh50 - 45) + 'px',
		// negHeight = '-=' + height + 'px';

	var firstTl = new TimelineMax({paused:true});
	var secondTl = new TimelineMax({paused:true});
	firstTl.set('.background', {backgroundAttachment:'fixed',backgroundPositionY:bgPos})
			.set('.main-content', {position:'fixed',top:topPos})
			.set('.bandeau', {position:'absolute',top:'100vh'});
	secondTl.set('.main-content', {position:'absolute',top:'147%'});

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
        offset: -50
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