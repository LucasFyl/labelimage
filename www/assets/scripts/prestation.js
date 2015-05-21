$( document ).ready(function(){

	'use strict';



	var background = new ScrollMagic.Scene({
        triggerElement: '#trigger2',
        triggerHook: 0,
        duration: '100%'
    })
	.setTween(TweenMax.to('.landing .background', 0.5, {top:'-75%',ease:Linear.easeNone}))
	// .addIndicators({name: 'background'})
	.addTo(controller);

	var header = new ScrollMagic.Scene({
        triggerElement: '#trigger3',
        triggerHook: 0,
        duration: 45
    })
	.setTween(TweenMax.to('header', 0.25, {top:'-=45',ease:Linear.easeNone}))
	// .addIndicators({name: 'header'})
	.addTo(controller);

	var headline = new ScrollMagic.Scene({
            triggerElement: '#trigger',
            triggerHook: 1,
            duration: '25%'
        })
      .setTween(TweenMax.to('.landing h1', 0.5, {opacity:0,ease:Power2.easeOut}))
      // .addIndicators({name: 'headline'})
      .addTo(controller);

	$('body').on('click', 'a.arrow-down',function(e){
		e.preventDefault();
		var wH = $(window).height();
		TweenLite.to(window, 1, {scrollTo:{y:wH}, ease:Power2.easeInOut});
	});

	// if ($('#prestation').hasClass('finitions')){
       // background.remove();

       // var background = new ScrollMagic.Scene({
       //    triggerElement: '#trigger2',
       //    triggerHook: 0,
       //    duration: '100%'
       //  })
       //  .setTween(TweenMax.to('.landing .background', 0.5, {top:'-40px',ease:Linear.easeNone}))
       //  // .addIndicators({name: 'background'})
       //  .addTo(controller);
	// }
});

$( window ).load(function(){ 

	'use strict';

    // initScroll();
	
});