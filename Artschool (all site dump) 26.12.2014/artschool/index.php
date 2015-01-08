<?php get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
		<?php navigation_left (); ?>
		<div class="general-area">
			
				<div class="general-intro">
					<img class="intro-img" src="<?php bloginfo('template_url'); ?>/images/na-glavnyu-ctranitsy.gif" alt="">
					<p>       
						Детская художественная школа № 1, расположенная в живописном месте, на набережной Иртыша, – одна из крупнейших в Омске. <br> <br>
					    ДХШ № 1 является образовательным учреждением дополнительного образования детей, реализует программы в области художественного и эстетического образования, созданные для целенаправленного обучения детей и подростков различным видам искусства. Здесь проводятся занятия по рисунку, живописи, композиции, декоративно-прикладному искусству, скульптуре,теориии и истории искусства. <br> <br> 
					    Школа обеспечивает высокий уровень подготовки детей, что подтверждается дипломами международных и всероссийских конкурсов. 
					</p>
					<img class="intro-logo" src="http://www.artschool1omsk.ru/images/intro-logo.png" alt="">
				</div>
			


			<div class="news-block content" id="content_1">
				<div class="arch-news"><a href="http://www.artschool1omsk.ru/?page_id=22"><img src="http://www.artschool1omsk.ru/images/archive.png" alt="">Архив новостей</a></div>
				<h2 class="news-p">НОВОСТИ</h2>
				<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			

		<?php else : ?>
			
			<article id="post-0" class="post no-results not-found">

			<?php if ( current_user_can( 'edit_posts' ) ) :
				// Show a different message to a logged-in user who can add posts.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'No posts to display', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwelve' ), admin_url( 'post-new.php' ) ); ?></p>
				</div><!-- .entry-content -->

			<?php else :
				// Show the default message to everyone else.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			<?php endif; // end current_user_can() check ?>
			
			</article><!-- #post-0 -->
			
		<?php endif; // end have_posts() check ?>
				<?php  
                wp_pagenavi();

            wp_reset_postdata();

                ?>
			</div>
			
		</div>
		


		

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>