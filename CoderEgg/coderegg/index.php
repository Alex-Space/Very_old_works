<?php get_header(); ?>
	<div class="content main-page">
		<div class="big-notes-box">
			<div class="cat-box cat-box1">
				<h3>HTML</h3>
				<p>
					HTML, HAML, Jade, BEML, Slim ...
				</p>
				
				<a href="<?php echo get_category_link(20); ?>">
					<img class="list-icon" src="<?php bloginfo('template_url'); ?>/images/html-css.png" alt="">
				</a>
			</div>
			<div class="cat-box cat-box2">
				<h3>CSS</h3>
				<p>
					CSS, Less, Sass, SCSS, Stylus ...
				</p>
				
				<a href="<?php echo get_category_link(21); ?>">
					<img class="list-icon" src="<?php bloginfo('template_url'); ?>/images/css.png" alt="">
				</a>
			</div>
			<div class="cat-box cat-box3">
				<h3>JavaScript</h3>
				<p>
					JS, CoffeeScript, jQuery, Angular.js ...
				</p>
				
				<a href="<?php echo get_category_link(19); ?>">
					<img class="list-icon" src="<?php bloginfo('template_url'); ?>/images/js.png" alt="">
				</a>
			</div>
			<div class="cat-box cat-box4">
				<h3>PHP</h3>
				<p>
					PHP, Yii, Zend, Laravel, MySQL ...
				</p>
				
				<a href="<?php echo get_category_link(4); ?>">
					<img class="list-icon" src="<?php bloginfo('template_url'); ?>/images/php.png" alt="">
				</a>
			</div>
			<img src="<?php bloginfo('template_url'); ?>/images/2unwr3c.jpg" id="bg" alt="">
		</div>
		<ul class="bxslider quotes-slider">
		  <li>
			  <p>
			  	Я всегда мечтал о том, чтобы моим компьютером можно было пользоваться так же легко, как телефоном; моя мечта сбылась: я уже не могу разобраться, как пользоваться моим телефоном.
				<span class="quote-author">Bjarne Stroustrup</span>
			  </p>
		  </li>
		  <li>
			  <p>
			  	Не волнуйтесь, если что-то не работает. Если бы всё работало, вас бы уволили. <span class="quote-author">Mosher’s Law of Software Engineering</span>
			  </p>
		  </li>
		  <li>
			  <p>
			  	Когда кто-то говорит: «Я хочу язык программирования, который может делать все, что ему скажу», то я даю этому человеку леденец.
				<span class="quote-author">Alan J. Perlis</span>
			  </p>
		  </li>
		</ul>
		<a href="<?php echo get_category_link(4); ?>" class="blog-main-title">PHP</a>
		<div class="php-box">
			
			<?php 
				
				$query = new WP_Query( array( 'category_name'=>'php', 'posts_per_page'=>'3'  ) );
				while ( $query->have_posts() ) { 
					$query->the_post();
					
					 ?>
					<div class="articles home-page-article">
						<div class="articles-title">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<span class="articles-date">
								<i class="author-icon"></i><span class="author"><?php the_author(); ?></span>
								<span class="time-box"><?php the_time('j.m.y') ?></span>
							</span>
						</div>
						<div class="clear"></div>
						<div class="articles-head">
							<?php echo content(40); ?> 
						</div>
						<div class="comments-more">
							<span class="articles-comments">
							<?php comments_popup_link(); ?>
							</span>
							<a href="<?php the_permalink(); ?>" class="more">Подробнее</a>
						</div>
					</div>
			<?php } ?>
			<img src="<?php bloginfo('template_url'); ?>/images/02.jpg" id="php-bg" alt="">
		</div>
		<a href="<?php echo get_category_link(19); ?>" class="blog-main-title">JavaScript</a>
		<div class="js-box">
			
			<?php 
				
				$query = new WP_Query( array( 'category_name'=>'js', 'posts_per_page'=>'3'  ) );
				while ( $query->have_posts() ) { 
					$query->the_post();
					
					 ?>
					<div class="articles home-page-article">
						<div class="articles-title">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<span class="articles-date">
								<i class="author-icon"></i><span class="author"><?php the_author(); ?></span>
								<span class="time-box"><?php the_time('j.m.y') ?></span>
							</span>
						</div>
						<div class="clear"></div>
						<div class="articles-head">
							<?php the_excerpt('new_excerpt_length', 10); ?> 
						</div>
						<div class="comments-more">
							<span class="articles-comments">
							<?php comments_popup_link(); ?>
							</span>
							<a href="<?php the_permalink(); ?>" class="more">Подробнее</a>
						</div>
					</div>
			<?php } ?>
			<img src="<?php bloginfo('template_url'); ?>/images/js-bg.jpg" id="js-bg" alt="">
		</div>
		<a href="<?php echo get_category_link(20); ?>" class="blog-main-title">HTML</a>
		<div class="html-box">
			
			<?php 
				
				$query = new WP_Query( array( 'category_name'=>'html', 'posts_per_page'=>'3'  ) );
				while ( $query->have_posts() ) { 
					$query->the_post();
					
					 ?>
					<div class="articles home-page-article">
						<div class="articles-title">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<span class="articles-date">
								<i class="author-icon"></i><span class="author"><?php the_author(); ?></span>
								<span class="time-box"><?php the_time('j.m.y') ?></span>
							</span>
						</div>
						<div class="clear"></div>
						<div class="articles-head">
							<?php the_excerpt('new_excerpt_length', 10); ?> 
						</div>
						<div class="comments-more">
							<span class="articles-comments">
							<?php comments_popup_link(); ?>
							</span>
							<a href="<?php the_permalink(); ?>" class="more">Подробнее</a>
						</div>
					</div>
			<?php } ?>
			<img src="<?php bloginfo('template_url'); ?>/images/03.jpg" id="html-bg" alt="">
		</div>
		<a href="<?php echo get_category_link(21); ?>" class="blog-main-title">CSS</a>
		<div class="css-box">
			
			<?php 
				
				$query = new WP_Query( array( 'category_name'=>'css', 'posts_per_page'=>'3'  ) );
				while ( $query->have_posts() ) { 
					$query->the_post();
					
					 ?>
					<div class="articles home-page-article">
						<div class="articles-title">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<span class="articles-date">
								<i class="author-icon"></i><span class="author"><?php the_author(); ?></span>
								<span class="time-box"><?php the_time('j.m.y') ?></span>
							</span>
						</div>
						<div class="clear"></div>
						<div class="articles-head">
							<?php the_excerpt('new_excerpt_length', 10); ?> 
						</div>
						<div class="comments-more">
							<span class="articles-comments">
							<?php comments_popup_link(); ?>
							</span>
							<a href="<?php the_permalink(); ?>" class="more">Подробнее</a>
						</div>
					</div>
			<?php } ?>
			<div class="tag-cloud-box">
				<?php wp_tag_cloud(); ?>
			</div>
			<img src="<?php bloginfo('template_url'); ?>/images/04.jpg" id="css-bg" alt="">
		</div>
<?php get_footer(); ?>