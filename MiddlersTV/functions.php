<?php 
	
	/**
	* All general styles & scripts
	**/

	function load_style_script() {
		wp_enqueue_script('bootstrap_min', get_template_directory_uri() . '/js/bootstrap.min.js');
		wp_enqueue_style('style',  get_template_directory_uri() . '/style.css');
		wp_enqueue_style('bootstrap_style',  get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('bxslider',  get_template_directory_uri() . '/css/jquery.bxslider.css');
		wp_enqueue_style('bxslider',  get_template_directory_uri() . '/css/jquery.formstyler.css');
		
	}
	add_action('wp_enqueue_scripts', 'load_style_script');

	register_sidebar(array(
		'name' => 'Menu',
		'id' => 'menu_header',
		'before_widget' => '',
		'after_widget' => ''
		));
	
	add_theme_support('post-thumbnails');
	

	function new_excerpt_length($length) {   
		$length = 7;
	    return $length;
	}   
	add_filter('excerpt_length', 'new_excerpt_length');
	
	function new_excerpt_more($more) {
	return '...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
	
	function the_content_limit($max_char, $more_link_text = '(Читать полностью &rarr;)', $stripteaser = 0, $more_file = '') {
	    $content = get_the_content($more_link_text, $stripteaser, $more_file);
	    $content = apply_filters('the_content', $content);
	    $content = str_replace(']]>', ']]&gt;', $content);
	    $content = strip_tags($content);

	if ((strlen($_GET['p']) > 0) && ($espacio = strpos($content, " ", $max_char ))) {
	     $content = substr($content, 0, $espacio);
	      $content = $content;
	  
	   }
	   else if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {
	       $content = substr($content, 0, $espacio);
	        $content = $content;
	        echo "<p>";
	        echo $content;
	        echo "...";
	        echo "&nbsp;<a href='";
	       the_permalink();
	       echo "'>".$more_link_text."</a>";
	        echo "</p>";
	   }
	   else {
	      echo "<p>";
	      $content = substr($content, 0, -30);
	      echo $content."...";
	      echo "</p>";
	   }
	}
	

	register_sidebar(array(
	'name'=>'sidebar-bottom',
	'id' => 'sidebar-bottom',
	));

	register_sidebar(array(
	'name'=>'menu-register',
	'id' => 'menu-register',
	));

	register_sidebar(array(
	'name'=>'slider-text',
	'id' => 'slider-text',
	));

	register_sidebar(array(
	'name'=>'slider-text2',
	'id' => 'slider-text2',
	));
	register_sidebar(array(
	'name'=>'footer-menu',
	'id' => 'footer-menu',
	));
	register_sidebar(array(
	'name'=>'footer-menu2',
	'id' => 'footer-menu2',
	));
	register_sidebar(array(
	'name'=>'igroteka-sidebar',
	'id' => 'igroteka-sidebar',
	));
	
	add_action('init', 'translations');
	function translations(){
		$labels = array(
			 'name' => 'Название видео' // основное название для типа записи
			,'singular_name' => 'Лечшее видео' // название для одной записи этого типа
			,'add_new' => 'Добавить новое видео' // для добавления новой записи
			,'add_new_item' => 'Добавление видео (миниатюра к этому видео должна быть (560x315)px) !!! ' // заголовка у вновь создаваемой записи в админ-панели.
			,'edit_item' => 'Редактировать запись с видео' // для редактирования типа записи
			,'new_item' => '' // текст новой записи
			,'view_item' => '' // для просмотра записи этого типа.
			,'search_items' => '' // для поиска по этим типам записи
			,'not_found' => 'Нет ни одной записи по вашему запросу' // если в результате поиска ничего не было найдень
			,'not_found_in_trash' => '' // если не было найдено в корзине
			,'parent_item_colon' => '' // для родительских типов. для древовидных типов
			,'menu_name' => 'Лучшие видео' // название меню
		);
		$args = array(
			 'label' => null 
			,'labels' => $labels 
			,'description' => '' 
			,'public' => true 
			,'publicly_queryable' => true
			,'exclude_from_search' => null
			,'show_ui' => true
			,'show_in_menu' => true 
			,'menu_position' => null 
			,'menu_icon' => null 
			,'capability_type' => 'post' 
			,'hierarchical' => false
			,'supports' => array('title','editor', 'thumbnail')
			,'taxonomies' => array('post_tag')
			,'has_archive' => true
			,'rewrite' => true
			,'query_var' => true
			,'show_in_nav_menus' => null
		);
		register_post_type( 'video', $args );
	}
	
	// Add new post type - text-sleder-message
	add_action('init', 'text_slider1');
	function text_slider1(){
		$labels = array(
			 'name' => 'Сообщение в первом текстовом слайдере' // основное название для типа записи
			,'singular_name' => 'Сообщение в текстовом первом слайдере' // название для одной записи этого типа
			,'add_new' => 'Добавить сообщение в первом текстовом слайдере' // для добавления новой записи
			,'add_new_item' => 'Добавление сообщения' // заголовка у вновь создаваемой записи в админ-панели.
			,'edit_item' => 'Редактировать сообщене' // для редактирования типа записи
			,'new_item' => '' // текст новой записи
			,'view_item' => '' // для просмотра записи этого типа.
			,'search_items' => '' // для поиска по этим типам записи
			,'not_found' => 'Нет ни одной записи по вашему запросу' // если в результате поиска ничего не было найдень
			,'not_found_in_trash' => '' // если не было найдено в корзине
			,'parent_item_colon' => '' // для родительских типов. для древовидных типов
			,'menu_name' => 'Текстовый слайдер 1' // название меню
		);
		$args = array(
			 'label' => null 
			,'labels' => $labels 
			,'description' => '' 
			,'public' => true 
			,'publicly_queryable' => true
			,'exclude_from_search' => null
			,'show_ui' => true
			,'show_in_menu' => true 
			,'menu_position' => null 
			,'menu_icon' => null 
			,'capability_type' => 'post' 
			,'hierarchical' => false
			,'supports' => array('title','editor', 'thumbnail')
			,'taxonomies' => array('')
			,'has_archive' => true
			,'rewrite' => true
			,'query_var' => true
			,'show_in_nav_menus' => null
		);
		register_post_type( 'text_slider1', $args );
	}
	
	// Add new post type - text-sleder-message
	add_action('init', 'text_slider2');
	function text_slider2(){
		$labels = array(
			 'name' => 'Сообщение во втором текстовом слайдере' // основное название для типа записи
			,'singular_name' => 'Сообщение в текстовом втором слайдере' // название для одной записи этого типа
			,'add_new' => 'Добавить сообщение во втором текстовом слайдере' // для добавления новой записи
			,'add_new_item' => 'Добавление сообщения' // заголовка у вновь создаваемой записи в админ-панели.
			,'edit_item' => 'Редактировать сообщене' // для редактирования типа записи
			,'new_item' => '' // текст новой записи
			,'view_item' => '' // для просмотра записи этого типа.
			,'search_items' => '' // для поиска по этим типам записи
			,'not_found' => 'Нет ни одной записи по вашему запросу' // если в результате поиска ничего не было найдень
			,'not_found_in_trash' => '' // если не было найдено в корзине
			,'parent_item_colon' => '' // для родительских типов. для древовидных типов
			,'menu_name' => 'Текстовый слайдер 2' // название меню
		);
		$args = array(
			 'label' => null 
			,'labels' => $labels 
			,'description' => '' 
			,'public' => true 
			,'publicly_queryable' => true
			,'exclude_from_search' => null
			,'show_ui' => true
			,'show_in_menu' => true 
			,'menu_position' => null 
			,'menu_icon' => null 
			,'capability_type' => 'post' 
			,'hierarchical' => false
			,'supports' => array('title','editor', 'thumbnail')
			,'taxonomies' => array('')
			,'has_archive' => true
			,'rewrite' => true
			,'query_var' => true
			,'show_in_nav_menus' => null
		);
		register_post_type( 'text_slider2', $args );
	}

	add_action('init', 'igroteka_func');
	function igroteka_func(){
		$labels = array(
			 'name' => 'Игры в игротеке' // основное название для типа записи
			,'singular_name' => 'Игра в игротеке' // название для одной записи этого типа
			,'add_new' => 'Добавить игру в игротеку' // для добавления новой записи
			,'add_new_item' => 'Добавление игры в игротеку' // заголовка у вновь создаваемой записи в админ-панели.
			,'edit_item' => 'Редактировать игру в игротеке' // для редактирования типа записи
			,'new_item' => '' // текст новой записи
			,'view_item' => '' // для просмотра записи этого типа.
			,'search_items' => '' // для поиска по этим типам записи
			,'not_found' => 'Нет ни одной игры в игротеке по запросу' // если в результате поиска ничего не было найдень
			,'not_found_in_trash' => '' // если не было найдено в корзине
			,'parent_item_colon' => '' // для родительских типов. для древовидных типов
			,'menu_name' => 'Игротека' // название меню
		);
		$args = array(
			 'label' => null 
			,'labels' => $labels 
			,'description' => '' 
			,'public' => true 
			,'publicly_queryable' => true
			,'exclude_from_search' => null
			,'show_ui' => true
			,'show_in_menu' => true 
			,'menu_position' => null 
			,'menu_icon' => null 
			,'capability_type' => 'post' 
			,'hierarchical' => false
			,'supports' => array('title','editor', 'thumbnail', 'comments', 'tags')
			,'taxonomies' => array('post_tag')
			,'has_archive' => true
			,'rewrite' => true
			,'query_var' => true
			,'show_in_nav_menus' => null
		);
		register_post_type( 'igroteka', $args );
	}
	if (current_user_can('streamer')) {  // замените роль 'author' на другую по вашему выбору
	  if (is_admin()) {
	 
	    function limit_categories_for_role($exclusions) {
	 
	      $cats_to_exclude = array(1, 6);  // вставьте сюда идентификаторы блокируемых категорий
	      foreach ($cats_to_exclude as $cat_id) {
	        $exclusions .= " AND (t.term_id<>$cat_id)";
	      }
	 
	      return $exclusions;
	    }
	 
	    add_filter('list_terms_exclusions', 'limit_categories_for_role');
	  }
	}

	function the_field666( $field_name, $post_id = false ) {
	
		$value = get_field($field_name, $post_id);
		
		if( is_array($value) )
		{
			$value = @implode(', ',$value);
		}
		
		return $value;
	}
	// fix for display all post_types in tag pages
	function post_type_tags_fix($request) {
	    if ( isset($request['tag']) && !isset($request['post_type']) )
	    $request['post_type'] = 'any';
	    return $request;
	}
	add_filter('request', 'post_type_tags_fix');
	
	function count_user_posts_by_type($userid, $post_type='any') {
	  global $wpdb;
	  $where = get_posts_by_author_sql($post_type, TRUE, $userid);
	  $count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts $where" );
	  return apply_filters('get_usernumposts', $count, $userid);
	}











?>