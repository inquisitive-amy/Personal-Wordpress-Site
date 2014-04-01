$(document).ready(function(){

	$(function() {
		// document ready
		$('.home li.menu-item a').smoothScroll({
			offset: -100,
		});
	});//smooth scroll ends

	//dropdown nav menu
	$('a.dropDown').on('click', function(e){
		e.preventDefault();
		$('.header .menu').slideToggle('slow','swing');

		$('.header ul.menu a').on('click', function(){
			$('.header .menu').slideUp();
		});
	});//end open nav drop down

//flexslider gallery on portfolio page
	$(window).load(function() {
	  $('.flexslider').flexslider({
	  	animation:"slide",
	  	slideshow: false,
	  	touch: true,
	  	keyboard: true,
	  	useCSS: true	  
	  });
	});

});//end document ready


var App = {};
	App.cache = {};

	App.init = function() {
		$('html').removeClass('no-js');
	}

$(function(){
	App.init(); 
});



$(window).load(function(){

//masonry on portfolio archive page
	var container = document.querySelector('.mainContent');
		var msnry = new Masonry( container, {
		  itemSelector: '.portfolioPosts',
	});
});