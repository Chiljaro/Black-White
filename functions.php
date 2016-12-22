<?php 
register_nav_menus( array(
	'menu' => 'Menu superior',
	));

add_theme_support('post-thumbnails');
add_image_size('slider_thumbs, 490, 300,true');
add_image_size('list_articles_thumbs, 450, 370, true');

register_sidebar(array(
	'name' => 'Sidebar',
	'before_widget' => '<div class="sidebar-block">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="sidebar-block_title">',
	'after_title' => '</h2>'
	));
 ?>