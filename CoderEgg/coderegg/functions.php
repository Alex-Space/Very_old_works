<?php 

	if (function_exists('add_theme_support')) {
	 add_theme_support('menus');
	}

	// Number of words in anons
	function content($limit) {
	  $content = explode(' ', get_the_content(), $limit);
	  if (count($content)>=$limit) {
	    array_pop($content);
	    $content = implode(" ",$content).'...';
	  } else {
	    $content = implode(" ",$content);
	  }           
	  $content = preg_replace('/\[.+\]/','', $content);
	  $content = apply_filters('the_content', $content);
	  $content = str_replace(']]>', ']]&gt;', $content);
	  return $content;
	}









 ?>