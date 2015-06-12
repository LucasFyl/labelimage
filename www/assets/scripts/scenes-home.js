/*jshint unused:false*/
/*jshint -W117 */

// Define global controller for scroll animations
var homeController = new ScrollMagic.Controller();

// Now let's define scenes 


            // H O M E 


var headerHome = new ScrollMagic.Scene({
    triggerElement: '#trigger',
    duration: 45,
    triggerHook: 0
}).setTween(TweenMax.to('header', 0.25, {top:'-=45',ease:Linear.easeNone}));
// .addIndicators({name: 'header'})

var firstPart = new ScrollMagic.Scene({
    triggerElement: '#home',
    triggerHook: 'onLeave',
    offset: 225
}).setTween(firstTl.play())
.addIndicators({name: 'firstBg'});

var secondPart = new ScrollMagic.Scene({
    triggerElement: '.bandeau',
    triggerHook: 'onLeave',
    offset: -225
}).setTween(secondTl.play());
// .addIndicators({name: 'secondPart'})