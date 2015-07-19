/*jshint -W117 */

function makeOrange() {
	var _this = this;
	TweenMax.to(_this, 0.25, {color:'#eb5c08',ease:Power2.easeOut} );
}
function makeBlack() {
	var _this = this;
	TweenMax.to(_this, 0.25, {color:'#000',ease:Power2.easeOut} );
}

$( document ).ready(function(){

	'use strict';

	$('.td').hover(makeOrange, makeBlack);
	// $('.td').hoverIntent(makeOrange, makeBlack);
	
});