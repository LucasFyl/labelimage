 /*jshint unused:false*/

var vh = $( window ).height(),
	vh50 = ( vh / 2 ),
	topPos = vh50 + 45 + 'px', 
	topPos2 = ( vh + vh50 ) - 22.5 + 'px', 
	bgPos = '-=' + ( vh50 - 22 ) + 'px';

var firstTl = new TimelineMax({paused:true});
var secondTl = new TimelineMax({paused:true});

firstTl.set('.bandeau', {css:{position:'absolute',top:vh50 + 22.5 + 180 + 'px'}})
		.set('.background', {backgroundAttachment:'fixed',backgroundPositionY:'-180px'})
		.set('.main-content', {css:{position:'fixed',top:vh50 + 45 + 180 + 'px'}});

//firstTl.to('.background', 0.25, {top:"-=300px",ease:Power2.easeInOut})
//		.set('.bandeau', {bac});
		
secondTl.set('.main-content', {css:{position:'absolute',top:vh + 180 + 'px'}});