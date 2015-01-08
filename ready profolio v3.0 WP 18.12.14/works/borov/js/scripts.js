$(document).ready(function(){
	$('.drop-arrow').toggle(function(){
		$('.grey-box').slideUp(300);
	}, function(){
		$('.grey-box').slideDown(300);
	});
});