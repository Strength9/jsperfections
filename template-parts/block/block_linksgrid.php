<?php
/*
Block Name: Links Grid
Block Description: Contact Block
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'display_grid';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______partials_global.php');

/* --------------------------------------------------------------------------- 

section_title
section_text
*/

$data = '';
if( have_rows('cards') ):
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
		
		$data .= '<article>
			 	<h1><a class="'.$linkclass.'" href="'.esc_url( $link_url ).'" target="'.esc_attr( $link_target ).'">'.esc_html( $link_title ).'</a></h1>	  
			 	<div class="imagesquare" style="background-image:url('.esc_url($imageurl).');"></div>
		</article>';
		
	endwhile;
else :
	$data = '';
endif;







echo '<section '.$anchor.' class="'.$blockclass .'">
	<div class="wcp-columns">
		 <div class="wcp-column full">
		
		<h1>Oyr latest Weddings</h1> 

	<div class="linkgrid">
	'.$data.'
		<article>
			 <h1><a href="#" title="">Card heading</a></h1>	  
			 <div class="imagesquare" style="background-image:url();"></div>
		</article>
		<article>
			 <h1><a href="#" title="">Card heading</a></h1>	  
			 <div class="imagesquare" style="background-image:url();"></div>
		</article>
		<article>
			 <h1><a href="#" title="">Card heading</a></h1>	  
			 <div class="imagesquare" style="background-image:url();"></div>
		</article>
		<article>
			 <h1><a href="#" title="">Card heading</a></h1>	  
			 <div class="imagesquare" style="background-image:url();"></div>
		</article>
		<article>
			 <h1><a href="#" title="">Card heading</a></h1>	  
			 <div class="imagesquare" style="background-image:url();"></div>
		</article>
		<article>
			 <h1><a href="#" title="">Card heading</a></h1>	  
			 <div class="imagesquare" style="background-image:url();"></div>
		</article>
		<article>
			 <h1><a href="#" title="">Card heading</a></h1>	  
			 <div class="imagesquare" style="background-image:url();"></div>
		</article>
		<article>
			 <h1><a href="#" title="">Card heading</a></h1>	  
			 <div class="imagesquare" style="background-image:url();"></div>
		</article>
		<article>
			 <h1><a href="#" title="">Card heading</a></h1>	  
			 <div class="imagesquare" style="background-image:url();"></div>
		</article>
	</div>	 
		</div>
		 <div class="wcp-column"></div>
	</div>
</section>';
?>
