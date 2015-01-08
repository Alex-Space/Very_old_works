$(document).ready(function(){
	$('.dropdown').toggle(function(){
		$('.nav-bar').fadeOut(500);
	}, function(){
		$('.nav-bar').show(500);
	});
	$('.drop-parent').toggle(function(){
		$('.drop-child').css({'display':'block'}).fadeTo(500);
		$(this).addClass('active-tab');
	}, function(){
		$('.drop-child').fadeOut(200);
		$(this).removeClass('active-tab');
	});

	
   $("#up-down-par").css("z-index","10000");
   $("#up-down").css("z-index","1000000");
   $("#maker").css("z-index","11");
   $("#myExample").css("z-index","8");

	$('input, select').styler();  

  $(window).load(function () {
    $('.boxsize').liBlockSize({
      type: 'max', //Тип выравнивания [max/min]
      side: 'h', //Сторона выравнивания [h(высота)/w(ширина)/wh]
      child: '.post-box' //Эл-т, который выравниваем [child: '.selector']
    });
  })


});