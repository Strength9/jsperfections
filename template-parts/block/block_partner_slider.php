<?php
/*
Block Name: Partner Slider
Block Description: Partner Slider
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: s9blocks
*/
$sectionclass = 'partnerslider';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______partials_global.php');

/* --------------------------------------------------------------------------- 

 partner_logo
 */
 

 if( have_rows('partner_data','options') ):
$sub_value = '';
     while( have_rows('partner_data','options') ) : the_row();

        $sub_value .= '<li><a href="'.get_sub_field('partner_link').'"><img src="'.get_sub_field('partner_logo').'" alt=""/></a></li>';
         
     endwhile;

 else :
     // Do something...
 endif;



$section_title = ! empty( get_field('section_title','options') ) ? get_field('section_title','options') : 'section_title';

echo '<section '.$anchor.' class="'.$blockclass .'">
    <div class="wcp-columns ">
              <div class="wcp-column full">
                <div class="lined"><div class="ct">'.$section_title.'</div></div>
                    <ul class="partners">
                        '.$sub_value.'
                    </ul>
              </div>
            </div>

</section>';?>



