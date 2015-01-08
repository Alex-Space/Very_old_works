<?php
/*
Template Name: ekskursia page
*/
?>
<?php get_header(); ?>
<section id="primary" class="site-content">
		<div id="content" role="main">
			<?php navigation_left (); ?>
			<div class="ekskursia-box">
                <h2>Виртуальная экскурсия по школе</h2>
                <div class="eks-box-inner">
                    <a href="http://www.artschoolomsk.ru/?page_id=589" class="a-box bo1">
                        <span class="eks-link" href="#">ИРТЫШСКАЯ НАБЕРЕЖНАЯ 35</span>
                        <img src="<?php bloginfo('template_url'); ?>/images/korpys--2-.jpg" alt="">
                    </a>
                    <a href="http://www.artschoolomsk.ru/?page_id=587" class="a-box bo2">
                        <span class="eks-link2" href="#">ИРТЫШСКАЯ НАБЕРЕЖНЯ 40</span>
                        <img src="<?php bloginfo('template_url'); ?>/images/korpys--1-.jpg" alt="">
                    </a>
                    <a href="http://www.artschoolomsk.ru/?page_id=591" class="a-box bo3">
                        <span class="eks-link3" href="#">СТАЛЬСКОГО 3</span>
                        <img src="<?php bloginfo('template_url'); ?>/images/korpys--3-.jpg" alt="">
                    </a>
                </div>
                
            </div>
		</div>
	</section>

<?php get_footer(); ?>