<?php
/*
Template Name: Contacts
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
			<div class="col-1">
				
				<div class="cont-boxes">
					<ul class="cont-box1">
						<li class="cont"><i class="cont-ico ci1"></i><span>Иртышская наб., 40</span> +7 (3812)31-42-44</li>
						<li class="cont"><i class="cont-ico ci2"></i><span>Иртышская наб., 35</span> + 7 (3812)31-44-90</li>
						<li class="cont"><i class="cont-ico ci3"></i><span>Стальского, 3</span></li>
					</ul>
					<ul class="cont-box2">
						<li><span>ФАКС:</span> + 7 (3812)31-44-54</li>
						<li><span>Приёмная, директор:</span> + 7 (3812) 31-44-54</li>
						<li><span>E-mail:</span> artschool1omsk@yandex.ru</li>
					</ul>
				</div>
				<div class="rekvizits">
					<h4>Полные реквизиты организации</h4>
					<p>
						бюджетное образовательное учреждение дополнительного образования <br>
						«Детская художественная школа № 1 имени Саниных» города Омска <br>
						Адрес: 644048, г. Омск, ул. Иртышская набережная, 40 <br>
						Р/сч 40701810400003001116 <br>
						ГРКЦ ГУ Банка России по Омской области г.Омск <br>
						БИК 045209001 <br>
						л/с 918.02.020.8 <br>
						ОКПО 516 274 56 <br>
						ОКВЭД 80.103 Дополнит. образование детей <br>
						ИНН 5505028952 <br>
						КПП 550501001 <br>
						ОГРН 1025501167230 <br> <br>

						Директор Тимофеев Валерий Валентинович (на основании Устава) <br>
						тел. 31-44-54 <br>
						E-mail: artschool1omsk@yandex.ru <br>
					</p>
				</div>
			</div>
			<div class="map">
				<iframe width="600" height="625" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ru/maps/ms?msa=0&amp;msid=207462169684144603919.0004f6f1bebdfda31fde5&amp;ie=UTF8&amp;t=m&amp;ll=54.945041,73.378286&amp;spn=0.017254,0.036478&amp;z=14&amp;output=embed"></iframe>
			</div>
		</div>
	</section>

<?php get_footer(); ?>