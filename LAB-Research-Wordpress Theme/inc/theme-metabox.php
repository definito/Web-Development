<?php
function titan_metaboxes(){
	$titan = TitanFramework::getInstance("tf");
	
	/*This section for author designation. \Start*/
	$mb1 = $titan->createMetaBox(array(
		"name"=>"Author Designation",
		"post_type"=>array("author")
	));
	
	$mb1->createOption(array(
		"name"=>"Author Author Designation", 
		"type"=>"text", 
		"id"=>"mb_food", 
		"default"=>"Ice-cream", 
		"desc"=>"The name of your favourate food"
	));
	/*This section for author designation. \end*/
	
	
	/*This section for feature icon. \start*/	
	$mb2 = $titan->createMetaBox(array(
		"name"=>"Feature",
		"post_type"=>array("feature")
	));	
	$mb2->createOption(array(
		"name"=>"Feature Icon", 
		"type"=>"text", 
		"id"=>"mb_drink", 
		"default"=>"fa-flag-o", 
		"desc"=>"Add font-awesome icon class"
	));
	/*This section for feature icon. \end*/	

	
	/*This section for pricing table. \start*/		
	$mb3 = $titan->createMetaBox(array(
		"name"=>"Price Table",
		"post_type"=>array("price")
	));	
	$mb3->createOption(array(
		"name"=>"price", 
		"type"=>"text", 
		"id"=>"mb_price", 
		"default"=>"$49", 
	));
	$mb3->createOption(array(
		"name"=>"Price Length", 
		"type"=>"text", 
		"id"=>"mb_price_ln", 
		"default"=>"Week/ Mo /yr", 
	));
	$mb3->createOption(array(
		"name"=>"Feature 1", 
		"type"=>"text", 
		"id"=>"mb_price_f1", 
		"default"=>"Lorem Ipsum is simply dummy", 
	));
	$mb3->createOption(array(
		"name"=>"Feature 2", 
		"type"=>"text", 
		"id"=>"mb_price_f2", 
		"default"=>"Lorem Ipsum is simply dummy", 
	));
	$mb3->createOption(array(
		"name"=>"Feature 3", 
		"type"=>"text", 
		"id"=>"mb_price_f3", 
		"default"=>"Lorem Ipsum is simply dummy", 
	));
	$mb3->createOption(array(
		"name"=>"Feature 4", 
		"type"=>"text", 
		"id"=>"mb_price_f4", 
		"default"=>"Lorem Ipsum is simply dummy", 
	));
	$mb3->createOption(array(
		"name"=>"Feature 5", 
		"type"=>"text", 
		"id"=>"mb_price_f5", 
		"default"=>"Lorem Ipsum is simply dummy", 
	));
	$mb3->createOption(array(
		"name"=>"Payment url", 
		"type"=>"text", 
		"id"=>"mb_price_url", 
		"default"=>"http://www.example.com", 
	));
	/*This section for pricing table. \end*/	
	/*This section for feature icon. \start*/	
	$mb4 = $titan->createMetaBox(array(
		"name"=>"Best Sell Price",
		"post_type"=>array("best-sell")
	));	
	$mb4->createOption(array(
		"name"=>"Best Sell Price", 
		"type"=>"text", 
		"id"=>"mb_best_sell", 
		"default"=>"$1, 449.00", 
		"desc"=>"Add Price here."
	));
	/*This section for feature icon. \end*/	
	
	

	$panel = $titan->createAdminPanel( array(
    'name' => 'Theme Options',
	));
	/* Header Setting start*/
	$header_tab = $panel->createTab( array(
    'name' => 'Header Options',
	));

	$header_tab->createOption( array(
    'name' => 'Header Telephone No.',
    'id' => 'hd_telephone',
    'type' => 'text',
    'default' => '+1 510 23456789',
	));

	$header_tab->createOption( array(
    'name' => 'Logo',
    'id' => 'img_logo',
    'type' => 'upload',
    'desc' => 'Please upload your logo here. If you want to text logo then please use field bellow.',
	));

	$header_tab->createOption( array(
    'name' => 'Text Logo',
    'id' => 'text_logo',
    'type' => 'text',
    'desc' => 'Write your text logo here',
	));
	/* Header Setting end*/	
	
	
	/* Footer Setting start*/	
	$footer_tab = $panel->createTab( array(
    'name' => 'Footer Options',
	));

	$footer_tab->createOption( array(
    'name' => 'Footer Text',
    'id' => 'footer_text',
    'type' => 'text',
    'default' => '© All Rights Reserved 2014.',
	));
	
	$footer_tab->createOption( array(
    'name' => 'Footer social1 url',
    'id' => 'footer_scoial1',    
	'type' => 'text',
    'default' => 'www.facebook.com',
	));		
	$footer_tab->createOption( array(
    'name' => 'Footer social1 icon class',
    'id' => 'footer_scoial1_icon',    
	'type' => 'text',
    'default' => 'fa-facebook',
	));		
	$footer_tab->createOption( array(
    'name' => 'Footer social2 url',
    'id' => 'footer_scoial2',
	'type' => 'text',
    'default' => 'www.twitter.com',
	));		
	$footer_tab->createOption( array(
    'name' => 'Footer social2 icon class',
    'id' => 'footer_scoial2_icon',
	'type' => 'text',
    'default' => 'fa-twitter',
	));		
	$footer_tab->createOption( array(
    'name' => 'Footer social3 url',
    'id' => 'footer_scoial3',
	'type' => 'text',
    'default' => 'www.plus.google.com',
	));		
	$footer_tab->createOption( array(
    'name' => 'Footer social3 icon class',
    'id' => 'footer_scoial3_icon',
	'type' => 'text',
    'default' => 'fa-google-plus',
	));		
	$footer_tab->createOption( array(
    'name' => 'Footer social4 url',
    'id' => 'footer_scoial4',
	'type' => 'text',
    'default' => 'www.pinterest.com',
	));		
	$footer_tab->createOption( array(
    'name' => 'Footer social4 icon class',
    'id' => 'footer_scoial4_icon',
	'type' => 'text',
    'default' => 'fa-pinterest',
	));		
	$footer_tab->createOption( array(
    'name' => 'Footer social5 url',
    'id' => 'footer_scoial5',
	'type' => 'text',
    'default' => 'www.dribbble.com',
	));		
	$footer_tab->createOption( array(
    'name' => 'Footer social5 icon class',
    'id' => 'footer_scoial5_icon',
	'type' => 'text',
    'default' => 'fa-dribbble',
	));	

	/* Footer Setting end*/	
	
	
	/* Home page Setting start*/	
	$home_tab = $panel->createTab( array(
    'name' => 'Home Page',
	));

	$home_tab->createOption( array(
	'name' => 'About Author',
    'id' => 'radio_about_author',
    'options' => array(
        '1' => 'Yes, I want to show this section',
        '2' => 'No, I do not want to show this section',
    ),
    'type' => 'radio',
    'desc' => 'Select one, If yes, then please use #about in your navigation setting',
    'default' => '2',
	));	
	$home_tab->createOption( array(
	'name' => 'Book Info Section',
    'id' => 'radio_book_info',
    'options' => array(
        '1' => 'Yes, I want to show this section',
        '2' => 'No, I do not want to show this section',
    ),
    'type' => 'radio',
    'desc' => 'Select one, If yes, then please use #book-info in your navigation setting',
    'default' => '2',
	));
	$home_tab->createOption( array(
	'name' => 'Feature Section',
    'id' => 'radio_features',
    'options' => array(
        '1' => 'Yes, I want to show this section',
        '2' => 'No, I do not want to show this section',
    ),
    'type' => 'radio',
    'desc' => 'Select one, If yes, then please use #features in your navigation setting',
    'default' => '2',
	));	
	$home_tab->createOption( array(
	'name' => 'Pricing Table Section',
    'id' => 'radio_price',
    'options' => array(
        '1' => 'Yes, I want to show this section',
        '2' => 'No, I do not want to show this section',
    ),
    'type' => 'radio',
    'desc' => 'Select one, If yes, then please use #pricing-table in your navigation setting',
    'default' => '2',
	));
	$home_tab->createOption( array(
	'name' => 'Best Sell Section',
    'id' => 'radio_best_sell',
    'options' => array(
        '1' => 'Yes, I want to show this section',
        '2' => 'No, I do not want to show this section',
    ),
    'type' => 'radio',
    'desc' => 'Select one, If yes, then please use #best-sell in your navigation setting',
    'default' => '2',
	));
	$home_tab->createOption( array(
	'name' => 'Review Section',
    'id' => 'radio_review',
    'options' => array(
        '1' => 'Yes, I want to show this section',
        '2' => 'No, I do not want to show this section',
    ),
    'type' => 'radio',
    'desc' => 'Select one',
    'default' => '2',
	));	
	$home_tab->createOption( array(
	'name' => 'Blog Section',
    'id' => 'radio_blog',
    'options' => array(
        '1' => 'Yes, I want to show this section',
        '2' => 'No, I do not want to show this section',
    ),
    'type' => 'radio',
    'desc' => 'Select one, If yes, then please use #blog in your navigation setting',
    'default' => '2',
	));	
	/* Home page Setting end*/		
	
	
	
	
	/* Contact Section Setting Start*/		
	$contact_tab = $panel->createTab( array(
    'name' => 'Contact Section Setting',
	));

	$contact_tab->createOption( array(
	'name' => 'Contact Section',
    'id' => 'radio_contact',
    'options' => array(
        '1' => 'Yes, I want to show this section',
        '2' => 'No, I do not want to show this section',
    ),
    'type' => 'radio',
    'desc' => 'Select one, If yes, then please use #contact in your navigation setting and keep updated bellow fields',
    'default' => '2',
	));	
	$contact_tab->createOption( array(
	'name' => 'Contact Section',
    'id' => 'radio_contact_shortcode',
    'type' => 'text',
    'default' => '[contact-form-7 id="223" title="Contact form 1"]',
    'desc' => 'Please put here contact form 7 short code',
	));	
	$contact_tab->createOption( array(
	'name' => 'Map Latitude Section',
    'id' => 'radio_contact_map_latitude',
    'type' => 'text',
    'desc' => 'Please put here Latitude of your desired place',
	'default' => '23.7',
	));		
	$contact_tab->createOption( array(
	'name' => 'Map Longitude Section',
    'id' => 'radio_contact_map_longititude',
    'type' => 'text',
    'desc' => 'Please put here Longitude of your desired place',
	'default' => '90.3750',
	));		
	/* Contact Section Setting End*/	
	
	
	
	
//////////////////////////////////
/*Save all options in admin panel*/	
	$panel->createOption( array(
    'type' => 'save'
	));
/////////////////////////////////

}
add_action("tf_create_options","titan_metaboxes");

