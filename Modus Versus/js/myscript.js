$(function(){

	$(".main-item").toggle(function(){
		$('.port-hide').slideDown(300).css({'display':'block'});
		$(this).addClass('bg');
		 }, 
	 	function(){
		 	$('.port-hide').slideUp(300);
		 	$(this).removeClass('bg');
	 });

	$('.btn-drop').click(function(){
		$('.menu-top').slideToggle(200);
	});

}); // end of the ready