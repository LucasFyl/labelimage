 /*jshint unused:false*/
// Controller Scroll animations
var controller = new ScrollMagic.Controller();

var ratioImage = function() {
  $('.ratioImg').each(function(){
    var box = $(this),
        image = $(this).find('img'),
        margin = '-' + (image.parent().width() / 2) + 'px' ;
      console.log(margin, image.width(), image.outerWidth());
    // if ( box.height() > image.height() ) {
    //   TweenMax.set(image, {minHeight:'100%',width:'auto',minWidth:'auto'});
    // } else if ( box.outerWidth() > image.outerWidth() ) {
    //   TweenMax.set(image, {minWidth:'100%',height:'auto',minHeight:'auto'});
    // }
    // if ( image.outerWidth() < box.outerWidth() ) {
    //   TweenMax.set(image, {minWidth:'100%',height:'auto',minHeight:'auto'});
    // }
    if ( box.height() <= box.width() ) {
      TweenMax.set(image, {width:'100%',minWidth:'100%',height:'auto',minHeight:'auto',onComplete:function(){
        TweenMax.set(image, {position:'absolute',left:'50%',marginLeft:margin});
        if ($('.landing img').length > 0) {
          TweenMax.set('.landing img', {position:'fixed'});
        }
      }});
    } else if ( box.height >= box.width ) {
      TweenMax.set(image, {height:'100%',minHeight:'100%',width:'auto',minWidth:'auto',onComplete:function(){
        TweenMax.set(image, {position:'absolute',left:'50%',marginLeft:margin});
        if ($('.landing img').length > 0) {
          TweenMax.set('.landing img', {position:'fixed'});
        }
      }});
    }
  });
};


// $(document).ready(function() {

//	'use strict';

// });