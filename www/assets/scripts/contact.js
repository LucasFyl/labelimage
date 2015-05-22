$( document ).ready(function(){

	'use strict';

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
        triggerHook: 0.767,
        duration: '50%'
    })
	.setTween(TweenMax.to('.landing .background', 0.5, {top:'-25%',ease:Linear.easeNone}))
	// .addIndicators({name: 'background'})
	.addTo(controller);

	new ScrollMagic.Scene({
        triggerElement: '#trigger3',
        triggerHook: 0,
        duration: 45
    })
	.setTween(TweenMax.to('header', 0.25, {top:'-=45',ease:Linear.easeNone}))
	// .addIndicators({name: 'header'})
	.addTo(controller);


	$('body').on('click', 'a.arrow-down',function(e){
		e.preventDefault();
		var wH = $(window).height();
		TweenLite.to(window, 1, {scrollTo:{y:wH}, ease:Power2.easeInOut});
	});
	
});

$( window ).load(function(){ 

	'use strict';

    // initScroll();
	
});