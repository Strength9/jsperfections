<?php
/*
Block Name: Coupons
Block Description: Contact Block
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'coupon';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______partials_global.php');

/*
coupon_background
coupon_title

coupon_form
 --------------------------------------------------------------------------- */
 
 $coupon_title = ! empty( get_field('coupon_title') ) ? '<h2>'.get_field('coupon_title').'</h2>' : 'Coupon Title';
 $coupon_text = ! empty( get_field('coupon_text') ) ? get_field('coupon_text') : 'Text';
 $coupon_background = ! empty( get_field('coupon_background') ) ? 'style="background-image:url('.get_field('coupon_background').');"' : '';
 $coupon_form = ! empty( get_field('coupon_form') ) ? get_field('coupon_form') : '';
 
echo '<section '.$anchor.' class="'.$blockclass .'">
	<div class="couponholder"  '.$coupon_background.'>
	 	<div class="coupontext">'. $coupon_title.$coupon_text.'</div>
	 	<div class="couponform">'.$coupon_form.'</div>
	</div>
</section>';
?>
