 /*jshint unused:false*/

var vh = $( window ).height(),
	vh50 = ( vh / 2 ),
	topPos = vh50 + 45 + 'px', 
	topPos2 = ( vh + vh50 ) - 22.5 + 'px', 
	bgPos = '-=' + ( vh50 - 22 ) + 'px';

// var firstTl = new TweenMax();
var secondTl = new TimelineMax({paused:true});
function setters() {
	TweenMax.set('.bandeau', {css:{position:'absolute'}});
	TweenMax.set('.background', {backgroundAttachment:'fixed',backgroundPositionY:bgPos});
	TweenMax.set('.main-content', {css:{position:'fixed'}});
}

var firstTl = new TweenMax.to('.background', 1, {top:'-=188px',ease:Power4.easeOut,onComplete:setters()});

		
secondTl.set('.main-content', {css:{position:'absolute'}});
