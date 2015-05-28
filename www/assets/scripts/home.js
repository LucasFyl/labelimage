 /*jshint unused:false*/

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
