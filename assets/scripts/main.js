// Controller
var controller = new ScrollMagic.Controller();

// $(function(){   
    
    function ratioImage() {
      $('.ratioImg').each(function(){
		console.log('foo');
        var box = $(this),
            image = $(this).find('img');
        if ( box.height() > image.height() ) {
          TweenMax.set(image, {minHeight:'100%'});
        } 
        if ( box.width() > image.width() ) {
          TweenMax.set(image, {minWidth:'100%'});
        }
      });
    }

// });


$(document).ready(function() {

	'use strict';
	ratioImage();
    $(window).on('resize', ratioImage);


});