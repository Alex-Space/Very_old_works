$(function(){
	$('.drop-button').toggle(function(){
		$('.header_menu').animate({
			'height':'73px',
		});
		$('#miss').removeClass('pt40');
	}, function(){
		$('.header_menu').animate({
			'height':'0px'
		});
		$('#miss').addClass('pt40');
    
	});

	if ($(window).width() > 980) {

    	$('#miss').removeClass('pt40');
    }
	
	$('.str1').mouseover(function(){
		$(this).css({'backgroundPosition':'0 100%'});
	});
	$('.str1').mouseout(function(){
		$(this).css({'backgroundPosition':'0 0%'});
	});

	$('.str2').mouseover(function(){
		$('.str1').css({'backgroundPosition':'0 100%'});
		$(this).css({'backgroundPosition':'0 100%'});
	});
	$('.str2').mouseout(function(){
		$('.str1').css({'backgroundPosition':'0 0%'});
		$(this).css({'backgroundPosition':'0 0%'});
	});

	$('.str3').mouseover(function(){
		$('.str1').css({'backgroundPosition':'0 100%'});
		$('.str2').css({'backgroundPosition':'0 100%'});
		$(this).css({'backgroundPosition':'0 100%'});
	});
	$('.str3').mouseout(function(){
		$('.str1').css({'backgroundPosition':'0 0%'});
		$('.str2').css({'backgroundPosition':'0 0%'});
		$(this).css({'backgroundPosition':'0 0%'});
	});

	$('.str4').mouseover(function(){
		$('.str1').css({'backgroundPosition':'0 100%'});
		$('.str2').css({'backgroundPosition':'0 100%'});
		$('.str3').css({'backgroundPosition':'0 100%'});
		$(this).css({'backgroundPosition':'0 100%'});
	});
	$('.str4').mouseout(function(){
		$('.str1').css({'backgroundPosition':'0 0%'});
		$('.str2').css({'backgroundPosition':'0 0%'});
		$('.str3').css({'backgroundPosition':'0 0%'});
		$(this).css({'backgroundPosition':'0 0%'});
	});

	$('.str5').mouseover(function(){
		$('.str1').css({'backgroundPosition':'0 100%'});
		$('.str2').css({'backgroundPosition':'0 100%'});
		$('.str3').css({'backgroundPosition':'0 100%'});
		$('.str4').css({'backgroundPosition':'0 100%'});
		$(this).css({'backgroundPosition':'0 100%'});
	});
	$('.str5').mouseout(function(){
		$('.str1').css({'backgroundPosition':'0 0%'});
		$('.str2').css({'backgroundPosition':'0 0%'});
		$('.str3').css({'backgroundPosition':'0 0%'});
		$('.str4').css({'backgroundPosition':'0 0%'});
		$(this).css({'backgroundPosition':'0 0%'});
	});

	// smalls stars 

	$('.ss1').mouseover(function(){
		$(this).css({'backgroundPosition':'0 100%'});
	});
	$('.ss1').mouseout(function(){
		$(this).css({'backgroundPosition':'0 0%'});
	});

	$('.ss2').mouseover(function(){
		$('.ss1').css({'backgroundPosition':'0 100%'});
		$(this).css({'backgroundPosition':'0 100%'});
	});
	$('.ss2').mouseout(function(){
		$('.ss1').css({'backgroundPosition':'0 0%'});
		$(this).css({'backgroundPosition':'0 0%'});
	});

	$('.ss3').mouseover(function(){
		$('.ss1').css({'backgroundPosition':'0 100%'});
		$('.ss2').css({'backgroundPosition':'0 100%'});
		$(this).css({'backgroundPosition':'0 100%'});
	});
	$('.ss3').mouseout(function(){
		$('.ss1').css({'backgroundPosition':'0 0%'});
		$('.ss2').css({'backgroundPosition':'0 0%'});
		$(this).css({'backgroundPosition':'0 0%'});
	});

	$('.ss4').mouseover(function(){
		$('.ss1').css({'backgroundPosition':'0 100%'});
		$('.ss2').css({'backgroundPosition':'0 100%'});
		$('.ss3').css({'backgroundPosition':'0 100%'});
		$(this).css({'backgroundPosition':'0 100%'});
	});
	$('.ss4').mouseout(function(){
		$('.ss1').css({'backgroundPosition':'0 0%'});
		$('.ss2').css({'backgroundPosition':'0 0%'});
		$('.ss3').css({'backgroundPosition':'0 0%'});
		$(this).css({'backgroundPosition':'0 0%'});
	});

	$('.ss5').mouseover(function(){
		$('.ss1').css({'backgroundPosition':'0 100%'});
		$('.ss2').css({'backgroundPosition':'0 100%'});
		$('.ss3').css({'backgroundPosition':'0 100%'});
		$('.ss4').css({'backgroundPosition':'0 100%'});
		$(this).css({'backgroundPosition':'0 100%'});
	});
	$('.ss5').mouseout(function(){
		$('.ss1').css({'backgroundPosition':'0 0%'});
		$('.ss2').css({'backgroundPosition':'0 0%'});
		$('.ss3').css({'backgroundPosition':'0 0%'});
		$('.ss4').css({'backgroundPosition':'0 0%'});
		$(this).css({'backgroundPosition':'0 0%'});
	});

});
jQuery(window).load(function(){
	$(".photoslider-mini").sliderkit({
		auto:false,
		panelbtnshover:true,
		panelfx:"sliding",
		panelfxspeed:1000,
		circular:true
	});
});