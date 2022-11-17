<?php
/*
Block Name: Block Intro
Block Description: Block Intro
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'pageintro';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">'; return; } 
/* --------- */
include('______partials_global.php');




$block_introduction = ! empty( get_field('block_introduction') ) ? get_field('block_introduction') : '';
$show_kisses = ! empty( get_field('show_kisses') ) ? get_field('show_kisses') : false;

echo '<section '.$anchor.' class="'.$blockclass .'">
	<div class="wcp-columns">
		 <div class="wcp-column full">'.$block_introduction.'</div>
	</div>
</section>';
?>