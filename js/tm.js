/**
 * The Custom JavaScript template file.
 *
 *
 * @package ThemeMaple
 */

jQuery(document).ready(function($) {

	"use strict";
	
	// Search
	
	$('#top-search a').on('click', function ( e ) {
		e.preventDefault();
    	$('.show-search').slideToggle('fast');
    });
	
	// Scroll to top
	
	$('.to-top').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
	// Bxslider
	
	$('.bxslider').bxSlider({
	  adaptiveHeight: true,
	  mode: 'fade',
	  pager: false,
	  captions: true
	});
	
	// Fitvids
	$(document).ready(function(){
		// Target your .container, .wrapper, .post, etc.
		$(".container").fitVids();
	});
	
	// Menu
	$('.menu').slicknav({
		prependTo:'.menu-mobile',
		label:''
	});
	
	// slider
	 $("#owl-demo").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      // singleItem:false
 
      // "singleItem:true" is a shortcut for:
      items : 3, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });

	
	
});