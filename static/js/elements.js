jQuery(function($) {
	"use strict";
	var fooday = window.fooday || {};

	var toastDurationTime = 5000;
	var animDurationTime = 500; 

	/*------------------------------------------------------------------
	This file include js code for shortcode, element in main content
	-------------------------------------------------------------------*/

	// Main Function
	fooday.mainFuntion = function() {
		// Set fullscreen for section
		var windowH = $(window).height();
	    var wrapperH = $('.section-full-screen').height();
	    if(windowH > wrapperH) {
	        $('.section-full-screen').css({'height':($(window).height())+'px'});
	    }
	    $(window).resize(function(){
	    	var windowH = $(window).height();
		    var wrapperH = $('.section-full-screen').height();
		    if(windowH > wrapperH) {
		        $('.section-full-screen').css({'height':($(window).height())+'px'});
		    }
	    });

		$('.main-carousel').each(function(){
			var $main_slider = $(this).find('.main-slider .item-sliders');
			var arrows = $(this).data("arrows");
			var dots = $(this).data("dots");

			if(arrows == "undefined"){
				arrows = true;
			}
			if(dots == "undefined"){
				dots = false;
			}

			$main_slider.slick({
				animation: 'slide',
			 	slidesToShow: 1,
			 	slidesToScroll: 1,
			 	nextArrow: "<div class='next-slide'><a class='arrow-slide'><i class='fa fa-chevron-right'></i></a></div>",
	        	prevArrow: "<div class='prev-slide'><a class='arrow-slide'><i class='fa fa-chevron-left'></i></a></div>",
			 	dots:dots,
			 	arrows:arrows
			});
		});

		// Bootstrap Datepicker
		$('.datepicker').datepicker();

		//one page
		
	}

	// SC Timeline
	fooday.sc_time_line = function() {
		$('.swin-sc-timeline').each(function(){
			var $main_slider = $(this).find('.main-slider');
			var $nav_slider = $(this).find('.nav-slider');
			$main_slider.flexslider({
			  	selector: ".slides > .item",
			    animation: "slide",
			    controlNav: false,
			    directionNav: false,
			    animationLoop: false,
			    slideshow: false,
			    sync: $nav_slider,
			});
			$nav_slider.flexslider({
			    animation: "slide",
			    controlNav: false,
			    directionNav: false,
			    animationLoop: false,
			    slideshow: false,
			   	itemWidth: 210,
			    asNavFor: $main_slider,
			});
			$nav_slider.find('.slides').find("li:not(:first-child)").each(function(){
				var width = 230;
				$(this).width(width);
			});
		});

		$('.swin-sc-timeline-2').each(function(){
			var item = $(this).attr('data-item')
			var $main_slider = $(this).find('.main-slider .slides');
			var $nav_slider = $(this).find('.nav-slider .slides');
			$main_slider.slick({
				animation: 'slide',
			 	slidesToShow: item,
			 	slidesToScroll: 1,
			 	arrows: true,
			 	asNavFor: $nav_slider,
			 	focusOnSelect: true,
			 	responsive: [
		         	{
				       breakpoint: 480,
				       settings: {
				        slidesToShow: 2,
				      }
				    },
				    {
				      breakpoint: 769,
				       settings: {
				        slidesToShow: 5,
				      }
				    },
				]
			});
			$nav_slider.slick({
			 	asNavFor: $main_slider,
			 	dots: false,
			 	arrows: false,
		        infinite: false,
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        focusOnSelect: true
			});
		});


	}

	// Testimonial
	fooday.sc_testimonial = function() {
		$('.swin-sc-testimonial.style-1').each(function(){
			var $main_slider = $(this).find('.main-slider .slides');
			var $nav_slider = $(this).find('.nav-slider .slides');
			$main_slider.slick({
				animation: 'slide',
			 	slidesToShow: 1,
			 	slidesToScroll: 1,
			 	arrows: false,
			 	asNavFor: $nav_slider
			});
			$nav_slider.slick({
			 	asNavFor: $main_slider,
			 	centerMode: true,
			 	dots: false,
			 	arrows: false,
		        infinite: true,
		        slidesToShow: 3,
		        centerPadding: 0,
		        slidesToScroll: 1,
		        focusOnSelect: true
			});
		});

		$('.swin-sc-testimonial.style-2').each(function(){
			var $main_slider = $(this).find('.main-slider .slides');
			$main_slider.slick({
				animation: 'slide',
			 	slidesToShow: 1,
			 	slidesToScroll: 1,
			 	arrows: false,
			});
		});
	}

	// Swipebox General
	fooday.swipebox = function() {

        $( '.swipebox' ).swipebox({autoplayVideos: true});

	}

	// Team Slider 2
	fooday.sc_team = function() {
		// Team slider
		$(".swin-sc-team-slider").slick({
	        dots: false,
	        arrows: true,
	        infinite: true,
	        slidesToShow: 3,
	        slidesToScroll: 1,
	        focusOnSelect: false,
	        nextArrow: "<div class='next-slide'><a class='arrow-slide'><i class='fa fa-chevron-right'></i></a></div>",
	        prevArrow: "<div class='prev-slide'><a class='arrow-slide'><i class='fa fa-chevron-left'></i></a></div>",
	        responsive: [
	         	{
			       breakpoint: 480,
			       settings: {
			        slidesToShow: 1,
			      }
			    },
			    {
			      breakpoint: 769,
			       settings: {
			        slidesToShow: 2,
			      }
			    },
			]
	    });
		$('.swin-sc-team-slider-2').each(function(){
			var $main_slider = $(this).find('.main-slider .slides');
			var $nav_slider = $(this).find('.nav-slider .slides');
			$main_slider.slick({
			 	slidesToShow: 1,
			 	slidesToScroll: 1,
			 	arrows: false,
			 	dots: true,
			 	fade: false,
			 	asNavFor: $nav_slider,
			});
			$nav_slider.slick({
			 	asNavFor: $main_slider,
			 	dots: false,
			 	arrows: false,
		        infinite: true,
		        slidesToShow: 4,
		        slidesToScroll: 1,
		        focusOnSelect: true,
		        responsive: [
		         	{
				       breakpoint: 480,
				       settings: {
				        slidesToShow: 3,
				        dots: false,
				      }
				    }
				]
			});
		});
	}

    // Isotope
    fooday.sc_isotope = function() {
		$('.swin-sc-isotope .grid').isotope({
		  	// options
		  	itemSelector: '.grid-item',
		  	percentPosition: true,
			masonry: {
			    // use outer width of grid-sizer for columnWidth
			    columnWidth: '.grid-sizer'
			}
		});
	}

	// Blog Slider
	fooday.sc_blog = function() {
		$('.swin-sc-blog-slider.has-slider').each(function(){
			var $main_slider = $(this).find('.main-slider .slides');
			$main_slider.slick({
			 	slidesToShow: 1,
			 	slidesToScroll: 1,
			 	arrows: true,
			 	nextArrow: "<div class='next-slide'><a class='arrow-slide'><i class='fa fa-chevron-right'></i></a></div>",
	        	prevArrow: "<div class='prev-slide'><a class='arrow-slide'><i class='fa fa-chevron-left'></i></a></div>",
			});
		});
	}

	fooday.sc_blog_masonry = function() {
		$('.swin-sc-blog-masonry .grid').isotope({
		  	// options
		  	itemSelector: '.grid-item',
		  	percentPosition: true,
			masonry: {
			    // use outer width of grid-sizer for columnWidth
			    columnWidth: '.grid-sizer'
			}
		});
	}

	// Counter
	fooday.sc_counter = function() {
		$('.timer').each(function(){
			var $this = $(this);
			$this.appear();
			$this.on('appear', function(){
				$(this).countTo();
			});
		});
	}

	// Partner
	fooday.sc_partner = function() {
		$('.swin-sc-partner').each(function(){
			var data_item = parseInt($(this).attr('data-item'));
			$(this).find('.slides').slick({
		        dots: false,
		        infinite: true,
		        slidesToShow: data_item,
		        slidesToScroll: 1,
		        responsive: [
		        	{
				       breakpoint: 769,
				       settings: {
				        slidesToShow: 4,
				      }
				    },
		         	{
				       breakpoint: 480,
				       settings: {
				        slidesToShow: 1,
				      }
				    },
				]
		    });
		});
	}

	// Product Featured Image
	fooday.sc_product = function() {
		$('.products-01.style-01').each(function(){
			var $main_slider = $(this).find('.main-slider');
			var $nav_slider = $(this).find('.nav-slider');
			$main_slider.slick({
				fade:true,
			 	slidesToShow: 1,
			 	slidesToScroll: 1,
			 	dots: true,
			 	asNavFor: $nav_slider,
			 	focusOnSelect: true
			});
			$nav_slider.slick({
				fade:true,
			 	asNavFor: $main_slider,
			 	dots: false,
			 	arrows: false,
		        infinite: true,
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        focusOnSelect: true
			});
		});
		$('.products-01').on('beforeChange', function(event, slick, currentSlideIndex, nextSlideIndex){
		  	var currentSlide = ".nav-slider div[data-slick-index='"+currentSlideIndex+"']";
		   	var nextSlide = ".nav-slider div[data-slick-index='"+nextSlideIndex+"']";
		   	$(this).find(currentSlide).removeClass('animated fadeInUpShort');
		  	$(this).find(nextSlide).addClass('animated fadeInUpShort');
		});
		$('.products-01.style-02').each(function(){
			var $main_slider = $(this).find('.main-slider');
			var $nav_slider = $(this).find('.nav-slider');
			var slide_toshow = $main_slider.attr('data-slide-toshow');
			if (!slide_toshow) {
				slide_toshow = 4;
			}
			$main_slider.slick({
			 	slidesToShow: slide_toshow,
			 	slidesToScroll: 1,
			 	arrows: true,
			 	infinite: false,
			 	asNavFor: $nav_slider,
			 	focusOnSelect: true,
			 	responsive: [
		         	{
				       breakpoint: 480,
				       settings: {
				        slidesToShow: 1,
				        dots: true,
				      }
				    },
				]
			});
			$nav_slider.slick({
				fade:true,
			 	asNavFor: $main_slider,
			 	dots: false,
			 	arrows: false,
		        infinite: false,
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        focusOnSelect: true
			});
		});
		$('.products-01.style-03').each(function(){
			var $main_slider = $(this).find('.main-slider');
			var $nav_slider = $(this).find('.nav-slider');
			var main_item = parseInt($main_slider.attr('data-slide-toshow'));
			var nav_item = parseInt($nav_slider.attr('data-slide-toshow'));
			var centermode = true;
			if ( !$.isNumeric(main_item) ) {
				main_item = 3;
			}
			if ( !$.isNumeric(nav_item) ) {
				nav_item = 1;
			}
			if ( main_item % 2 === 0 ) {
				centermode = false;
			}
			$main_slider.slick({
			 	slidesToShow: main_item,
			 	slidesToScroll: 1,
			 	dots: false,
			 	arrows: true,
			 	asNavFor: $nav_slider,
			 	focusOnSelect: true,
			 	centerMode: centermode,
			 	centerPadding: '20px',
			 	nextArrow: "<div class='next-slide'><a class='arrow-slide'><i class='fa fa-chevron-right'></i></a></div>",
	        	prevArrow: "<div class='prev-slide'><a class='arrow-slide'><i class='fa fa-chevron-left'></i></a></div>",
	        	responsive: [
		         	{
				       breakpoint: 480,
				       settings: {
				        slidesToShow: 1,
				      }
				    },
				]
			});
			$nav_slider.slick({
				slidesToShow: nav_item,
			 	slidesToScroll: 1,
				fade:true,
			 	asNavFor: $main_slider,
			 	dots: false,
			 	arrows: false,
		        infinite: true,
		        focusOnSelect: true
			});
		});
		$('.products-01.style-04').each(function(){
			var $nav_slider = $(this).find('.nav-slider');
			var item = $nav_slider.data('item');
			if (!item) {
				item = 3;
			}

			$nav_slider.slick({
				fade: false,
			 	dots: false,
			 	arrows: true,
		        infinite: false,
		        slidesToShow: item,
		        slidesToScroll: 1,
		        vertical: true,
		        focusOnSelect: false,
		        nextArrow: "<div class='next-slide slide-vertical'><a class='arrow-slide'><i class='fa fa-chevron-down'></i></a></div>",
	        	prevArrow: "<div class='prev-slide slide-vertical'><a class='arrow-slide'><i class='fa fa-chevron-up'></i></a></div>",
	        	responsive: [
		         	{
				       breakpoint: 1025,
				       settings: {
				        slidesToShow: 2,
				      }
				    },
			    ]
			});
		});
		$('.products-02.carousel-02').on('beforeChange', function(event, slick, currentSlideIndex, nextSlideIndex){
		  	var currentSlide = ".nav-slider div[data-slick-index='"+currentSlideIndex+"']";
		   	var nextSlide = ".nav-slider div[data-slick-index='"+nextSlideIndex+"']";
		   	$(this).find(currentSlide).removeClass('animated fadeInUpShort');
		  	$(this).find(nextSlide).addClass('animated fadeInUpShort');
		});
		$('.products-02.carousel-02').each(function(){
			var $main_slider = $(this).find('.main-slider');
			var $nav_slider = $(this).find('.nav-slider');
			var slide_toshow = $main_slider.attr('data-slide-toshow');
			if (!slide_toshow) {
				slide_toshow = 4;
			}
			$main_slider.slick({
			 	slidesToShow: slide_toshow,
			 	slidesToScroll: 1,
			 	arrows: true,
			 	asNavFor: $nav_slider,
			 	focusOnSelect: true,
			 	responsive: [
		         	{
				       breakpoint: 480,
				       settings: {
				        slidesToShow: 1,
				        dots: true,
				      }
				    },
				]
			});
			$nav_slider.slick({
				fade:true,
			 	asNavFor: $main_slider,
			 	dots: false,
			 	arrows: false,
		        infinite: true,
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        focusOnSelect: true,
		        draggable: false,
		        adaptiveHeight: true
			});
		});
		$('.products-02.carousel-01').each(function(){
			var $nav_slider = $(this).find('.nav-slider');
			$nav_slider.slick({
				fade:false,
			 	dots: false,
			 	arrows: true,
		        infinite: true,
		        slidesToShow: 3,
		        slidesToScroll: 1,
		        focusOnSelect: true,
		        nextArrow: "<div class='next-slide'><a class='arrow-slide'><i class='fa fa-chevron-right'></i></a></div>",
	        	prevArrow: "<div class='prev-slide'><a class='arrow-slide'><i class='fa fa-chevron-left'></i></a></div>",
	        	responsive: [
		         	{
				       breakpoint: 480,
				       settings: {
				        slidesToShow: 1,
				        dots: true,
				      }
				    },
				]
			});
		});
		$('.product-featured-image').each(function(){
			var $main_slider = $(this).find('.main-slider .slides');
			var $nav_slider = $(this).find('.nav-slider .slides');
			$main_slider.slick({
			 	slidesToShow: 1,
			 	slidesToScroll: 1,
			 	arrows: false,
			 	fade: true,
			 	asNavFor: $nav_slider
			});
			$nav_slider.slick({
			 	asNavFor: $main_slider,
			 	dots: false,
			 	arrows: true,
		        infinite: true,
		        slidesToShow: 4,
		        slidesToScroll: 1,
		        focusOnSelect: true,
		        responsive: [
		         	{
				       breakpoint: 480,
				       settings: {
				        slidesToShow: 2,
				        dots: true,
				      }
				    },
				]
			});
		});
	}

	// Section equal height with beside its
	fooday.equalHeight = function() {
		if ($(window).width() > 768) {
			$('.equal-height').each(function(){
				$(this).height($(this).parents('section').outerHeight());
			});
		}
	}

	// Audio.js
	fooday.audio = function() {
		audiojs.events.ready(function() {
	    	var as = audiojs.createAll();
	  	});
	}

	// Quanlity Product in Single Page
	fooday.product_quanlity = function() {
		$('.quanlity-plus').on('click',function(){
			var val = $(this).parents('.input-group').find('input').val();
			val = parseInt( val, 10 ) + 1;
			$(this).parents('.input-group').find('input').val(val);
		});
		$('.quanlity-minus').on('click',function(){
			var val = $(this).parents('.input-group').find('input').val();
			val = parseInt( val, 10 ) - 1;
			if ( val > 0 ) {
				$(this).parents('.input-group').find('input').val(val);
			}
		});
	}

	/**
	 * Add To Cart dialog
	 * This is just JS to demo.
	 * You only need to toggle class 'dialog--open' and 'dialog-close' for 'dialog'
	 */
	var closeDialog = function($dialog) {
		$dialog.removeClass('dialog--open');
		$dialog.addClass('dialog--close');
		setTimeout(() => {
			$dialog.removeClass('dialog--close');
		}, animDurationTime);
	}

	fooday.addToCartDialog = function () {
		$('[data-toggle="dialog"]').on('click', function () {
			var $dialog = $($(this).attr('data-target'));
			if (!$dialog.hasClass('dialog--open')) {
				$dialog.addClass('dialog--open');
			} else {
				closeDialog($dialog);
			}
		});

		$('.dialog__overlay').on('click', function(e) {
			e.preventDefault();
			var $dialog = $(this).parent();
			closeDialog($dialog);
		});
	}

	/**
	 * Add To Cart Toast
	 * This is just JS to demo.
	 * You only need to toggle class 'toast--open' and 'toast-close' for 'toast'
	 */
	fooday.addToCartToast = function () {
		$('.open-toast').on('click', function () {
			// $('.toast').show();
			$('.toast').addClass('toast--open');
			setTimeout(() => {
				if ($('.toast').hasClass('toast--open')) {
					$('.toast').removeClass('toast--open');
					$('.toast').addClass('toast--close');
					setTimeout(() => {
						$('.toast').removeClass('toast--close');
					}, animDurationTime);
				}
			}, toastDurationTime);
		});

		$('.close-toast').on('click', function () {
			$('.toast').removeClass('toast--open');
			$('.toast').addClass('toast--close');
			setTimeout(() => {
				$('.toast').removeClass('toast--close');
			}, animDurationTime);
		});
	}

	/*------------------------------------------------------------------
	Initialize Function
	-------------------------------------------------------------------*/
	// Initialize function when document load
	$(document).ready(function(){
		fooday.mainFuntion();
		fooday.audio();
		fooday.sc_product();
		fooday.sc_partner();
		fooday.sc_counter();
		fooday.sc_blog();
		fooday.sc_isotope();
		fooday.sc_team();
		fooday.swipebox();
		fooday.sc_testimonial();
		fooday.sc_time_line();
		fooday.equalHeight();
		fooday.product_quanlity();
		fooday.addToCartDialog();
		fooday.addToCartToast();
	});

	// Initialize function when all images loaded finish
	$(window).load(function() {
	    // this will fire after the entire page is loaded, including images
	    fooday.sc_blog_masonry();
	});
});

