	(function($){
		"use strict";
		
	/*...................................................
				main  slider Js 
	....................................................*/
		function mainSlider() {
			var BasicSlider = $('.slider-active');
			BasicSlider.on('init', function(e, slick) {
				var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
				doAnimations($firstAnimatingElements);
			});
			BasicSlider.on('beforeChange', function(e, slick, currentSlide, nextSlide) {
				var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
				doAnimations($animatingElements);
			});
			BasicSlider.slick({
				autoplay: true,
				autoplaySpeed: 10000,
				dots: true,
				fade: false,
				arrows: true,
				prevArrow:'<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
				nextArrow:'<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
			});

			function doAnimations(elements) {
				var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
				elements.each(function() {
					var $this = $(this);
					var $animationDelay = $this.data('delay');
					var $animationType = 'animated ' + $this.data('animation');
					$this.css({
						'animation-delay': $animationDelay,
						'-webkit-animation-delay': $animationDelay
					});
					$this.addClass($animationType).one(animationEndEvents, function() {
						$this.removeClass($animationType);
					});
				});
			}
		}
		mainSlider();

		/*...................................................
				main  slider Js 
	....................................................*/
	function newsSlider() {
		var BasicSlider = $('.news-active');
		BasicSlider.on('init', function(e, slick) {
			var $firstAnimatingElements = $('.single-news:first-child').find('[data-animation]');
			doAnimations($firstAnimatingElements);
		});
		BasicSlider.on('beforeChange', function(e, slick, currentSlide, nextSlide) {
			var $animatingElements = $('.single-news[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
			doAnimations($animatingElements);
		});
		BasicSlider.slick({
			autoplay: true,
			autoplaySpeed: 10000,
			dots: false,
			fade: false,
			swipeToSlide: true,
			arrows: true,
			prevArrow:'<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
			nextArrow:'<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
			
		});

		function doAnimations(elements) {
			var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
			elements.each(function() {
				var $this = $(this);
				var $animationDelay = $this.data('delay');
				var $animationType = 'animated ' + $this.data('animation');
				$this.css({
					'animation-delay': $animationDelay,
					'-webkit-animation-delay': $animationDelay
				});
				$this.addClass($animationType).one(animationEndEvents, function() {
					$this.removeClass($animationType);
				});
			});
		}
	}
	newsSlider();


	$('.banner_slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: false,
		asNavFor: '.thumbnail_slider'
	});
	$('.thumbnail_slider').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.banner_slider',
		dots: false,
		arrows: false,
		centerMode: true,
		focusOnSelect: true
	  });


	  /*...................................................
				  scrollToTop Js 
	....................................................*/
	
	$(document).on('click','#scrollToTop',function(){
	$('html,body').animate({scrollTop:0},1500);
	});
		
	$(document).on('scroll', function(e){
		var scrollPos = $(this).scrollTop();
		if(scrollPos < 100){
			$('#scrollToTop').addClass('hide');
		}else{
			$('#scrollToTop').removeClass('hide');
		}
	});

	$('.main_menu').on('click','li',function(){
		$('.main_menu li.active').removeClass('active');
		$(this).addClass('active');		
	});

	$('ul#navigation').slicknav({
		prependTo:'.responsive-menu-wrap'
	});

})(jQuery);