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
		$('.aaa').css({'display':'block'});;
		$('.up').css({'display':'block'});
		$('.down').css({'display':'none'});
	});
	$('.up').click(function(){
		$('.aaa').css({'display':'none'});;
		$('.up').css({'display':'none'});
		$('.down').css({'display':'block'});
	});
});