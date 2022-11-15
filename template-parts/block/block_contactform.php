<?php
/*
Block Name: Contact Form
Block Description: Contact Form Block
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'contactform';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">'; return; } 
/* --------- */
include('______partials_global.php');




$telephone_numbercf = ! empty( get_field('telephone_number','options') ) ? '<li><a href="tel:'.get_field('telephone_number','options').'" title="Call the team"><i class="fa-light fa-phone"></i>'.get_field('telephone_number','options').'</a></li>' : '';
$email_addresscf = ! empty( get_field('email_address','options') ) ? '<li><a href="mailto:'.get_field('email_address','options').'" title="Email the team"><i class="fa-light fa-mailbox"></i>'.get_field('email_address','options').'</a></li>' : '';

$extra_information = ! empty( get_field('extra_information') ) ? get_field('extra_information') : '';



echo '<section '.$anchor.' class="'.$blockclass .'">
	<div class="wcp-columns">
		<div class="wcp-column infofields"><div class="holder">
		<img src="/wp-content/themes/jsperfections/assets/img/svg/JSLogos-white.svg" alt="" />
		<ul>'.$telephone_numbercf.$email_addresscf.'</ul></div></div>
		<div class="wcp-column textfields">
		'.$extra_information.'</div>
		<div class="wcp-column formfields">'.do_shortcode('[wpforms id="142"]').'</div>
	</div>
</section>';
?>
