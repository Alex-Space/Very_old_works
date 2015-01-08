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
					<div class="clear"></div>
						<h2 class="doc-zag">Учащимся и родителям</h2>
						<?php if( get_field('doc1') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc1'); ?>"><p><?php the_field('doc-name1'); ?></p></a></a>
							</td>	
						</tr></table>
						<?php endif; ?>

						<?php if( get_field('doc2') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc2'); ?>"><p><?php the_field('doc-name2'); ?></p></a>
							</td>	

						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc3') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc3'); ?>"><p><?php the_field('doc-name3'); ?></p></a>
							</td>	
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc4') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc4'); ?>"><p><?php the_field('doc-name4'); ?></p></a>
							</td>	
						
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc5') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc5'); ?>"><p><?php the_field('doc-name5'); ?></p></a>
							</td>	
							
					
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc6') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc6'); ?>"><p><?php the_field('doc-name6'); ?></p></a>
							</td>	
							
					
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc7') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc7'); ?>"><p><?php the_field('doc-name7'); ?></p></a>
							</td>	
						
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc8') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc8'); ?>"><p><?php the_field('doc-name8'); ?></p></a>
							</td>	
					
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc9') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc9'); ?>"><p><?php the_field('doc-name9'); ?></p></a>
							</td>	
							
						
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc10') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc10'); ?>"><p><?php the_field('doc-name10'); ?></p></a>
							</td>	
							
						
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc11') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc11'); ?>"><p><?php the_field('doc-name11'); ?></p></a>
							</td>	
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc12') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc12'); ?>"><p><?php the_field('doc-name12'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc13') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc13'); ?>"><p><?php the_field('doc-name13'); ?></p></a>
							</td>	
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc14') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc14'); ?>"><p><?php the_field('doc-name14'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc15') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc15'); ?>"><p><?php the_field('doc-name15'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
					</table> 
					<h2 class="doc-zag">Отчеты деятельности школы</h2>
						<?php if( get_field('doc16') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc16'); ?>"><p><?php the_field('doc-name16'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc17') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc17'); ?>"><p><?php the_field('doc-name17'); ?></p></a>
							</td>	
							
								
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc18') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc18'); ?>"><p><?php the_field('doc-name18'); ?></p></a>
							</td>	
							
								
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc19') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc19'); ?>"><p><?php the_field('doc-name19'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc20') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc20'); ?>"><p><?php the_field('doc-name20'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc21') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc21'); ?>"><p><?php the_field('doc-name21'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc22') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc22'); ?>"><p><?php the_field('doc-name22'); ?></p></a>
							</td>	
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc23') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('23'); ?>"><p><?php the_field('doc-name23'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc24') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc24'); ?>"><p><?php the_field('doc-name24'); ?></p></a>
							</td>	
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc25') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc25'); ?>"><p><?php the_field('doc-name25'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc26') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc26'); ?>"><p><?php the_field('doc-name26'); ?></p></a>
							</td>	
							
						
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc27') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('27'); ?>"><p><?php the_field('doc-name27'); ?></p></a>
							</td>	
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc28') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc28'); ?>"><p><?php the_field('doc-name28'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc29') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc29'); ?>"><p><?php the_field('doc-name29'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc30') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc30'); ?>"><p><?php the_field('doc-name30'); ?></p></a>
							</td>	
							
								
							
						</tr></table>
						<?php endif; ?>
					<h2 class="doc-zag">Приказы</h2>
						<?php if( get_field('doc31') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc31'); ?>"><p><?php the_field('doc-name31'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc32') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc32'); ?>"><p><?php the_field('doc-name32'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc33') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc33'); ?>"><p><?php the_field('doc-name33'); ?></p></a>
							</td>	
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc34') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc34'); ?>"><p><?php the_field('doc-name34'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc35') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc35'); ?>"><p><?php the_field('doc-name35'); ?></p></a>
							</td>	
							
								
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc36') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc36'); ?>"><p><?php the_field('doc-name36'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc37') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc37'); ?>"><p><?php the_field('doc-name37'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc38') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc38'); ?>"><p><?php the_field('doc-name38'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc39') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc39'); ?>"><p><?php the_field('doc-name39'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc40') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc40'); ?>"><p><?php the_field('doc-name40'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc41') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc41'); ?>"><p><?php the_field('doc-name41'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc42') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc42'); ?>"><p><?php the_field('doc-name42'); ?></p></a>
							</td>	
							
						
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc43') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc43'); ?>"><p><?php the_field('doc-name43'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc44') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc44'); ?>"><p><?php the_field('doc-name44'); ?></p></a>
							</td>	
							
							
							
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc45') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc45'); ?>"><p><?php the_field('doc-name45'); ?></p></a>
							</td>	
							
								
							
						</tr></table>
						<?php endif; ?>
						<h2 class="doc-zag">Программы</h2>
						<?php if( get_field('doc46') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc46'); ?>"><p><?php the_field('doc-name46'); ?></p></a>
							</td>	
						</tr></table>
						<?php endif; ?>

						<?php if( get_field('doc47') ): ?>
						<table>
							<tr class="stroka">
								<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
								<td class="doc-text">
									<a href="<?php the_field('doc47'); ?>">
										<p><?php the_field('doc-name47'); ?></p>
									</a>
								</td>	
							</tr>
						</table>
						<?php endif; ?>

						<?php if( get_field('doc48') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('do48'); ?>"><p><?php the_field('doc-name48'); ?></p></a>
							</td>	
						</tr></table>
						<?php endif; ?>

						<?php if( get_field('doc49') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc49'); ?>"><p><?php the_field('doc-name49'); ?></p></a>
							</td>	
						</tr></table>
						<?php endif; ?>

						<?php if( get_field('doc50') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc50'); ?>"><p><?php the_field('doc-name50'); ?></p></a>
							</td>	
						</tr></table>
						<?php endif; ?>

						<?php if( get_field('doc51') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc51'); ?>"><p><?php the_field('doc-name51'); ?></p></a>
							</td>	
						</tr></table>
						<?php endif; ?>

						<?php if( get_field('doc52') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc52'); ?>"><p><?php the_field('doc-name52'); ?></p></a>
							</td>	
						</tr></table>
						<?php endif; ?>

						<?php if( get_field('doc53') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc53'); ?>"><p><?php the_field('doc-name53'); ?></p></a>
							</td>	
						</tr></table>
						<?php endif; ?>

						<?php if( get_field('doc54') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc54'); ?>"><p><?php the_field('doc-name54'); ?></p></a>
							</td>	
						</tr></table>
						<?php endif; ?>

						<?php if( get_field('doc55') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc55'); ?>"><p><?php the_field('doc-name55'); ?></p></a>
							</td>	
						</tr></table>
						<?php endif; ?>

						<?php if( get_field('doc56') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc56'); ?>"><p><?php the_field('doc-name56'); ?></p></a>
							</td>	
						</tr></table>
						<?php endif; ?>

						<?php if( get_field('doc57') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc57'); ?>"><p><?php the_field('doc-name57'); ?></p></a>
							</td>	
						</tr></table>
						<?php endif; ?>

						<?php if( get_field('doc58') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc58'); ?>"><p><?php the_field('doc-name58'); ?></p></a>
							</td>	
						</tr></table>
						<?php endif; ?>

						<?php if( get_field('doc59') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc59'); ?>"><p><?php the_field('doc-name59'); ?></p></a>
							</td>	
						</tr>/<table>
						<?php endif; ?>

						<?php if( get_field('doc60') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc60'); ?>"><p><?php the_field('doc-name60'); ?></p></a>
							</td>	
						</tr></table>
						<?php endif; ?>

						<?php if( get_field('doc61') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc61'); ?>"><p><?php the_field('doc-name61'); ?></p></a>
							</td>	
						</tr></table>
						<?php endif; ?>


						<?php if( get_field('doc62') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc62'); ?>"><p><?php the_field('doc-name62'); ?></p></a>
							</td>	
						</tr></table>
						<?php endif; ?>

						<?php if( get_field('doc63') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc63'); ?>"><p><?php the_field('doc-name63'); ?></p></a>
							</td>	
						</tr></table>
						<?php endif; ?>

						<?php if( get_field('doc64') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc64'); ?>"><p><?php the_field('doc-name64'); ?></p></a>
							</td>	
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc65') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc65'); ?>"><p><?php the_field('doc-name65'); ?></p></a>
							</td>	
						</tr></table>
						<?php endif; ?>
						<?php if( get_field('doc66') ): ?>
						<table><tr class="stroka">
							<td class="red-book"><img class="red-book" src="<?php bloginfo('template_url')?>/images/red-book.png" alt=""></td>
							<td class="doc-text">
								<a href="<?php the_field('doc66'); ?>"><p><?php the_field('doc-name66'); ?></p></a>
							</td>	
						</tr></table>
						<?php endif; ?>
					<div class="articles-head">
						<?php the_content(); ?> 
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
				<div><?php the_field('slide8'); ?></div>
			</div><!-- .about-prepod  -->
			<div class="lecenzii">
				<a href="<?php bloginfo('template_url')?>/images/lic11.jpg" target="_blank" rel="prettyPhoto[gallery]">
                            <img src="<?php bloginfo('template_url')?>/images/licensia1.jpg" alt="">
                </a>
				<a href="<?php bloginfo('template_url')?>/images/lic22.jpg" target="_blank" rel="prettyPhoto[gallery]">
                            <img src="<?php bloginfo('template_url')?>/images/licensia2.jpg" alt="">
                </a>
			</div>
		</div><!-- .General area-->	
	</div><!-- #content -->
</div><!-- #primary -->
	
<div class="clear"></div>
<?php get_footer(); ?>