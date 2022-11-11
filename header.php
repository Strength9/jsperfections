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
?>
<header>
	<div class="logo"><a href="<?php echo home_url(); ?>">Home</a></div>
	<label class="menuopen" aria-label="Open navigation menu" for="menu-toggle">
	  <i class="fa-light fa-bars"></i></label>
	
	  
	  <input type="checkbox" id="menu-toggle" />
	  
	  
	<nav class="navigation-menu">
		  <label for="menu-toggle"  aria-label="Close navigation menu" class="menuclose"><i class="fa-thin fa-square-xmark"></i></label>
		  <?php wp_nav_menu( array(  'menu' => 'MainMenu','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 3 , 'items_wrap' => ' <ul class="navlist">
		  
		  %3$s</ul>' ) );?>  
	
	<ul class="socialnav">
		<li class="title">Follow Us</li>
		<li><?php echo $social;?> </li>
	</ul>
	</nav>
	
	<div class="advert">
		<div class="content">
			
		</div>	
	</div>
</header>





		