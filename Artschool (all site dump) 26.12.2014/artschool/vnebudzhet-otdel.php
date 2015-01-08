<?php
/*
Template Name: vnebudzhetnoe otdelenie
*/
?>
<?php get_header(); ?>
<section id="primary" class="site-content vnebudzhet-otdel vnebudzhet-otdel-<?php echo get_the_ID(); ?>">
        <?php navigation_left (); ?>
        <ul class="monthes">
        	<li><a href="http://www.artschool1omsk.ru/?page_id=656">Сентябрь</a></li>
        	<li><a href="http://www.artschool1omsk.ru/?page_id=666">Октябрь</a></li>
        	<li><a href="http://www.artschool1omsk.ru/?page_id=668">Ноябрь</a></li>
        	<li><a href="http://www.artschool1omsk.ru/?page_id=670">Декабрь</a></li>
        	<li><a href="http://www.artschool1omsk.ru/?page_id=672">Январь</a></li>
        	<li><a href="http://www.artschool1omsk.ru/?page_id=674">Февраль</a></li>
        	<li><a href="http://www.artschool1omsk.ru/?page_id=676">Март</a></li>
        	<li><a href="http://www.artschool1omsk.ru/?page_id=678">Апрель</a></li>
        	<li><a href="http://www.artschool1omsk.ru/?page_id=680">Май</a></li>
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