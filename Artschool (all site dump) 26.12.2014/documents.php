<?php
/*
Template Name: Documents
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
			<div class="about-prepod about-documents mCustomScrollbar _mCS_1" id="content_1">
			 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="articles home-page-article">
					<div class="articles-title">
						<h2 class="doc-zag">Учащимся и родителям</h2>
						<table>
							<?php if( get_field('doc1') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name1'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc1'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc2') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name2'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc2'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc3') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name3'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc3'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc4') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name4'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc4'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc5') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name5'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc5'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc6') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name6'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc6'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc7') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name7'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc7'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc8') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name8'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc8'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc9') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name9'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc9'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc10') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name10'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc10'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc11') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name11'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc11'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc12') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name12'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc12'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc13') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name13'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc13'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc14') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name14'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc14'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc15') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name15'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc15'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
						</table> 
						<h2 class="doc-zag">Отчеты деятельности школы</h2>
							<?php if( get_field('doc16') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name16'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc16'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc17') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name17'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc17'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc18') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name18'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc18'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc19') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name19'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc19'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc20') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name20'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc20'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc21') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name21'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc21'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc22') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name22'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc22'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc23') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name23'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc23'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc24') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name24'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc24'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc25') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name25'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc25'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc26') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name26'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc26'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc27') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name27'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc27'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc28') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name28'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc28'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc29') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name29'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc29'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc30') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name30'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc30'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
						<h2 class="doc-zag">Приказы</h2>
							<?php if( get_field('doc31') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name31'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc31'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc31') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name31'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc31'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc31') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name31'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc31'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc31') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name31'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc31'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc31') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name31'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc31'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc32') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name32'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc32'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc33') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name33'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc33'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc34') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name34'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc34'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc35') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name35'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc35'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc36') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name36'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc36'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc37') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name37'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc37'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc38') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name38'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc38'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc39') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name39'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc39'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc40') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name40'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc40'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc41') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name41'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc41'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc42') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name42'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc42'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc43') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name43'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc43'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc44') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name44'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc44'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
							<?php if( get_field('doc45') ): ?>
							<tr class="stroka">
								<td class="red-book"></td>
								<td class="doc-text">
									<p><?php the_field('doc-name45'); ?></p>
    							</td>	
								<td class="disketa">
									<a href="<?php the_field('doc45'); ?>"></a>
								</td>
								<td class="pechat"></td>
							</tr>
							<?php endif; ?>
					</div>
					<div class="clear"></div>
					<div class="articles-head">
						<?php the_content(); ?> 
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
			</div>
			<div class="lecenzii">
				<img class="first-licenz" src="<?php bloginfo('template_url')?>/images/licensia1.jpg" alt="">
				<img class="second-licenz" src="<?php bloginfo('template_url')?>/images/licensia2.jpg" alt="">
			</div>
			<div><?php the_field('slide8'); ?></div>
		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>