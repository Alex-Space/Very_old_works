$(function(){
	$('.drop-btn').click(function(){
		$('.nav').slideToggle(200);
	});
	$(function() {

			$('select').selectbox();

			$('#add').click(function(e) {
				$(this).parents('div.section').append('<br /><br /><select><option>-- Выберите --</option><option>Пункт 1</option><option>Пункт 2</option><option>Пункт 3</option><option>Пункт 4</option><option>Пункт 5</option></select>');
				$('select').selectbox();
				e.preventDefault();
			})

			$('#add2').click(function(e) {
				var options = '';
				for (i = 1; i <= 5; i++) {
					options += '<option>Option ' + i + '</option>';
				}
				$(this).parents('div.section').find('select').each(function() {
					$(this).append(options);
				})
				$('select').trigger('refresh');
				e.preventDefault();
			})

			$('#che').click(function(e) {
				$(this).parents('div.section').find('option:nth-child(5)').attr('selected', true);
				$('select').trigger('refresh');
				e.preventDefault();
			})

		})
});
jQuery(window).load(function(){ //jQuery(window).load() must be used instead of jQuery(document).ready() because of Webkit compatibility				

				// Slideshow > Standard
				jQuery(".slideshow-standard").sliderkit({
					autospeed:3000,
					circular:true,
					fastchange:false
				});
				
				// Slideshow > Carousel
				jQuery(".slideshow-carousel").sliderkit({
					shownavitems:4,
					autospeed:3000,
					mousewheel:true,
					circular:true
				});
				
				// Use the API methods to make a custom slideshow button
				var mySliderkit = $(".slideshow-carousel").data('sliderkit');
				$("#slideshow-apibtn").toggle(
					function(){
						mySliderkit.playBtnPause();return false;
					},
					function(){
						mySliderkit.playBtnStart();return false;
					}
				);
				
			});