/*jshint unused:false*/
/*jshint -W117 */

    // C O N T A C T


var tarifsController = new ScrollMagic.Controller();


var headerTarifs = new ScrollMagic.Scene({
    triggerElement: '.main-content',
    triggerHook: 'onLeave',
    offset: -45,
    duration: 45
}).setTween(TweenMax.to('header', 0.25, {top:'-=45',ease:Linear.easeNone}));
// .addIndicators({name: 'header'});

var headlineTarifs = new ScrollMagic.Scene({
	triggerElement: '#tarifs',
	triggerHook: 'onLeave',
	duration: 150
  }).setTween(TweenMax.to('.landing h1', 0.5, {opacity:0,ease:Power2.easeOut}));
// .addIndicators({name: 'headline'});

var backgroundTarifs  = new ScrollMagic.Scene({
    triggerElement: '#tarifs',
    triggerHook: 'onLeave',
    duration: 300,
    offset: 0
}).setTween(TweenMax.to('.landing .background', 0.5, {top:'-150px',ease:Linear.easeNone}));
// .addIndicators({name: 'background'})
