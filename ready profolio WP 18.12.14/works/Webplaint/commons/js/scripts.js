$(function(){
	
	// drop nav
	$('.drop-btn').click(function(){
		$('.nav').slideToggle(500);
	});
	
	// gallery

	$('.menu li a').click(function(e) {
					
					e.preventDefault();
					$('.menu li').removeClass('selected');
					$(this).parent('li').addClass('selected');
					
					thisItem 	= $(this).attr('rel');
					
					if(thisItem != "all") {
					
						$('.item li[rel='+thisItem+']').stop()
																.animate({'width' : '270px', 
																			 'opacity' : 1, 
																			 'marginRight' : '.5em', 
																			 'marginLeft' : '.5em'
																			});
																			
						$('.item li[rel!='+thisItem+']').stop()
																.animate({'width' : 0, 
																			 'opacity' : 0,
																			 'marginRight' : 0, 
																			 'marginLeft' : 0
																			});
					} else {
						
						$('.item li').stop()
										.animate({'opacity' : 1, 
													 'width' : '270px', 
													 'marginRight' : '.5em', 
													 'marginLeft' : '.5em'
													});
					}
				})
				
				$('.item li img').animate({'opacity' : 0.5}).hover(function() {
					$(this).animate({'opacity' : 1});
				}, function() {
					$(this).animate({'opacity' : 0.5});
				});

});