<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php wp_title('');  ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>


</head>

<body <?php body_class();?>>
 <?php	
	$social = ! empty( get_field('facebook_link','options') ) ? '<a href="'.get_field('facebook_link','options').'" title="Visit us on Facebook"><i class="fa-brands fa-facebook-f"></i></a>' : '';
	
	$social .= ! empty( get_field('twitter_link','options') ) ? '<a href="'.get_field('twitter_link','options').'" title="Visit us on Twitter"><i class="fa-brands fa-twitter"></i></a>' : '';
	
	$social .= ! empty( get_field('instagram_link','options') ) ? '<a href="'.get_field('instagram_link','options').'" title="Visit us on Instagram"><i class="fa-brands fa-instagram"></i></a>' : '';
	
	$social .= ! empty( get_field('linkedin_link','options') ) ? '<a href="'.get_field('linkedin_link','options').'" title="Visit us on LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>' : '';
	
	$adimage = get_field('advert_background','options');
	if( $adimage ):
		$url = $adimage['url'];
		$advertBGoutput = 'style="
		background: linear-gradient(0deg, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('.esc_url($url).');"';
	else :
		$advertBGoutput = '';
	endif;

	$advertlink = get_field('advert_link','options');
	if( $advertlink ): 
		$buttonclass = 'button';
		$link_url = $advertlink['url'];
		$link_title = $advertlink['title'];
		$link_target = $advertlink['target'] ? $advertlink['target'] : '_self';
	
		$advertoutput = '<a class="'.$buttonclass.'" href="'.esc_url( $link_url ).'" target="'.esc_attr( $link_target ).'">'.esc_html( $link_title ).'</a>';
	else :
		$advertoutput = '';
	endif; 

$advert_title = ! empty( get_field('advert_title','options') ) ? '<h1>'.get_field('advert_title','options').'</h1>' : '';
$advert_content = ! empty( get_field('advert_content','options') ) ? get_field('advert_content','options') : '';

	
?>
<div class="headstrip">
	<a href="<?php echo home_url(); ?>" title="" class="logomain">
		<img src="/wp-content/themes/jsperfections/assets/img/svg/jsperf.svg" alt="" />
	</a>
	<div class="menuopen" aria-label="Open navigation menu" for="menu-toggle"><i class="fa-light fa-bars"></i></div>
</div>
<header>
	


	  
	  
	<aside>  
		<a href="<?php echo home_url(); ?>" title="" class="logohome">
			<img src="/wp-content/themes/jsperfections/assets/img/svg/jsperf.svg" alt="" />
		</a>
		<div  aria-label="Close navigation menu" class="menuclose"><i class="fa-thin fa-square-xmark"></i></div>
		
		<nav class="navigation-menu">
		  <?php wp_nav_menu( array(  'menu' => 'Top Menu','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 3 , 'items_wrap' => ' <ul class="navlist"> %3$s</ul>' ) );?>  
		</nav>
		<ul class="socialnav">
			<li class="title"><div class="ct">Follow Us</div></li>
			<li><?php echo $social;?> </li>
		</ul>
	</aside>
	
	<div class="advert" <?php echo $advertBGoutput;?>>
		<div class="content">
			<div class="detail">
				<?php echo $advert_title;?>
				<?php echo $advert_content;?>
				<?php echo $advertoutput;?>
			</div>
		</div>	
	</div>
</header>





		