<?php
/*
Template Name: Prepod page
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
<div id="primary" class="site-content">
		<div id="content" role="main">
		<?php navigation_left (); ?>
		<div class="general-area">
			<div class="foto-button-box">
				<div class="foto-inner">
					<img src="http://www.artschool1omsk.ru/images/foto/Sanin.jpg" alt="">
				</div>
				<div class="button-port"><a href="#">Работы<br> преподавателя</a></div>
			</div>
			<div class="about-prepod" id="content_1">
			 <h1>Санин Игорь Александрович</h1>
			 <h3>Род. 7.11.1939 г. Омск</h3>
			 <h3>График</h3>
			 <h3>Член СХ с 1977 </h3>
			 <h3>Заслуженный художник России</h3>

				<p>
					В 1963 году окончил Свердловское художественное училище на художественно-педагогическое отделение (педагоги И.Т. Колодин, Ю.М. Ефимов, Н.Г. Чесноков, А.Е. Сосновская, С.П. Ярков). Дипломная работа «У переезда» (Х., м.), руководитель Н.Г. Чесноков. Окончил с отличием
				</p>
 				<p>
 					В 1971 году окончил Московский полиграфический институт, факультет художественно-технического оформления печатной продукции (заочно). 1971-73 – учился в экспериментальной студии художественного проектирования под руководством Е.А. Розенблюма (Москва)
 				</p>
				 <p>
				 	С 1975 – работает в вечерней ДХШ № 1 
				 	Неоднократно избирался в правление Омской организации СХ РСФСР, постоянно является членом Художественного совета, председатель творческой комиссии при Омской организации СХ РСФСР (с 2001)
				 </p>
				 <p>
				 	Игорь Санин – один из самых известных и активных художников г. Омска. Он постоянный участник выставок от областных до всесоюзных и международных, а также специализированных выставок акварели и рисунка, например, Международной выставки графики (Франция, 2001 год), Всероссийской выставки акварели (Курган, 2002 год). 
				 </p>
				 <p>
				 	Около 30 лет Игорь Александрович работает в одной из лучших детских художественных школ Омска № 1. Его воспитанники с честью продолжают дело своего учителя: многие ученики Игоря Александровича являются членами Союза художников России, среди них есть преподаватели детских художественных школ и институтов. 
				 </p>
				 <p>
				 	И.А. Санин удостоен многими дипломами значительных выставок, является лауреатом губернаторской премии, В 2005 году - Игорь Александрович Государственный стипендиат Министерства культуры РФ. В 2007 году ему присвоено почётное звание "Заслуженный художник России".
				 </p>
				 <p>
				 	Творческие дачи: «Челюскинская» (1970, 1972, рук. И.Г. Некрасов; 1976, рук. А.П. Плахов), «Сенеж» (1975, рук. Е.А. Розенблюм); отборочный семинар в экспериментальную студию художественного проектирования (Новосибирск, 1970, рук. Е.А. Розенблюм) 
				 	Творческие поездки: Алтай, Горная Шория (1978), на агиттеплоходе «Макаренко» на север до Салехарда и Надыма (1979); Смоленская область (1987), по бассейну р. Лены, Тува (1996), Омская область
				 </p>
				 <p>
				 	Работает в технике акварели. Ведущий жанр – пейзаж. 
				 	Произведения Игоря Санина находятся в фондах музеев городов: Москвы, Омска, Новосибирска, Искитима, Звёздного городка (Москва), Тары, Ханты-Мансийска, Уфы, Кирова, Кемерова, Кургана, Томска, Тулы, Иркутска, в частных коллекциях и галереях Германии, Китая, США, Франции, Финляндии, Японии. Множество картин подарены автором детским домам и больницам Омской области.
				 </p>
			</div>
			
			<div id="myExample" style="width: 632px; height:500px;margin: auto; visibility: hidden /* trick to hide loading images before Theatre kicks in */;">
		      <a href="" target="_blank">
		        <img src="<?php the_sub_field('slide1'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		      <a href="10.jpg" target="_blank">
		       	<img src="<?php the_sub_field('slide2'); ?>" style="height: 236px; width: 320px;"/>
		      </a>
		    </div>
		</div><!-- .general-area -->
		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>