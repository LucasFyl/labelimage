/*jshint unused:false*/
/*jshint -W117 */


        // P R É S T A T I O N S 

var prestaController = new ScrollMagic.Controller();


var headerPresta = new ScrollMagic.Scene({
    triggerElement: '#trigger3',
    triggerHook: 0,
    duration: 45
}).setTween(TweenMax.to('header', 0.25, {top:'-=45',ease:Linear.easeNone}));
// .addIndicators({name: 'header'})

var landingPresta = new ScrollMagic.Scene({
    triggerElement: '#trigger2',
    triggerHook: 0,
    duration: '100%'
}).setTween(TweenMax.to('.landing .background', 0.5, {top:'-55%',ease:Linear.easeNone}));
// .addIndicators({name: 'background'})

var headlinePresta = new ScrollMagic.Scene({
    triggerElement: '#trigger',
    triggerHook: 1,
    duration: '25%'
}).setTween(TweenMax.to('.landing h1', 0.5, {opacity:0,ease:Power2.easeOut}));
// .addIndicators({name: 'headline'})

var footerTirages = new ScrollMagic.Scene({
    triggerElement: '#trigger4',
    triggerHook: 0,
    duration: '100%'
}).setTween(TweenMax.to('.main-content > div:nth-child(5) > div', 0.1, {backgroundAttachment:'initial'}));
// .addIndicators({name: 'Position'})