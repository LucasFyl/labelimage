$(document).ready(function(){

	// TweenMax.to('.landing h1',0,{opacity:1});
	$('.landing h1').css('opacity', '1');

	$('.landing a').on('click',function(){
		landingAnim();
	});
	
	new ScrollMagic.Scene({
        triggerElement: '#trigger',
        triggerHook: 'onEnter',
        duration: 350
    })
	.addTo(controller)
	.setTween(tmax_tl);
});