<?php
function button_shortcode($atts, $content = null){
	extract(shortcode_atts(array (
	'link' => '',
	'type' => '',
	'text' => '',
	'icon' => '',
	), $atts));
	if($icon):
		return'<a class="btn btn-'.$type.'" href="'.$link.'"><i class="fa fa-'.$icon.'"></i>'.$text.'</a>';
	else:
	return'<a class="btn btn-'.$type.'" href="'.$link.'">'.$text.'</a>';
	endif;
}
add_shortcode('btn', 'button_shortcode');

//button with icon
/** function icon_button_shortcode($atts, $content = null){
	extract(shortcode_atts(array (
	'link' => '',
	'type' => '',
	'icon' => '',
	'text' => '',
	), $atts));
	return'<a class="btn btn-'.$type.'" href="'.$link.'"><i class="fa fa-'.$icon.'"></i>'.$text.'</a>'; 
}
add_shortcode('icon_btn', 'icon_button_shortcode');**/



 function pricing_table_shortcode($atts, $content = null){
	extract(shortcode_atts(array (
	'heading1' => 'Very',
	'heading2' => 'Basic',
	'price' => '15.00 / Month',
	'btn_link' => '#',
	'btn_text' => 'Register Now',
	'btn_type' => 'theme',
	'btn_icon' => 'bolt',
	'column' => '4',
	), $atts));
	return'			
		<div class="col-lg-'.$column.'">
			<div class="pricing-box-alt">
				<div class="pricing-heading">
					<h3>'.$heading1.' <strong>'.$heading2.'</strong></h3>
				</div>
				<div class="pricing-terms">
					<h6>'.$price.'</h6>
				</div>
				<div class="pricing-content">
					'.$content.'
				</div>
				<div class="pricing-action">
					<a href="'.$btn_link.'" class="btn btn-medium btn-'.$btn_type.'"><i class="fa fa-'.$btn_icon.'"></i> '.$btn_text.'</a>
				</div>
			</div>
		</div>
			'; 
}
add_shortcode('pricing', 'pricing_table_shortcode');

?>