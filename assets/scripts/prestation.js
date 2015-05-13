$( document ).ready(function(){

	'use strict';



	new ScrollMagic.Scene({
        triggerElement: '#trigger2',
        triggerHook: 0,
        duration: '100%'
    })
	.setTween(TweenMax.to('.landing .background', 0.5, {top:'-75%',ease:Linear.easeNone}))
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

    initScroll();
	

    function initScroll() {
        var $window = $(window);
        var scrollTime = 1.2;
        var scrollDistance = 200;

        $window.on("mousewheel DOMMouseScroll", function(event){
            event.preventDefault(); 

            var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
            var scrollTop = $window.scrollTop();
            var finalScroll = scrollTop - parseInt(delta*scrollDistance);

            TweenMax.to($window, scrollTime, {
                scrollTo : { y: finalScroll, autoKill:true },
                    ease: Power4.easeOut,
                    overwrite: 0                            
                });

        });
    }
});