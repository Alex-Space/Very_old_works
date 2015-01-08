$(document).ready(function(){
	$('.tab').click(function(e){
		e.preventDefault();
		$('.tab').removeClass('tab-active');
		$(this).addClass('tab-active');
	});
	$('.tab-first').click(function(){
		$('.tab2').animate({'opacity':'0', 'display': 'none'});
		$('.features-area').animate({'opacity':'1', 'display': 'block'});
	});
	$('.tab-second').click(function(){
		$('.tab2').animate({'opacity':'1'});
		$('.features-area').animate({'opacity':'0', 'display': 'none'});
	});
});