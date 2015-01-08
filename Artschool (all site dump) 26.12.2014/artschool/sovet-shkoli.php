<?php
/*
Template Name: sovet-skoli
*/
?>
<?php
/**
 * @author Alex Space
 *
 * @package WordPress
 * @subpackage rhsh
 * @since rhsh 1.0
 */
get_header(); ?>
<div id="primary" class="site-content prepod-page">
	<div id="content" role="main">
		<?php navigation_left (); ?>
		<div class="general-area">
			<div class="sovet-shkoli-page mCustomScrollbar _mCS_1" id="content_1">
			 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="articles home-page-article">
					<div class="articles-title">
						<h2><?php the_title(); ?></h2>
					</div>
					<div class="clear"></div>
					<div class="fotos-sovet">
						<?php if( get_field('sovet-img1') ): ?>
							<div class="spisok-soveta-box">
								<div class="avatar-dolzhnost-box">
									<a href="<?php the_field('link-prep1'); ?>"><img src="<?php the_field('sovet-img1'); ?>" alt=""></a>
									<p class="dolzhnost"><?php the_field('dolzhnost1'); ?></p>
								</div>
							</div>
						<?php endif; ?>
						<?php if( get_field('sovet-img2') ): ?>
						<div class="spisok-soveta-box">
							<div class="avatar-dolzhnost-box">
								<a href="<?php the_field('link-prep2'); ?>"><img src="<?php the_field('sovet-img2'); ?>" alt=""></a>
								<p class="dolzhnost"><?php the_field('dolzhnost2'); ?></p>
							</div>
						</div>
						<?php endif; ?>
						<?php if( get_field('sovet-img3') ): ?>
						<div class="spisok-soveta-box">
							<div class="avatar-dolzhnost-box">
								<a href="<?php the_field('link-prep3'); ?>"><img src="<?php the_field('sovet-img3'); ?>" alt=""></a>
								<p class="dolzhnost"><?php the_field('dolzhnost3'); ?></p>
							</div>
						</div>
						<?php endif; ?>
						<?php if( get_field('sovet-img4') ): ?>
							<div class="spisok-soveta-box">
								<div class="avatar-dolzhnost-box">
									<a href="<?php the_field('link-prep4'); ?>"><img src="<?php the_field('sovet-img4'); ?>" alt=""></a>
									<p class="dolzhnost"><?php the_field('dolzhnost4'); ?></p>
								</div>
							</div>
						<?php endif; ?>
						<?php if( get_field('sovet-img5') ): ?>
							<div class="spisok-soveta-box">
								<div class="avatar-dolzhnost-box">
									<a href="<?php the_field('link-prep5'); ?>"><img src="<?php the_field('sovet-img5'); ?>" alt=""></a>
									<p class="dolzhnost"><?php the_field('dolzhnost5'); ?></p>
								</div>
							</div>
						<?php endif; ?>
						<?php if( get_field('sovet-img6') ): ?>
							<div class="spisok-soveta-box">
								<div class="avatar-dolzhnost-box">
									<a href="<?php the_field('link-prep6'); ?>"><img src="<?php the_field('sovet-img6'); ?>" alt=""></a>
									<p class="dolzhnost"><?php the_field('dolzhnost6'); ?></p>
								</div>
							</div>
						<?php endif; ?>
						<?php if( get_field('sovet-img7') ): ?>
							<div class="spisok-soveta-box">
								<div class="avatar-dolzhnost-box">
									<a href="<?php the_field('link-prep7'); ?>"><img src="<?php the_field('sovet-img7'); ?>" alt=""></a>
									<p class="dolzhnost"><?php the_field('dolzhnost7'); ?></p>
								</div>
							</div>
						<?php endif; ?>
						<?php if( get_field('sovet-img8') ): ?>
							<div class="spisok-soveta-box">
								<div class="avatar-dolzhnost-box">
									<a href="<?php the_field('link-prep8'); ?>"><img src="<?php the_field('sovet-img8'); ?>" alt=""></a>
									<p class="dolzhnost"><?php the_field('dolzhnost8'); ?></p>
								</div>
							</div>
						<?php endif; ?>
						<?php if( get_field('sovet-img9') ): ?>
							<div class="spisok-soveta-box">
								<div class="avatar-dolzhnost-box">
									<a href="<?php the_field('link-prep9'); ?>"><img src="<?php the_field('sovet-img9'); ?>" alt=""></a>
									<p class="dolzhnost"><?php the_field('dolzhnost9'); ?></p>
								</div>
							</div>
						<?php endif; ?>
						<?php if( get_field('sovet-img10') ): ?>
							<div class="spisok-soveta-box">
								<div class="avatar-dolzhnost-box">
									<a href="<?php the_field('link-prep10'); ?>"><img src="<?php the_field('sovet-img10'); ?>" alt=""></a>
									<p class="dolzhnost"><?php the_field('dolzhnost10'); ?></p>
								</div>
							</div>
						<?php endif; ?>
					</div>
					<div class="cont-sovet">
						<?php the_content(); ?> 
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
			</div>


			
		</div><!-- .general-area -->
	</div><!-- #content -->
</div><!-- #primary -->
	

<?php get_footer(); ?>