<?php
 add_action('init', 'coloriva_main_menu');
 function coloriva_main_menu(){
	 register_nav_menus(array(
		'main_menu' => 'Main Menu'
	 ));	 
 }
 
function coloriva_main_default_menu() {
	echo '<ul class="nav navbar-nav">';
	if ('page' != get_option('show_on_front')) {
		echo '<li><a href="'. site_url() . '/">Home</a></li>';
	}
	wp_list_pages('title_li=');
	echo '</ul>';
}
?>