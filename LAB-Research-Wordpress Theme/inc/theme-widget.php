<?php
function business_theme_widgets(){
	register_sidebar(array(
		'name' => 'Footer Widget',
		'id' => 'footer_wid',
		'description' => 'Use this widget for your site content',
		'before_widget' => '<div class="col-lg-3"><div class="widget">',
		'after_widget' => '</div></div>',
		'before_title' => '<h5 class="widgetheading">',
		'after_title' => '</h5">'
	));
}
add_action('widgets_init', 'business_theme_widgets');
?>