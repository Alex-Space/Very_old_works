<?php get_header(); ?>


<!--slideshow-->


	<div id="slide-container"> <?php if(function_exists('wp_content_slider')) { wp_content_slider(); } ?> </div>
	

<!--slideshow end-->

<div class="clear"></div>

		<!--boxes-->
		
	<div id="box-container">
		<div class="aboutsite">
				<h1>О блоге:</h1>
				<p>Меня зовут Алекс Спэйс и я истинно рад приветствовать Вас на своем блоге ментального самосовершенствования! Здесь Вы найдете информацию, главным образом - по прокачке ментала и развитию осознанных сновидений. Так же, я уделяю внимание областям: личностного и духовного роста, различным типам питания. На блоге проводятся свободные исследования мира снов, в которых Вы можете принять участие. Глубоко и всецело надеюсь, что информация на моем блоге сможет помочь Вам в ваших вопросах исканиях!</p>
				</div>
<span class="subscribeform"><h2>Подписаться:</h2><form style="border:1px solid #ebebeb;padding:3px;text-align:center;" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=blogspacedust', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p>Ваш email адрес:</p><p><input type="text" style="width:140px" name="email"/></p><input type="hidden" value="blogspacedust" name="uri"/><input type="hidden" name="loc" value="ru_RU"/><input class="buttonsub" type="submit" value="Оформить подписку" /></form></span>
<div class="clear"></div>
		<?php for ($i = 1; $i <= 2; $i++) { ?>
				
				<div class="boxes">
				
					<div class="box-head">
						
						<span class="box-icon"><img src="<?php if(of_get_option('box_image'.$i) != NULL){ echo of_get_option('box_image'.$i);} else echo get_template_directory_uri() . '/images/ic'.$i.'.png' ?>" alt="" /></span>
						
					
					</div> <!--box-head close-->
					
					<div class="title-box"><?php if(of_get_option('box_head' . $i) != NULL){ echo of_get_option('box_head' . $i);} else echo "Box heading" ?></div><!--title-box close-->
					
					<div class="box-content">

				<?php if(of_get_option('box_text' . $i) != NULL){ echo of_get_option('box_text' . $i);} else echo "Nullam posuere felis a lacus tempor eget dignissim arcu adipiscing. Donec est est, rutrum vitae bibendum vel, suscipit non metus. Nullam posuere felis a lacus tempor eget dignissim arcu adipiscing." ?>
					
					</div> <!--box-content close-->
					
				<span class="read-more"><a href="<?php echo of_get_option('box_link'.$i); ?>">Подробнее...</a></span>	
				
				</div><!--boxes  end-->
				
		<?php } ?>
	</div> 	<!--box container end-->

	
</div>
<!--wrapper end-->

<?php get_footer(); ?>