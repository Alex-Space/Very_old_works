$(document).ready(function(){
  
  $('.bxslider').bxSlider({
	  mode: 'vertical',
	  pause: '30000',
	  pager: false
  });
	
	// jump button

	$('.list-icon').mouseover(function(){
		$(this).animate({marginTop: '10px'}, 200).animate({marginTop: '0px'}, 200).animate({marginTop: '7px'}, 200).animate({marginTop: '0px'}, 200).animate({marginTop: '3px'}, 200).animate({marginTop: '0px'}, 200);
	});
	
	$('.drop-btn').click(function() {
    	var a = $('.menu').css('display');
    	if (a == 'none') {
    		$('.menu').slideDown(400);
    		a == 'block';
    	} else if (a == 'block') {
    		$('.menu').slideUp(400);
    		a == 'none';
    	}
    });
	// to TOP
    $(window).scroll(function(){
        if ($(this).scrollTop() > 500) {
            $('.to-top').fadeIn();
        } else {
            $('.to-top').fadeOut();
        }
    });
    
    //Click event to scroll to top
    $('.to-top').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
    // display:none empty <p>
        $('.articles-head p').each(function(){
            if( $(this).text().length < 1 ) {
                $(this).css({'display':'none'});
            }
        });
    
    
});

// resize background
$(window).load(function() {  
 
        var theWindow        = $(window),
            $bg              = $("#bg, #php-bg, #js-bg, #html-bg, #css-bg"),
            aspectRatio      = $bg.width() / $bg.height();
 
        function resizeBg() {
 
                if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
                    $bg
                        .removeClass()
                        .addClass('bgheight');
                } else {
                    $bg
                        .removeClass()
                        .addClass('bgwidth');
                }
 
        }
 
        theWindow.resize(function() {
                resizeBg();
        }).trigger("resize");
});  