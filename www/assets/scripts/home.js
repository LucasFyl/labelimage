 /*jshint unused:false*/
$(document).ready(function(){
	'use strict';
	$('.bandeau').addClass('fixed');
	var vh = $( window ).height(),
		vh50 = ( vh / 2 ),
		height = vh50 - 45,
		negHeight = '-=' + height + 'px';
	console.log(vh50, height, negHeight);
	var header = new ScrollMagic.Scene({
        triggerElement: '#trigger',
        triggerHook: 0,
        duration: 45
    })
	.setTween(TweenMax.to('header', 0.25, {top:'-=45',ease:Linear.easeNone}))
	// .addIndicators({name: 'header'})
	.addTo(controller);

	var landingBg = new ScrollMagic.Scene({
		triggerElement: '#trigger2',
		triggerHook: 0.558,
		duration: height
	})
	.setTween(
		TweenMax.to('.landing', 1.5, {backgroundPositionY: negHeight ,ease:Linear.easeNone,onComplete:function(){
			TweenMax.set('.bandeau', {className: '-=fixed'});
			TweenMax.set('.landing-home-2', {className: '+=follow'});
		}})
	)
	.addIndicators(landingBg)
	.addTo(controller);

});