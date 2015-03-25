
// Controller
var controller = new ScrollMagic.Controller();
// 2. Timeline
var tmax_tl = new TimelineMax({pause:true});
    tmax_tl.to('.landing h1', 7, {opacity:0,ease:Power4.easeInOut}, "+=0.5");
    // tmax_tl.to('.background', 5, {top:'-50%',ease:Power1.easeInOut}, "-=1");
    tmax_tl.to('header li a', 1, {color:'#000',ease:Power2.easeInOut,delay:5}, "+=5");
    tmax_tl.to('header a.logo', 0.5, {className:'+=blk',ease:Power2.easeInOut}, "+=1");

var config = {pause:true),
    scrollAnim = new TimelineMax(config);
scrollAnim.to('.landing h1', {opacity:0,ease:Power4.easeInOut});