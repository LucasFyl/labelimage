// Controller
var controller = new ScrollMagic.Controller();

$(function(){   

    var $window = $(window);
    var scrollTime = 1.2;
    var scrollDistance = 200;

    $window.on("mousewheel DOMMouseScroll", function(event){

        event.preventDefault(); 

        var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
        var scrollTop = $window.scrollTop();
        var finalScroll = scrollTop - parseInt(delta*scrollDistance);

        TweenMax.to($window, scrollTime, {
            scrollTo : { y: finalScroll, autoKill:true },
                ease: Power4.easeOut,
                overwrite: 5                            
            });

    });
});