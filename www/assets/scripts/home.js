/*jshint unused:false*/
/*jshint -W117 */
/* jshint -W099 */

var homeController = new ScrollMagic.Controller();




// var vh = $( window ).height(),
// 	vh50 = ( vh / 2 ),
// 	topPos = vh50 + 45 + 'px', 
// 	topPos2 = ( vh + vh50 ) - 22.5 + 'px', 
// 	bgPos = '-=' + ( vh50 - 22 ) + 'px';

var bandeauH = $('.bandeau').height();
// var bottomPH = $('.bottom-part').height();

// var customScroll = $("body").getNiceScroll();


// var firstTl = new TimelineMax({paused:true});
// var secondTl = new TimelineMax({paused:true});
var landingTl = new TimelineMax({paused:true}).to(window, 1, {scrollTo:{y:bandeauH/2}, ease:Power3.easeInOut}, "+=1.5").to('.bandeau', 1, {bottom:0, ease:Power3.easeInOut}, "-=1");
var prestaTween = new TweenMax.to('.bottom-part h3', 0.8, {opacity:1,right:'90px',ease:Power3.easeOut});
// // TweenMax.set('.main-content', {marginTop:bottomPH})

// landingTl.to(window, 1, {scrollTo:{y:bandeauH/2}, ease:Power3.easeInOut, delay:2}) 
// 		 .to('.bandeau', 1, {bottom:0, ease:Power3.easeInOut}, "-=1");
		// .set('.bandeau', {css:{position:'absolute',top:vh50+bandeauH/2}})
		// .set('.bottom-part', {css:{position:'fixed'},zIndex:99});

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

// firstTl.set('.bottom-part', {position:'absolute',top:'100%'+(bandeauH/2)})
// .set('.main-content', {marginTop:bottomPH,onComplete:function(){
// 		customScroll.resize();
// }})
// .to('header', 0.25, {top:'-=45',ease:Linear.easeNone});
		
// // firstTl.set('.bandeau', {css:{position:'absolute',top:vh50 + 22.5 + 180 + 'px'}});
// 		// .set('.background', {backgroundAttachment:'fixed',backgroundPositionY:'-180px'})
// 		// .set('.main-content', {css:{position:'fixed',top:vh50 + 45 + 180 + 'px'}});

// //firstTl.to('.background', 0.25, {top:"-=300px",ease:Power2.easeInOut})
// //		.set('.bandeau', {bac});
		
// // secondTl.set('.main-content', {css:{position:'absolute',top:vh + 180 + 'px'}});


// // Define global controller for scroll animations

// // Now define scenes 
//             // H O M E 

// var headerHome = new ScrollMagic.Scene({
//     triggerElement: '.bandeau',
//     duration: 45,
//     triggerHook: 0,
//     offset: -45
// }).setTween(firstTl.play());
// // .addIndicators({name: 'header'});

// // var firstPart = new ScrollMagic.Scene({
// //     triggerElement: '.bandeau',
// //     triggerHook: 'onLeave',
// //     offset: bottomPH
// // }).setTween(TweenMax.set('header', {background:'red'}))
// // .addIndicators({name: 'firstPart'});

// // var secondPart = new ScrollMagic.Scene({
// //     triggerElement: '.bandeau',
// //     triggerHook: 'onLeave',
// //     offset: -245
// // }).setTween(secondTl.play());
// // .addIndicators({name: 'secondPart'})
// $(window).load(function(){
// 	$('body').scrollTop(0);
// });

$(document).ready(function(){
	TweenMax.set(window, {scrollTo:0});
	initPage();
});