$(document).ready(function() {
	$("ul#nav li a").addClass("js");
	$("ul#nav li a").hover(
      function () {
        $(this).stop(true,true).animate({backgroundPosition:"(0 0)"}, 200);
        $(this).animate({backgroundPosition:"(0 -5px)"}, 150);
      }, 
      function () {
        $(this).animate({backgroundPosition:"(0 -149px)"}, 200);

      }
    );
      
      $('.header2').pan({fps: 30, dir: 'right'});
      $('.header3').pan({fps: 20, dir: 'right'});
      $('.magma2').pan({fps: 20, dir: 'right'});

      // zoom portfolio

      
      $('.box-img').css({
                'backgroungColor': '#347469'
        });

      // other effects

      $( ".box-img" ).hover(
        function() {
          $(this).children('span').addClass("opaci");
          $(this).children('div').animate({opacity: '0.7'}, 200);
        }, function() {
          $(this).children('span').removeClass("opaci");
          $(this).children('div').animate({opacity: '0'}, 200);;
        }
      );
      
      // menu drop

      $('.drop-button').click(function(){
        $('.dropdown').slideToggle(500);
      });

});
