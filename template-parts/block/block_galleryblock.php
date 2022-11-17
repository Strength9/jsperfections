<?php
/*
Block Name: Gallery Section
Block Description: Gallery Section
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'gallerysection';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">'; return; } 
/* --------- */
include('______partials_global.php');

$gallery_title = ! empty( get_field('gallery_title') ) ? '<h1>'.get_field('gallery_title').'</h1>' : '';
$gallery_text_before = ! empty( get_field('gallery_text_before') ) ? get_field('gallery_text_before') : '';
$gallery_text_after = ! empty( get_field('gallery_text_after') ) ? get_field('gallery_text_after') : '';

// check if the repeater field has rows of data
if( have_rows('gallery_image') ):
$a = '';
$string = random_str(12);
	// loop through the rows of data
	while ( have_rows('gallery_image') ) : the_row();

		// display a sub field value
		$a .= '<a class="'.$string.'" href="'.get_sub_field('image_file').'" data-lightbox="'.$string.'" data-title="Click the right half of the image to move forward."><img class="'.$string.'" src="'.get_sub_field('image_file').'" alt=""/></a>';

	endwhile;

else :

	// no rows found

endif;



echo '<section '.$anchor.' class="'.$blockclass .'">
	<div class="wcp-columns">
		 <div class="wcp-column full">
		 '.$gallery_title .$gallery_text_before.$a.$gallery_text_after.'
		 
		 
		 </div>
	</div>
</section>';
?>
