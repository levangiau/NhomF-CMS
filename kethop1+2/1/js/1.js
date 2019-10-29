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
});