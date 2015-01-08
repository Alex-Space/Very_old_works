<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
		<h1><?php _e( 'Not Found', 'thememagic' ); ?></h1>
		<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'thememagic' ); ?></p>
		

<?php endif; ?>

<!--loop starts here-->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-head">
	
			<h1><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'thememagic' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php if ( get_the_title() == '' ) { _e( '(No title)', 'thememagic' ); } else { the_title(); } ?></a></h1>
			
			</div><!--post-heading end-->
			
			<div class="meta-data">
			
<?php the_time(__ ( 'j M', 'thememagic')); ?> <span>20<?php the_time( 'y' ); ?> года,</span> рубрика <?php the_category(', '); ?> | <?php comments_popup_link( __( 'Комментировать', 'thememagic' ), __( '1 Комментарий', 'thememagic' ), __( '% Комментарий', 'thememagic' ) ); ?><?php if(function_exists(‘the_ratings’)) { the_ratings(); } ?>
			
			
			</div><!--meta data end-->
				<div class="clear"></div>

<div class="post-entry">
<?php if  ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(300,100), array("class" => "alignleft post_thumbnail")); } ?>

<div class="bordermini"><?php the_post_thumbnail(array(150,150), array('class' => 'alignleft'));?></div>
<?php the_excerpt() ?>
<a href="<?php the_permalink(); ?>">Читать далее</a>
	<?php if ( is_archive() || is_search() ) :  ?>

				<div class="clear"></div>
			<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'thememagic' ), 'after' => '' ) ); ?>
			
	<?php else : ?>
	
 	<?php if ( has_post_thumbnail() ) { ?> <div class="entry-thumbnail"> <?php the_post_thumbnail(array(620,240)); ?> </div> <?php } ?>
	
	
			<?php the_content( '<span class="read-more">'.__('...читать далее', 'thememagic').'</span>' ); ?>
				<div class="clear"></div>
			<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'thememagic' ), 'after' => '' ) ); ?>
	<?php endif; ?>
	
	<!--clear float--><div class="clear"></div>
				
				
				</div><!--post-entry end-->


		<?php comments_template( '', true ); ?>

</div> <!--post end-->

<?php endwhile; // End the loop. Whew. ?>


<!--pagination-->
	<div class="navigation">
		<div class="alignleft"><?php next_posts_link( __( '&larr; Older posts', 'thememagic' ) ); ?></div>
		<div class="alignright"><?php previous_posts_link( __( 'Newer posts &rarr;', 'thememagic' ) ); ?></div>
	</div>
	