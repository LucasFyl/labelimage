 /*jshint unused:false*/
$(document).ready(function(){
	'use strict';

	var vh = $( window ).height(),
		vh50 = ( vh / 2 ),
		height = vh50 - 45,
		negHeight = '-=' + height + 'px';

	var header = new ScrollMagic.Scene({
        triggerElement: '#trigger',
        triggerHook: 0,
        duration: 45
    })
	.setTween(TweenMax.to('header', 0.25, {top:'-=45',ease:Linear.easeNone}))
	// .addIndicators({name: 'header'})
	.addTo(controller);

});