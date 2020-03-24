<?php
function authors_custom_post(){
	
	//This is for slider section
	register_post_type('slide', array(
		'public' => true,
		'label' => 'Slide',
		'labels' => array(
			'name' => 'Slides',
			'singular_name' => 'Slide',
			'add_new' => 'Add New Slide'
		),
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
	));	
	
	//This is for about author section
	register_post_type('author', array(
		'public' => true,
		'label' => 'About Author',
		'labels' => array(
			'name' => 'Author',
			'singular_name' => 'Author',
			'add_new' => 'Manage Author'
		),
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt')
	));	
	
	//This is for about book info slider section
	register_post_type('bi-slider', array(
		'public' => true,
		'label' => 'Book Info Slider',
		'labels' => array(
			'name' => 'Book Images',
			'singular_name' => 'Books',
			'add_new' => 'Add New Book Image'
		),
		'supports' => array('title', 'thumbnail')
	));	
	
	//This is for book info text section
	register_post_type('bi-text', array(
		'public' => true,
		'label' => 'Book Info Text',
		'labels' => array(
			'name' => 'Book Text',
			'singular_name' => 'Books',
			'add_new' => 'Add New Book Text'
		),
		'supports' => array('title', 'editor')
	));	
	
	//This is for Feature section
	register_post_type('feature', array(
		'public' => true,
		'label' => 'Features',
		'labels' => array(
			'name' => 'Features',
			'singular_name' => 'Features',
			'add_new' => 'Add New Feature'
		),
		'supports' => array('title', 'editor')
	));	
	
	//This is for Pricing section
	register_post_type('price', array(
		'public' => true,
		'label' => 'Price Table',
		'labels' => array(
			'name' => 'Price Table',
			'singular_name' => 'Price',
			'add_new' => 'Add New Price Table'
		),
		'supports' => array('title')
	));	
	
	//This is for Best Sell section
	register_post_type('best-sell', array(
		'public' => true,
		'label' => 'Best Sell',
		'labels' => array(
			'name' => 'Best Sell',
			'singular_name' => 'Best Sell',
			'add_new' => 'Best Sell books'
		),
		'supports' => array('title', 'editor', 'thumbnail')
	));	
	
	//This is for Testimonial section
	register_post_type('testimonial', array(
		'public' => true,
		'label' => 'Testimonial',
		'labels' => array(
			'name' => 'Testimonial',
			'singular_name' => 'Testimonial',
			'add_new' => 'Add Testimonial'
		),
		'supports' => array('title', 'editor')
	));	
	
	//This is for Blog section
	register_post_type('author-blog', array(
		'public' => true,
		'label' => 'Blog',
		'taxonomies' => array('category'), 
		'show_ui' => true,
		'labels' => array(
			'name' => 'Blog',
			'singular_name' => 'Blog',
			'add_new' => 'Add Blog'
		),
		'supports' => array('title', 'editor', 'thumbnail',)
	));	

	
	
}
add_action('init', 'authors_custom_post');
?>