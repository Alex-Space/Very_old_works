$(document).ready(function() {
	
	// Menu collapse
	$('.btn-toggle-collapse').click(function() {
		var menu_status = $('.header-top__nav').css('display');
		if (menu_status == 'none') {
			$('.header-top__nav').slideDown(300);
		} else if (menu_status == 'block') {
			$('.header-top__nav').slideUp(300);
		}
	});

	// Clients gallery

	$('.photo-01').click(function() {
		$('.client-01').css({'display':"block"});
		$(this).addClass("photo-active");
		$('.client-02, .client-03, .client-04, .client-05').css({'display':"none"});
		$('.photo-02, .photo-03, .photo-04, .photo-05').removeClass('photo-active');
	});
	$('.photo-02').click(function() {
		$('.client-02').css({'display':"block"});
		$(this).addClass('photo-active');
		$('.client-01, .client-03, .client-04, .client-05').css({'display':"none"});
		$('.photo-01, .photo-03, .photo-04, .photo-05').removeClass('photo-active');

	});
	$('.photo-03').click(function() {
		$('.client-03').css({'display':"block"});
		$(this).addClass('photo-active');
		$('.client-01, .client-02, .client-04, .client-05').css({'display':"none"});
		$('.photo-01, .photo-02, .photo-04, .photo-05').removeClass('photo-active');

	});
	$('.photo-04').click(function() {
		$('.client-04').css({'display':"block"});
		$(this).addClass('photo-active');
		$('.client-01, .client-03, .client-02, .client-05').css({'display':"none"});
		$('.photo-01, .photo-03, .photo-02, .photo-05').removeClass('photo-active');

	});
	$('.photo-05').click(function() {
		$('.client-05').css({'display':"block"});
		$(this).addClass('photo-active');
		$('.client-01, .client-03, .client-04, .client-02').css({'display':"none"});
		$('.photo-01, .photo-03, .photo-04, .photo-02').removeClass('photo-active');

	});


});