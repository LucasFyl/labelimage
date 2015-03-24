
// Controller
var controller = new ScrollMagic.Controller();
// 2. Timeline
var tmax_tl = new TimelineMax({pause:true});
    tmax_tl.to('.landing h1', 1, {opacity:0,ease:Power2.easeOut}, "+=0.5");
    tmax_tl.to('.background', 5, {top:'-50%',ease:Power1.easeInOut}, "-=1");
    tmax_tl.to('header li a', 1, {color:'#000',ease:Power2.easeInOut}, "+=3");
 
function landingAnim() {
	var config = {};
	var landingAnim = new TimelineMax(config);
	landingAnim
	// .to('.landing h1, .arrow-down', 0.6, {opacity:0,ease:Power2.easeOut})
	.to('.main-content', 1, {top:0,ease:Power4.easeInOut}, "-=0.9")
	.play().timeScale(0.6);
}