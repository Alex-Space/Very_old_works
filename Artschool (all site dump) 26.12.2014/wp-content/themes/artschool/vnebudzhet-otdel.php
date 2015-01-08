<?php
/*
Template Name: vnebudzhetnoe otdelenie
*/
?>
<?php get_header(); ?>
<section id="primary" class="site-content vnebudzhet-otdel vnebudzhet-otdel-<?php echo get_the_ID(); ?>">
        <?php navigation_left (); ?>
        <ul class="monthes">
        	<li><a href="http://www.artschoolomsk.ru/?page_id=606">Сентябрь</a></li>
        	<li><a href="http://www.artschoolomsk.ru/?page_id=613">Октябрь</a></li>
        	<li><a href="http://www.artschoolomsk.ru/?page_id=615">Ноябрь</a></li>
        	<li><a href="http://www.artschoolomsk.ru/?page_id=617">Декабрь</a></li>
        	<li><a href="http://www.artschoolomsk.ru/?page_id=619">Январь</a></li>
        	<li><a href="http://www.artschoolomsk.ru/?page_id=622">Февраль</a></li>
        	<li><a href="http://www.artschoolomsk.ru/?page_id=624">Март</a></li>
        	<li><a href="http://www.artschoolomsk.ru/?page_id=626">Апрель</a></li>
        	<li><a href="http://www.artschoolomsk.ru/?page_id=628">Май</a></li>
        </ul>
        <div id="content_1" role="main">
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