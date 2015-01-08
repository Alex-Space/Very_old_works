$(function(){
	

	$('.btn-drop').click(function(){
		$('.menu').slideToggle(500);
	});
	//carousel
	$('#foo2').carouFredSel({
		height: 'auto',
		prev: '#prev2',
		next: '#next2',
		pagination: "#pager2",
		auto: false
	});
	$('#foo3').carouFredSel({
		height: 'auto',
		prev: '#prev3',
		next: '#next3',
		auto: false
	});

});

jQuery(window).load(function(){
	$(".photoslider-mini").sliderkit({
		auto:false,
		panelbtnshover:false,
		panelfxspeed:1000,
		circular:true,
		scroll: 1,
		width: 200
	});
});