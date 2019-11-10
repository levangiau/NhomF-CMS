
$(document).ready(function(){
	var swiper = new Swiper('.swiper-container', {
		slidesPerView: 4,
		spaceBetween: 30,
		breakpoints: {
        500: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        800: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        
        1100: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
      }
	});
	//click show img
	$('i').click(function(){
		$('.show_img').fadeIn({'display': 'block'});

	});
	  $('.remove').click(function(){
	  	$('.show_img').fadeOut('slow');
  });

});