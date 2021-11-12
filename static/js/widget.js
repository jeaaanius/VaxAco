jQuery(function($) {
    "use strict";
    var fooday = window.fooday || {};
    fooday.widgetFuntion = function(){
		$('.widget-gallery.carousel').each(function(){
			$(this).find('.main-slider').slick({
				fade:false,
			 	slidesToShow: 1,
			 	slidesToScroll: 1,
			 	dots: true,
			 	focusOnSelect: true
			});
		});
    }
    $(document).ready(function(){
		fooday.widgetFuntion();
	});
});