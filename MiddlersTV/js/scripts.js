$(function(){
	
	$('.bxslider').bxSlider({
		mode: 'vertical',
		pause: '30000'
	});
	$('.bxslider2').bxSlider({
		mode: 'vertical',
		pause: '35000'
	});
	$('.bxslider3').bxSlider({
		mode: 'horizontal',
		pause: '45000'
	});
	$('.bxslider4').bxSlider({
		mode: 'horizontal',
		pause: '30000'
	});
	$('.bxslider5').bxSlider({
		mode: 'horizontal',
		pause: '45000'
	});
	$('.bxslider6').bxSlider({
		mode: 'horizontal',
		pause: '30000'
	});
	$('.bxslider7').bxSlider({
		mode: 'horizontal',
		pause: '30000',
		pager: true,
		pagerType: 'full',

	});

	// $('.covervid-video').coverVid(1920, 1080);
	$(window).load(function() {    
 
        var theWindow        = $(window),
            $bg              = $("#bg"),
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
	$("a.example6").fancybox({
		'titlePosition'		: 'outside',
		'overlayColor'		: '#000',
		'overlayOpacity'	: 0.9
	});
	$('.back-page').click(function(){
		history.back();
	});
	$(".menu-button-hider").click(function(){
		var a = $('.menu-fix-1275').css('display');
		if (a == 'block') {
			$('.menu-fix-1275').slideUp(500);
		} else {
			$('.menu-fix-1275').slideDown(500);
		}

		
	});
	
	// Hide pager if no posts
	var pagerLength = $(".pager").children().length;
    if (pagerLength > 0){
    	$(".pager").css('display','block');
    } else if (pagerLength == 0) {
    	$(".pager").css('display','none');
    }
    
    $('.articles-title .arrow-button-down').click(function() {
    	var a = $(this).parent().siblings('.articles').css('display');
    	if (a == 'none') {
    		$(this).parent().siblings('.articles').slideDown(400);
    		a == 'block';
    	} else if (a == 'block') {
    		$(this).parent().siblings('.articles').slideUp(400);
    		a == 'none';
    	}
    });
    $('.prev-def, .menu-item-has-children > a').click(function(e){
    	e.preventDefault();
    });
    $('.bbp-reply-to-link').click(function(e){
    	e.preventDefault();
    	var a = $(this).parent().parent().parent().next();
    	var b = $(a[0]).find(".bbp-author-name").text();
    	
    	var bContent = $('.bbp-the-content');
    	bContent.focus();
    	bContent.val(bContent.val() + '<strong>' + b +', '+ '</strong>');
 
    	
    });

    $('h3, p, h2, h1, span').each(function(){
        if( $(this).text().length < 1 && 
            $(this).children('a').length < 1 && 
            $(this).children('iframe').length < 1 &&
            $(this).children('input').length < 1 &&
            $(this).children('img').length < 1 &&
            $(this).children('textarea').length < 1) {
            $(this).css({'display':'none'});
        }
    });
    $('.profile-fields .data p a').click(function(e){
    	e.preventDefault();
    });
    
    // Do right bg active tab in personal page
    if ( $('#item-body').height() < 44 ) {
    	$('#buddypress div.item-list-tabs ul li.current a, #buddypress div.item-list-tabs ul li.selected a').css({'background':"rgba(236, 227, 227, 0.7)"});
    }
    $('.spoiler-tgl').parent('p').css({'background': 'none repeat scroll 0% 0% rgba(0, 0, 0, 0.7)'});
    // add icons awesome
    $('#recent-posts-2 h2').prepend('<i class="fa fa-file-text"></i>');
    $('#recentcomments h2').prepend('<i class="fa fa-comments-o"></i>');
    $('#polls-widget-2 h2').prepend('<i class="fa fa-bars"></i>');
    $('.relatedposts h2').prepend('<i class="fa fa-binoculars"></i>');
    $('.last-games-list').prepend('<i class="fa fa-gamepad"></i>');




});