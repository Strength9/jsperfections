<?php
/*
Block Name: Hero Header
Block Description: Hero Header
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'heroheader';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______partials_global.php');


$hero_text = ! empty( get_field('hero_text') ) ? '<h1>'.get_field('hero_text').'</h1>' : '';
$hero_size = ! empty( get_field('hero_size') ) ? get_field('hero_size') : 'home';

$hero_overlay = ! empty( get_field('hero_overlay') ) ? get_field('hero_overlay') : 'rgba(255,255,255,0.3)';

$hero_background = ! empty( get_field('hero_background') ) ? 'style="background:linear-gradient(0deg,'.$hero_overlay.', '.$hero_overlay.'), url('.get_field('hero_background').');"' : '';


/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .' ' .$hero_size.'" '.$hero_background.'>
	<div class="wcp-columns">
	 	<div class="wcp-column full">
		 	<div class="herocontainer">'
			 	.$hero_text.'
		 		<img src="/wp-content/themes/jsperfections/assets/img/svg/JSLogos-white.svg" alt="" />
		 	</div>
		 </div>
	</div>
</section>';
?>
