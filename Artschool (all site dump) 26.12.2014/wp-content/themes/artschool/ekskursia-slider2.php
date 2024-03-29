<?php
/*
Template Name: ekskursia slider 2
*/
?>
<?php get_header(); ?>
<section id="primary" class="site-content ekskursia-slider">
        <?php navigation_left (); ?>
        <div id="content" role="main">
            
            <div class="ekskursia-box">
                <div id="slider">
                    
                    <a href="<?php bloginfo('template_url'); ?>/images/second/01.jpg"><img src="<?php bloginfo('template_url'); ?>/images/second/01.jpg" alt="" /></a>
                     <a href="<?php bloginfo('template_url'); ?>/images/second/02.jpg"><img src="<?php bloginfo('template_url'); ?>/images/second/02.jpg" alt="" /></a>
                     <a href="<?php bloginfo('template_url'); ?>/images/second/03.jpg"><img src="<?php bloginfo('template_url'); ?>/images/second/03.jpg" alt="" /></a>
                     <a href="<?php bloginfo('template_url'); ?>/images/second/04.jpg"><img src="<?php bloginfo('template_url'); ?>/images/second/04.jpg" alt="" /></a>
                     <a href="<?php bloginfo('template_url'); ?>/images/second/05.jpg"><img src="<?php bloginfo('template_url'); ?>/images/second/05.jpg" alt="" /></a>
                     <a href="<?php bloginfo('template_url'); ?>/images/second/06.jpg"><img src="<?php bloginfo('template_url'); ?>/images/second/06.jpg" alt="" /></a>
                     <a href="<?php bloginfo('template_url'); ?>/images/second/07.jpg"><img src="<?php bloginfo('template_url'); ?>/images/second/07.jpg" alt="" /></a>
                     <a href="<?php bloginfo('template_url'); ?>/images/second/08.jpg"><img src="<?php bloginfo('template_url'); ?>/images/second/08.jpg" alt="" /></a>
                    <a href="<?php bloginfo('template_url'); ?>/images/second/09.jpg"><img src="<?php bloginfo('template_url'); ?>/images/second/09.jpg" alt="" /></a>

                </div>

                <script src="<?php bloginfo('template_url'); ?>/js/ideal-image-slider.js"></script>
                <script src="<?php bloginfo('template_url'); ?>/js/iis-bullet-nav.js"></script>
                <script>
                var slider = new IdealImageSlider.Slider('#slider');
                slider.addBulletNav();
                slider.start();
                </script>
            </div>
        </div>
    </section>

<?php get_footer(); ?>