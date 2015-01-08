<?php
/*
Template Name: budzhetnoe otdelenie
*/
?>
<?php get_header(); ?>
<section id="primary" class="site-content budzhet-otdel">
        <?php navigation_left (); ?>
        <div id="content_1" role="main">
            <h1 class="title-budzhet"><?php the_title(); ?></h1>
            <?php while ( have_posts() ) : the_post(); ?>
				<div class="first-stolb stolb">
               		<?php the_content(); ?>
				</div>
				<?php if( get_field("stolb2") ) : ?>
					<div class="second-stolb stolb">
						<?php the_field("stolb2"); ?>
					</div>
				<?php endif; ?>

				<?php if( get_field("stolb3") ) : ?>
					<div class="third-stolb stolb">
						<?php the_field("stolb3"); ?>
					</div>
				<?php endif; ?>

            <?php endwhile; // end of the loop. ?>
           
        </div>
    </section>

<?php get_footer(); ?>