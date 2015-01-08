<?php get_header(); ?>

	<!------------- 
		Features area
	-------------->

	<div class="features-block rel">
		<div class="ribbon1" id="us"></div>
		<div class="container">
			<div class="suggest rel">
			<ul>
				<li>Дизайн и верстка: сайты-визитки, лэндинги, корпоративные сайты, блоги, интернет-магазины, индивидуальные решения.</li>
				<li>Контент-менеджмент: наполнение и обслуживание сайтов, любая обработка изображений, файлов и т.д. на профессиональном уровне.</li>
				<h1 class="features-in-ul">Особенности</h1>
				<li>Адаптивная или фиксированная верстка идентичная макетам.</li>
				<li>Валидный семантический код по стандартам W3C, минимум лишнего.</li>
				<li>Никаких визуальных редакторов, весь код пишу сам, с нуля, и все комментирую.</li>
				<li>Кроссбраузерность (IE 8+, Opera 9+, FireFox 2+, Safari 4+, Chrome).</li>
				<li>Создание динамичности на сайтах при помощи CSS3, javascript (jQuery).</li>
				<li>Внутренняя оптимизация для поисковых систем.</li>
			</ul>
		</div>
		</div>
		<div class="stones">
			<div class="container rel">
				<img class="medal-l" src="<?php bloginfo('template_url'); ?>/img/medal.png" alt="">
				<img class="medal-r" src="<?php bloginfo('template_url'); ?>/img/medal.png" alt="">
				<h2 class="deviz">

					Делаю все качественно, в установленный срок.</h2> 
				<h2 class="deviz2">
					После меня остается наслаждаться результатом!
				</h2>
			
			</div>
			
		</div>
	</div>
	
	<!------------- 
		Features area ends
	-------------->
	
	
	<!------------- 
		Magma area 
	-------------->
	<div class="magma-box rel">
		<div class="magma1"></div>
		<div class="magma2"></div>
		<div class="magma3"></div>
	</div>
	<div class="portfolio rel">
		<div class="container mt200">
			<div class="ribbon2 rel" id="port"></div>
			
			<div id="main" class="overflow"> <!-- Start of portfolio -->
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="block">
						<a href="<?php the_field('screen1'); ?>" class="pirobox_gall">
							<div class="zoom box-img">
								<img src="<?php the_field('thumb-img1'); ?>" />
								<span class="site-name"><?php the_field('name1'); ?></span>
								<div class="podlozhka"></div>
							</div>
						</a>
						<a href="<?php the_field('link1'); ?>" class="b-sprite"></a>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>
       		 </div> <!-- End of portfolio -->
		</div>
	</div>
	<!------------- 
		Magma ends 
	-------------->
	
	<!------------- 
		About area 
	-------------->
	<div class="rel">
		<div class="stalogmits"></div>
		<div class="about rel">
			<div class="container pt20">
				<div class="ribbon3" id="about-my-self"></div>
				<img class="my-photo" src="<?php bloginfo('template_url'); ?>/img/face.jpg">
				<p class="intro-text rel"><span class="d">Д</span>оброго времени суток, уважаемый посетитель! <span class="d">М</span>еня зовут Александр и живу я в городе <span class="d">О</span>мске. <span class="d">W</span>eb-версткой занимаюсь около трех лет и на данный момент мной сверстано уже много сайтов различной сложности. <span class="d">О</span>днако я не останавливаюсь, каждый день узнаю что-нибудь новое и стремлюсь стать первоклассным специалистом этой области. <span class="d">М</span>не по-настоящему нравится это занятие и я получаю от него удовольствие! <span class="d">А</span> еще большее удовольствие я получаю от качественно сделанной работы. <span class="d">П</span>о убеждениям я перфекционист, поэтому стараюсь довести до ума каждую мелочь. <span class="d">И</span>мея со мной дело, <span class="d">В</span>ы можете быть уверены в моей отзывчивости к <span class="d">В</span>ам, ответственности к <span class="d">В</span>ашему проекту и превосходном результате выполнения технического задания. <span class="d">С</span>мело обращайтесь, сегодня отличный день для <span class="d">Н</span>ашего с <span class="d">В</span>ами сотрудничества!</p>
			</div>
		</div>
	</div>
	<!------------- 
		About area ends
	-------------->
	<?php get_footer(); ?>