<?php get_header(); ?>

	<!--content-->
<div id="content">
		
	<div id="left-col">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
				
					<div class="post-head">
					
						<h1><?php the_title(); ?></h1>
					
					</div><!--post-heading end-->

			<div class="meta-data">
			
			<?php the_time(__ ( 'j M', 'thememagic')); ?> <span>20<?php the_time( 'y' ); ?> года,</span> рубрика <?php the_category(', '); ?> | <?php comments_popup_link( __( 'Комментировать', 'thememagic' ), __( '1 Комментарий', 'thememagic' ), __( '% Комментарий', 'thememagic' ) ); ?><?php if(function_exists(‘the_ratings’)) { the_ratings(); } ?>
			
			</div><!--meta data end-->

			<div class="post-entry">
				<div class="bordermini"><?php the_post_thumbnail(array(150,150), array('class' => 'alignleft'));?></div>
<?php the_content( __( '', 'thememagic' ) ); ?>		
<!-- Put this div tag to the place, where the Like block will be -->
<div id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "full"});
</script>


						<div class="clear"></div>
			<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'thememagic' ), 'after' => '' ) ); ?>
						
						
						
					<nav id="nav-single"> <span class="nav-previous">
            <?php previous_post_link( '%link', '<span class="meta-nav">&larr;</span> Previous Post '); ?>
            </span> <span class="nav-next">
            <?php next_post_link( '%link', 'Next Post <span class="meta-nav">&rarr;</span>'); ?>
            </span> </nav>
					<!-- Put this div tag to the place, where the Comments block will be -->
	
					</div><!--post-entry end-->

				<?php comments_template( '', true ); ?>
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 10, width: "520", attach: "*"});
</script>
<?php endwhile; ?>


</div> 

<!--left-col end-->

<?php get_sidebar(); ?>

</div> <!--content end-->
	
</div>
<!--wrapper end-->

<?php get_footer(); ?>