
$(document).ready(function(){
	var swiper = new Swiper('.swiper-container', {
		slidesPerView: 4,
		spaceBetween: 30,
	});
	//click show img
	$('i').click(function(){
		$('.show_img').fadeIn({'display': 'block'});

	});
	  $('.remove').click(function(){
	  	$('.show_img').fadeOut('slow');
  });

});