 /*jshint unused:false*/
$(document).ready(function(){
	'use strict';
	
	TweenMax.set('.landing', {backgroundAttachment: 'fixed'});

	var vh = $( window ).height(),
		vh50 = ( vh / 2 ),
		height = vh50 - 45,
		negHeight = '-=' + height + 'px';
	
	var HomeLandinganim = new TimelineMax({paused:true});

	// HomeLandinganim.add( TweenMax.to('.landing', 1.5, {backgroundPositionY: negHeight ,ease:Linear.easeNone}) );
	// HomeLandinganim.add( TweenMax.set('.bandeau', {className: '-=fixed'}) );
	// HomeLandinganim.add( TweenMax.set('.landing-home-2', {className: '+=follow'}) );

	// console.log(vh50, height, negHeight);

		//TweenMax.to('.landing', 1.5, {backgroundPositionY: negHeight ,ease:Linear.easeNone,onComplete:function(){
		//	TweenMax.set('.bandeau', {className: '-=fixed'});
		//	TweenMax.set('.landing-home-2', {className: '+=follow'});
		//}});
	
	var header = new ScrollMagic.Scene({
        triggerElement: '#trigger',
        triggerHook: 0,
        duration: 45
    })
	.setTween(TweenMax.to('header', 0.25, {top:'-=45',ease:Linear.easeNone}))
	// .addIndicators({name: 'header'})
	.addTo(controller);

	//var landingBg = new ScrollMagic.Scene({
	//	triggerElement: '#trigger2',
	//	triggerHook: 0.558,
	//	duration: height
	//})
	//.setTween(HomeLandinganim.play())
	//.addIndicators({name: 'landingAnim'})
	//.addTo(controller);

});