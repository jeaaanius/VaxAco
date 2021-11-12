jQuery(function($) {
	"use strict";
	var fooday = window.fooday || {};

	/*------------------------------------------------------------------
	This file include js code for fullpage page, element in main content
	-------------------------------------------------------------------*/

	// Fullpage Script
    fooday.fullpage = function() {
    	if ( $(window).width() > 1024 ) {
    		$('#fullpage').fullpage({
	            //Navigation
	            navigation: true,
	            navigationPosition: 'right',
	            scrollBar: true,
	            onLeave: function(index, nextIndex, direction){
	            	if ( $('#fullpage :nth-child(' + nextIndex + ')').hasClass('nav-light') ) {
	            		$('body').attr('nav-color','light');
	            	} else {
						$('body').removeAttr('nav-color');
	            	}
	            },
	        });
    	}
    }

	  var $window           = $(window),
	      win_height_padded = $window.height() * 1.1,
	      isTouch           = Modernizr.touch;

	  if (isTouch) { $('.revealOnScroll').addClass('animated'); }

	  $window.on('scroll', revealOnScroll);

	  function revealOnScroll() {
	    var scrolled = $window.scrollTop(),
	        win_height_padded = $window.height() * 1.1;

	    // Showed...
	    $(".wow:not(.animated)").each(function () {
	      var $this     = $(this),
	          offsetTop = $this.offset().top;

	      if (scrolled + win_height_padded > offsetTop) {
	        if ($this.data('timeout')) {
	          window.setTimeout(function(){
	            $this.addClass('animated ' + $this.data('animation'));
	          }, parseInt($this.data('timeout'),10));
	        } else {
	          $this.addClass('animated ' + $this.data('animation'));
	        }
	      }
	    });
	    // Hidden...
	   $(".wow.animated").each(function (index) {
	      var $this     = $(this),
	          offsetTop = $this.offset().top;
	      if (scrolled + win_height_padded < offsetTop) {
	        $(this).removeClass('animated fadeInUp flipInX lightSpeedIn')
	      }
	    });
	  }

	  revealOnScroll();

	/*------------------------------------------------------------------
	Initialize Function
	-------------------------------------------------------------------*/
	// Initialize function when document load
	$(document).ready(function(){
		fooday.fullpage();
		revealOnScroll();
	});

});

