<?php
/*
Block Name: Large Block Links
Block Description: Large Block Links
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'largelinks';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">'; return; } 
/* --------- */
include('______partials_global.php');

$section_title_LG = ! empty( get_field('section_title') ) ? '<h1>'.get_field('section_title').'</h1>' : '';

$section_text_LG = ! empty( get_field('section_text') ) ? get_field('section_text') : '';

$section_textsub_LG = ! empty( get_field('section_textsub') ) ? '<div class="linkfooter">'.get_field('section_textsub').'</div>' : '';

$data = '';
if( have_rows('cards') ):
	$data = '<div class="largelinkspos">';
	while( have_rows('cards') ) : the_row();
		
		$link = get_sub_field('card_link');
		if( $link ): 
			$link_url = $link['url'];
			$link_title = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';
		
		else :
			$link_url = '';
			$link_title = '';
			$link_target = '';
		endif; 

		$image = get_sub_field('card_image');
		if( $image ):
			$imageurl = $image['url'];
		else :
			$imageurl = '';
		endif;
		
		$data .= '<article  style="background-image:url('.esc_url($imageurl).');">
		<a href="'.esc_url( $link_url ).'" target="'.esc_attr( $link_target ).'">
		<h3>Preferred Supplier</h3>
		<h2>'.esc_html( $link_title ).'</h2>	  
		</a>
		</article>';
		
	endwhile;
	$data .= '</div>';
else :
	$data = '';
endif;




echo '<section '.$anchor.' class="'.$blockclass .'">
	'.$section_title_LG.$section_text_LG.$data.'
</section>';
?>
