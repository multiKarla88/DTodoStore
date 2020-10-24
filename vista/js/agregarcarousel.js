$('#carousel-home .item').addClass('item-background');
  
  $('.home_slider').owlCarousel({
    items:1,
    
		loop:true,
		dots: false,
		margin:0,
		nav:true,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause:true,
		navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"]
	})