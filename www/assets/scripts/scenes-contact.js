/*jshint unused:false*/
/*jshint -W117 */

    // C O N T A C T


var contactController = new ScrollMagic.Controller();


var headerContact = new ScrollMagic.Scene({
    triggerElement: '#trigger3',
    triggerHook: 0,
    duration: 45
}).setTween(TweenMax.to('header', 0.25, {top:'-=45',ease:Linear.easeNone}));
// .addIndicators({name: 'header'})

var headlineContact = new ScrollMagic.Scene({
      triggerElement: '#trigger',
      triggerHook: 1,
      duration: '25%'
  }).setTween(TweenMax.to('.landing h1', 0.5, {opacity:0,ease:Power2.easeOut}));
// .addIndicators({name: 'headline'})

var backgroundContact  = new ScrollMagic.Scene({
    triggerElement: '#trigger2',
    triggerHook: 0.5,
    duration: '50%'
}).setTween(TweenMax.to('.landing .background', 0.5, {top:'-25%',ease:Linear.easeNone}));
// .addIndicators({name: 'background'})