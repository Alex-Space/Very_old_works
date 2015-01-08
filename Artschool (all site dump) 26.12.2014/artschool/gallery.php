<?php
/*
Template Name: Gallery
*/
?>
<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<section id="primary" class="site-content">
		<div id="content" role="main">
			<?php navigation_left (); ?>
			<div class="galery-box">
        <ul id="grid" class="group"> 
            <li> 
                <div class="details"> 
                	<h3>Рисунок</h3> 
                    
                        <a class="more" href="#info1">Подробнее...</a>
                    
                </div> 
               <a class="more" href="#info1"><img src="http://www.artschool1omsk.ru/images/gallery/screen-1.jpg" /></a> 
            </li> 
            <li> 
                <div class="details"> 
	                <h3>Живопись</h3> 
                    <a class="more" href="#info2">Подробнее...</a> 
    			</div> 
                <a href="#info2"><img src="http://www.artschool1omsk.ru/images/gallery/screen-2.jpg" /></a> 
            </li> 
            <li class="end"> 
                <div class="details"> 
	                <h3>Пленер</h3> 
                    <a class="more" href="#info3">Подробнее...</a> 
    			</div> 
                <a href="#info3"><img src="http://www.artschool1omsk.ru/images/gallery/screen-9.jpg" /></a> 
            </li> 
            <li> 
                <div class="details"> 
	                <h3>ДПИ</h3> 
                    <a class="more" href="#info4">Подробнее...</a> 
    			</div> 
                <a href="#info4"><img src="http://www.artschool1omsk.ru/images/gallery/screen-3.jpg" /></a> 
            </li> 
            <li> 
                <div class="details"> 
	                <h3>Печатная графика</h3> 
                    <a class="more" href="#info5">Подробнее...</a> 
    			</div> 
                <a href="#info5"><img src="http://www.artschool1omsk.ru/images/gallery/screen-4.jpg" /></a> 
            </li> 
            <li class="end"> 
                 <div class="details"> 
	                <h3>Керамика</h3> 
                    <a class="more" href="#info6">Подробнее...</a> 
    			</div> 
                <a href="#info6"><img src="http://www.artschool1omsk.ru/images/gallery/screen-5.jpg" /></a> 
            </li> 
            <li> 
                 <div class="details"> 
	                <h3>Композиция</h3> 
                    <a class="more" href="#info7">Подробнее...</a> 
    			</div> 
                <a href="#info7"><img src="http://www.artschool1omsk.ru/images/gallery/screen-6.jpg" /></a> 
            </li> 
            <li> 
                 <div class="details"> 
	                <h3>Изо-студия</h3> 
                    <a class="more" href="#info8">Подробнее...</a> 
    			</div> 
                <a href="#info8"><img src="http://www.artschool1omsk.ru/images/gallery/screen-7.jpg" /></a> 
            </li> 
            <li class="end"> 
                 <div class="details"> 
	                <h3>Архитектурное отд.</h3> 
                    <a class="more" href="#info9">Подробнее...</a> 
    			</div> 
                <a href="#info9"><img src="http://www.artschool1omsk.ru/images/gallery/screen-8.jpg" /></a> 
            </li> 
        </ul> 
       
        <ul id="information"> 
        	<li id="info1"> 
            	<div> 
               		<h3>Рисунок</h3> 
                     <?php if( get_field('img-1-1') ): ?>
                        <a href="<?php the_field('img-1-1'); ?>" >
                            <img src="<?php the_field('img-1-1'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-1-2') ): ?>
                        <a href="<?php the_field('img-1-2'); ?>" >
                            <img src="<?php the_field('img-1-2'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-1-3') ): ?>
                        <a href="<?php the_field('img-1-3'); ?>" >
                            <img src="<?php the_field('img-1-3'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-1-4') ): ?>
                        <a href="<?php the_field('img-1-4'); ?>" >
                            <img src="<?php the_field('img-1-4'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-1-5') ): ?>
                        <a href="<?php the_field('img-1-5'); ?>" >
                            <img src="<?php the_field('img-1-5'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-1-6') ): ?>
                        <a href="<?php the_field('img-1-6'); ?>" >
                            <img src="<?php the_field('img-1-6'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-1-7') ): ?>
                        <a href="<?php the_field('img-1-7'); ?>" >
                            <img src="<?php the_field('img-1-7'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-1-8') ): ?>
                        <a href="<?php the_field('img-1-8'); ?>" >
                            <img src="<?php the_field('img-1-8'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-1-9') ): ?>
                        <a href="<?php the_field('img-1-9'); ?>" >
                            <img src="<?php the_field('img-1-9'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-1-10') ): ?>
                        <a href="<?php the_field('img-1-10'); ?>" >
                            <img src="<?php the_field('img-1-10'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-1-11') ): ?>
                        <a href="<?php the_field('img-1-11'); ?>" >
                            <img src="<?php the_field('img-1-11'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-1-12') ): ?>
                        <a href="<?php the_field('img-1-12'); ?>" >
                            <img src="<?php the_field('img-1-12'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <a href="#" class="close">x</a> 
            	</div> 
				<span class="backface"></span> 
            </li> 
        	<li id="info2"> 
            	<div> 
	                <h3>Живопись</h3> 
					<?php if( get_field('img-2-1') ): ?>
                        <a href="<?php the_field('img-2-1'); ?>" >
                            <img src="<?php the_field('img-2-1'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-2-2') ): ?>
                        <a href="<?php the_field('img-1-2'); ?>" >
                            <img src="<?php the_field('img-2-2'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-2-3') ): ?>
                        <a href="<?php the_field('img-2-3'); ?>" >
                            <img src="<?php the_field('img-2-3'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-2-4') ): ?>
                        <a href="<?php the_field('img-2-4'); ?>" >
                            <img src="<?php the_field('img-2-4'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-2-5') ): ?>
                        <a href="<?php the_field('img-2-5'); ?>" >
                            <img src="<?php the_field('img-2-5'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-2-6') ): ?>
                        <a href="<?php the_field('img-2-6'); ?>" >
                            <img src="<?php the_field('img-2-6'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-2-7') ): ?>
                        <a href="<?php the_field('img-2-7'); ?>" >
                            <img src="<?php the_field('img-2-7'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-2-8') ): ?>
                        <a href="<?php the_field('img-2-8'); ?>" >
                            <img src="<?php the_field('img-2-8'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-2-9') ): ?>
                        <a href="<?php the_field('img-2-9'); ?>" >
                            <img src="<?php the_field('img-1-9'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-2-10') ): ?>
                        <a href="<?php the_field('img-2-10'); ?>" >
                            <img src="<?php the_field('img-2-10'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-2-11') ): ?>
                        <a href="<?php the_field('img-2-11'); ?>" >
                            <img src="<?php the_field('img-2-11'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-2-12') ): ?>
                        <a href="<?php the_field('img-2-12'); ?>" >
                            <img src="<?php the_field('img-2-12'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <a href="#" class="close">x</a> 
            	</div> 
            </li> 
        	<li id="info3"> 
            	<div> 
	                <h3>Пленер</h3> 
					<?php if( get_field('img-3-1') ): ?>
                        <a href="<?php the_field('img-3-1'); ?>" >
                            <img src="<?php the_field('img-3-1'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-3-2') ): ?>
                        <a href="<?php the_field('img-3-2'); ?>" >
                            <img src="<?php the_field('img-3-2'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-3-3') ): ?>
                        <a href="<?php the_field('img-3-3'); ?>" >
                            <img src="<?php the_field('img-3-3'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-3-4') ): ?>
                        <a href="<?php the_field('img-3-4'); ?>" >
                            <img src="<?php the_field('img-3-4'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-3-5') ): ?>
                        <a href="<?php the_field('img-3-5'); ?>" >
                            <img src="<?php the_field('img-3-5'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-3-6') ): ?>
                        <a href="<?php the_field('img-3-6'); ?>" >
                            <img src="<?php the_field('img-3-6'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-3-7') ): ?>
                        <a href="<?php the_field('img-3-7'); ?>" >
                            <img src="<?php the_field('img-3-7'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-3-8') ): ?>
                        <a href="<?php the_field('img-3-8'); ?>" >
                            <img src="<?php the_field('img-3-8'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-3-9') ): ?>
                        <a href="<?php the_field('img-3-9'); ?>" >
                            <img src="<?php the_field('img-3-9'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-3-10') ): ?>
                        <a href="<?php the_field('img-3-10'); ?>" >
                            <img src="<?php the_field('img-3-10'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-3-11') ): ?>
                        <a href="<?php the_field('img-3-11'); ?>" >
                            <img src="<?php the_field('img-3-11'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-3-12') ): ?>
                        <a href="<?php the_field('img-3-12'); ?>" >
                            <img src="<?php the_field('img-3-12'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <a href="#" class="close">x</a> 
            	</div> 
            </li> 
        	<li id="info4"> 
            	<div> 
	                <h3>ДПИ</h3> 
					<?php if( get_field('img-4-1') ): ?>
                        <a href="<?php the_field('img-4-1'); ?>" >
                            <img src="<?php the_field('img-4-1'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-4-2') ): ?>
                        <a href="<?php the_field('img-4-2'); ?>" >
                            <img src="<?php the_field('img-4-2'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-4-3') ): ?>
                        <a href="<?php the_field('img-4-3'); ?>" >
                            <img src="<?php the_field('img-4-3'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-4-4') ): ?>
                        <a href="<?php the_field('img-4-4'); ?>" >
                            <img src="<?php the_field('img-4-4'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-4-5') ): ?>
                        <a href="<?php the_field('img-4-5'); ?>" >
                            <img src="<?php the_field('img-4-5'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-4-6') ): ?>
                        <a href="<?php the_field('img-4-6'); ?>" >
                            <img src="<?php the_field('img-4-6'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-4-7') ): ?>
                        <a href="<?php the_field('img-4-7'); ?>" >
                            <img src="<?php the_field('img-4-7'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-4-8') ): ?>
                        <a href="<?php the_field('img-4-8'); ?>" >
                            <img src="<?php the_field('img-4-8'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-4-9') ): ?>
                        <a href="<?php the_field('img-4-9'); ?>" >
                            <img src="<?php the_field('img-4-9'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-4-10') ): ?>
                        <a href="<?php the_field('img-4-10'); ?>" >
                            <img src="<?php the_field('img-4-10'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-4-11') ): ?>
                        <a href="<?php the_field('img-4-11'); ?>" >
                            <img src="<?php the_field('img-4-11'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-4-12') ): ?>
                        <a href="<?php the_field('img-4-12'); ?>" >
                            <img src="<?php the_field('img-4-12'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <a href="#" class="close">x</a> 
            	</div> 
            </li> 
        	<li id="info5"> 
            	<div> 
	                <h3>Печатная графика</h3> 
					<?php if( get_field('img-5-1') ): ?>
                        <a href="<?php the_field('img-5-1'); ?>" >
                            <img src="<?php the_field('img-5-1'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-5-2') ): ?>
                        <a href="<?php the_field('img-5-2'); ?>" >
                            <img src="<?php the_field('img-5-2'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-5-3') ): ?>
                        <a href="<?php the_field('img-5-3'); ?>" >
                            <img src="<?php the_field('img-5-3'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-5-4') ): ?>
                        <a href="<?php the_field('img-5-4'); ?>" >
                            <img src="<?php the_field('img-5-4'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-5-5') ): ?>
                        <a href="<?php the_field('img-5-5'); ?>" >
                            <img src="<?php the_field('img-5-5'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-5-6') ): ?>
                        <a href="<?php the_field('img-5-6'); ?>" >
                            <img src="<?php the_field('img-5-6'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-5-7') ): ?>
                        <a href="<?php the_field('img-5-7'); ?>" >
                            <img src="<?php the_field('img-5-7'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-5-8') ): ?>
                        <a href="<?php the_field('img-5-8'); ?>" >
                            <img src="<?php the_field('img-5-8'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-5-9') ): ?>
                        <a href="<?php the_field('img-5-9'); ?>" >
                            <img src="<?php the_field('img-5-9'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-5-10') ): ?>
                        <a href="<?php the_field('img-5-10'); ?>" >
                            <img src="<?php the_field('img-5-10'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-5-11') ): ?>
                        <a href="<?php the_field('img-5-11'); ?>" >
                            <img src="<?php the_field('img-5-11'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-5-12') ): ?>
                        <a href="<?php the_field('img-5-12'); ?>" >
                            <img src="<?php the_field('img-5-12'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <a href="#" class="close">x</a> 
            	</div> 
            </li> 
        	<li id="info6"> 
            	<div> 
	                <h3>Керамика</h3> 
					<?php if( get_field('img-6-1') ): ?>
                        <a href="<?php the_field('img-6-1'); ?>" >
                            <img src="<?php the_field('img-6-1'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-6-2') ): ?>
                        <a href="<?php the_field('img-6-2'); ?>" >
                            <img src="<?php the_field('img-6-2'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-6-3') ): ?>
                        <a href="<?php the_field('img-6-3'); ?>" >
                            <img src="<?php the_field('img-6-3'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-6-4') ): ?>
                        <a href="<?php the_field('img-6-4'); ?>" >
                            <img src="<?php the_field('img-6-4'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-6-5') ): ?>
                        <a href="<?php the_field('img-6-5'); ?>" >
                            <img src="<?php the_field('img-6-5'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-6-6') ): ?>
                        <a href="<?php the_field('img-6-6'); ?>" >
                            <img src="<?php the_field('img-6-6'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-6-7') ): ?>
                        <a href="<?php the_field('img-6-7'); ?>" >
                            <img src="<?php the_field('img-6-7'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-6-8') ): ?>
                        <a href="<?php the_field('img-6-8'); ?>" >
                            <img src="<?php the_field('img-6-8'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-6-9') ): ?>
                        <a href="<?php the_field('img-6-9'); ?>" >
                            <img src="<?php the_field('img-6-9'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-6-10') ): ?>
                        <a href="<?php the_field('img-6-10'); ?>" >
                            <img src="<?php the_field('img-6-10'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-6-11') ): ?>
                        <a href="<?php the_field('img-6-11'); ?>" >
                            <img src="<?php the_field('img-6-11'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-6-12') ): ?>
                        <a href="<?php the_field('img-6-12'); ?>" >
                            <img src="<?php the_field('img-6-12'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <a href="#" class="close">x</a> 
            	</div> 
            </li> 
        	<li id="info7"> 
            	<div> 
	                <h3>Композиция</h3> 
                    <?php if( get_field('img-7-1') ): ?>
                        <a href="<?php the_field('img-7-1'); ?>" >
                            <img src="<?php the_field('img-7-1'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-7-2') ): ?>
                        <a href="<?php the_field('img-7-2'); ?>" >
                            <img src="<?php the_field('img-7-2'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-7-3') ): ?>
                        <a href="<?php the_field('img-7-3'); ?>" >
                            <img src="<?php the_field('img-7-3'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-7-4') ): ?>
                        <a href="<?php the_field('img-7-4'); ?>" >
                            <img src="<?php the_field('img-7-4'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-7-5') ): ?>
                        <a href="<?php the_field('img-7-5'); ?>" >
                            <img src="<?php the_field('img-7-5'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-7-6') ): ?>
                        <a href="<?php the_field('img-7-6'); ?>" >
                            <img src="<?php the_field('img-7-6'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-7-7') ): ?>
                        <a href="<?php the_field('img-7-7'); ?>" >
                            <img src="<?php the_field('img-7-7'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-7-8') ): ?>
                        <a href="<?php the_field('img-7-8'); ?>" >
                            <img src="<?php the_field('img-7-8'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-7-9') ): ?>
                        <a href="<?php the_field('img-7-9'); ?>" >
                            <img src="<?php the_field('img-7-9'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-7-10') ): ?>
                        <a href="<?php the_field('img-7-10'); ?>" >
                            <img src="<?php the_field('img-7-10'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-7-11') ): ?>
                        <a href="<?php the_field('img-7-11'); ?>" >
                            <img src="<?php the_field('img-7-11'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-7-12') ): ?>
                        <a href="<?php the_field('img-7-12'); ?>" >
                            <img src="<?php the_field('img-7-12'); ?>" alt="">
                        </a>
                    <?php endif; ?> 
                    <a href="#" class="close">x</a> 
            	</div> 
            </li> 
        	<li id="info8"> 
            	<div> 
	                <h3>Изо-студия</h3> 
                    <?php if( get_field('img-8-1') ): ?>
                        <a href="<?php the_field('img-8-1'); ?>" >
                            <img src="<?php the_field('img-8-1'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-8-2') ): ?>
                        <a href="<?php the_field('img-8-2'); ?>" >
                            <img src="<?php the_field('img-8-2'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-8-3') ): ?>
                        <a href="<?php the_field('img-8-3'); ?>" >
                            <img src="<?php the_field('img-8-3'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-8-4') ): ?>
                        <a href="<?php the_field('img-8-4'); ?>" >
                            <img src="<?php the_field('img-8-4'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-8-5') ): ?>
                        <a href="<?php the_field('img-8-5'); ?>" >
                            <img src="<?php the_field('img-8-5'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-8-6') ): ?>
                        <a href="<?php the_field('img-8-6'); ?>" >
                            <img src="<?php the_field('img-8-6'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-8-7') ): ?>
                        <a href="<?php the_field('img-8-7'); ?>" >
                            <img src="<?php the_field('img-8-7'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-8-8') ): ?>
                        <a href="<?php the_field('img-8-8'); ?>" >
                            <img src="<?php the_field('img-8-8'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-8-9') ): ?>
                        <a href="<?php the_field('img-8-9'); ?>" >
                            <img src="<?php the_field('img-8-9'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-8-10') ): ?>
                        <a href="<?php the_field('img-8-10'); ?>" >
                            <img src="<?php the_field('img-8-10'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-8-11') ): ?>
                        <a href="<?php the_field('img-8-11'); ?>" >
                            <img src="<?php the_field('img-8-11'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-8-12') ): ?>
                        <a href="<?php the_field('img-8-12'); ?>" >
                            <img src="<?php the_field('img-8-12'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <a href="#" class="close">x</a> 
            	</div> 
            </li> 
        	<li id="info9"> 
            	<div> 
	                <h3>Архитектурное отделение</h3> 
                    <?php if( get_field('img-9-1') ): ?>
                        <a href="<?php the_field('img-9-1'); ?>" >
                            <img src="<?php the_field('img-9-1'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-9-2') ): ?>
                        <a href="<?php the_field('img-9-2'); ?>" >
                            <img src="<?php the_field('img-9-2'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-9-3') ): ?>
                        <a href="<?php the_field('img-9-3'); ?>" >
                            <img src="<?php the_field('img-9-3'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-9-4') ): ?>
                        <a href="<?php the_field('img-9-4'); ?>" >
                            <img src="<?php the_field('img-9-4'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-9-5') ): ?>
                        <a href="<?php the_field('img-9-5'); ?>" >
                            <img src="<?php the_field('img-9-5'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-9-6') ): ?>
                        <a href="<?php the_field('img-9-6'); ?>" >
                            <img src="<?php the_field('img-9-6'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-9-7') ): ?>
                        <a href="<?php the_field('img-9-7'); ?>" >
                            <img src="<?php the_field('img-9-7'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-9-8') ): ?>
                        <a href="<?php the_field('img-9-8'); ?>" >
                            <img src="<?php the_field('img-9-8'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-9-9') ): ?>
                        <a href="<?php the_field('img-9-9'); ?>" >
                            <img src="<?php the_field('img-9-9'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-9-10') ): ?>
                        <a href="<?php the_field('img-9-10'); ?>" >
                            <img src="<?php the_field('img-9-10'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-9-11') ): ?>
                        <a href="<?php the_field('img-9-11'); ?>" >
                            <img src="<?php the_field('img-9-11'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('img-9-12') ): ?>
                        <a href="<?php the_field('img-9-12'); ?>" >
                            <img src="<?php the_field('img-9-12'); ?>" alt="">
                        </a>
                    <?php endif; ?> 
                    <a href="#" class="close">x</a> 
            	</div> 
            </li> 
        </ul> 
			</div>
		</div>
	</section>

<?php get_footer(); ?>