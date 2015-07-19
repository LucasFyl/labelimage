/*jshint unused:false*/
/*jshint -W117 */

    // C O N T A C T


var newsController = new ScrollMagic.Controller();


var headerNews = new ScrollMagic.Scene({
  triggerElement: '.main-content',
  duration: 45,
  triggerHook: 0,
  offset: -45
}).setTween(TweenMax.to('header', 0.25, {top:'-=45',ease:Linear.easeNone}));
// .addIndicators({name: 'header'})

var headlineNews = new ScrollMagic.Scene({
  triggerElement: '.main-content',
  duration: '25%',
  triggerHook: 0.47,
  offset: 0
}).setTween(TweenMax.to('.landing h1', 0.5, {opacity:0,ease:Power2.easeOut}));
// .addIndicators({name: 'headline'})

var backgroundNews = new ScrollMagic.Scene({
  triggerElement: '.main-content',
  triggerHook: 0.47,
  duration: 300
}).setTween(TweenMax.to('.landing .background', 0.5, {css:{y:'-180px'},ease:Linear.easeNone}));
// .addIndicators({name: 'background'})