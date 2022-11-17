<?php
/*
Block Name: Quote Separator
Block Description: Quote Separator Strip
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'quotedivider';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______partials_global.php');

/* --------------------------------------------------------------------------- */
 
 $quote_text = ! empty( get_field('quote_text') ) ? get_field('quote_text') : 'quote text';
 
echo '<section '.$anchor.' class="'.$blockclass .' small">
	<div class="lined"><div class="ct">'.$quote_text.'</div></div>
</section>';
?>
