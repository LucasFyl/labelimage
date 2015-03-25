
// Controller
var controller = new ScrollMagic.Controller();
// 2. Timeline
var tmax_tl = new TimelineMax({pause:true});
    tmax_tl.to('.landing h1', 2.5, {opacity:0,ease:Power4.easeInOut}, "+=0.5");
    // tmax_tl.to('.background', 5, {top:'-50%',ease:Power1.easeInOut}, "-=1");
    tmax_tl.to('header li a', 1, {color:'#000',ease:Power2.easeInOut,delay:5}, "+=10");
    tmax_tl.to('header a.logo', 0.5, {className:'+=blk',ease:Power2.easeInOut}, "+=1");
 
function landingAnim() {
	var config = {pause:true};
	var landingAnim = new TimelineMax(config);
	landingAnim.to('.landing h1', 1, {opacity:0,ease:Power2.easeOut}, "+=0.5");
    landingAnim.to('.background', 5, {top:'-50%',ease:Power1.easeInOut}, "-=1");
    landingAnim.to('header li a', 1, {color:'#000',ease:Power2.easeInOut}, "+=3");
    landingAnim.to('header a.logo', 0.5, {className:'+=blk',ease:Power2.easeInOut}, "+=3");

	landingAnim.play().timeScale(0.6);
}