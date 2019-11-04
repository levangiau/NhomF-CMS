$(document).ready(function(){
	$(window).scroll(function(event){
		var scroll = $(document).scrollTop();
		if(scroll >= $('.scroll').height()){
			$('.scroll').addClass('hh');
		}
		else{
			$('.scroll').removeClass('hh');
		}
	});
	$('.down').click(function(){
		$('.dropdown-menu').addClass('a4');
		$('.up').css({'display':'block'});
		$('.down').css({'display':'none'});
	});
	$('.up').click(function(){
		$('.dropdown-menu').removeClass('a4');
		$('.up').css({'display':'none'});
		$('.down').css({'display':'block'});
	});
	//bo class
	$('.dropdown').hover(function(){
		$(this).removeClass('open');

		$('.dropdown-menu').css({'display':'none'});
		//$(this).removeClass('dropdown');
		//$(this).removeClass('show-hover');

	});
	$('.dropdown').mouseover(function(){
		$('.dropdown').hover(function(){
			$('.aaa').css({'display':'block !important','visibility':'visible','opacity':1});
		});
	});

});