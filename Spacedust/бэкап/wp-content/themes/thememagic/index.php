<?php get_header(); ?>

		<!--content-->
		<div id="content">
		
		<div id="left-col">
			
			<?php get_template_part( 'loop', 'index' ); ?>
<div class="bordermini"><?php the_post_thumbnail(array(150,150), array('class' => 'alignleft'));?></div>
<?php the_excerpt() ?>
<a href="<?php the_permalink(); ?>">Читать далее</a>
</div> <!--left-col end-->

<?php get_sidebar(); ?>

</div> <!--content end-->
	
</div>
<!--wrapper end-->

<?php get_footer(); ?>