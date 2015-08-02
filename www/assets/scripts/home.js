/*jshint unused:false*/
/*jshint -W117 */
/* jshint -W099 */

var homeController = new ScrollMagic.Controller();

var bandeauH = $('.bandeau').height();

var landingTl = new TimelineMax({paused:true}).to(window, 1, {scrollTo:{y:bandeauH/2}, ease:Power3.easeInOut}, "+=1.5").to('.bandeau', 1, {bottom:0, ease:Power3.easeInOut}, "-=1");
var prestaTween = new TweenMax.to('.bottom-part h3', 0.8, {opacity:1,right:'90px',ease:Power3.easeOut});

var prestaPart = new ScrollMagic.Scene({
    triggerElement: '.bottom-part'
}).setTween(prestaTween);
// .addIndicators({name: 'firstPart'});

var headerHome = new ScrollMagic.Scene({
    triggerElement: '.bandeau',
    duration: 45,
    triggerHook: 0,
    offset: -45
}).setTween(TweenMax.to('header', 0.25, {top:'-=45',ease:Linear.easeNone}));
// .addIndicators({name: 'header'});



function initPage() {
	landingTl.play();
}

// $(window).load(function(){
// 	$('body').scrollTop(0);
// });

$(document).ready(function(){
	TweenMax.set(window, {scrollTo:0});
	initPage();
});