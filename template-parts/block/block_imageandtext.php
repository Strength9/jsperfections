<?php
/*
Block Name: Image and Text
Block Description: Image and Text
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'imageandtext';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______partials_global.php');

/* --------------------------------------------------------------------------- */
 
 $imageside = ! empty( get_field('content_position') ) ? get_field('content_position') : 'image_left';
 $textarea = ! empty( get_field('content_text') ) ? '<div class="contentside">'.get_field('content_text').'</div>' : '<div class="wcp-column contentside">Text</div>';
 $imagesq = ! empty( get_field('content_background') ) ? '<div class="wcp-column imageside" style="background-image:url('.get_field('content_background').');"></div>' : '<div class="wcp-column imageside"></div>';

echo '<section '.$anchor.' class="'.$blockclass .'">
    <div class="wcp-columns '.$imageside.'">
     '.$textarea.$imagesq.' 
</div>
</section>';
?>
