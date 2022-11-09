<?php

$telephone_number = ! empty( get_field('telephone_number','options') ) ? '<li><a href="tel:'.get_field('telephone_number','options').'" title="Call the team"><i class="fa-light fa-phone"></i>'.get_field('telephone_number','options').'</a></li>' : '';
$emailaddress = ! empty( get_field('email_address','options') ) ? '<li><a href="mailto:'.get_field('email_address','options').'" title="Email the team"><i class="fa-light fa-mailbox"></i>'.get_field('email_address','options').'</a></li>' : '';

$social = ! empty( get_field('facebook_link','options') ) ? '<li class="social"><a href="'.get_field('facebook_link','options').'" title="Visit us on Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>' : '';

$social .= ! empty( get_field('twitter_link','options') ) ? '<li class="social"><a href="'.get_field('twitter_link','options').'" title="Visit us on Twitter"><i class="fa-brands fa-twitter"></i></a></li>' : '';

$social .= ! empty( get_field('instagram_link','options') ) ? '<li class="social"><a href="'.get_field('instagram_link','options').'" title="Visit us on Instagram"><i class="fa-brands fa-instagram"></i></a></li>' : '';

$social .= ! empty( get_field('linkedin_link','options') ) ? '<li class="social"><a href="'.get_field('linkedin_link','options').'" title="Visit us on LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a></li>' : '';


?>
<footer>
	<div class="wcp-columns">
		 <div class="wcp-column">		 
			 <ul>
				 <li class="title">Get In touch</li>
				 <?php echo $emailaddress.$telephone_number?>
				 
				 <li class="title">Follow Us Online</li>
				 <?php echo $social;?>
			 </ul>
		 </div>
		 <div class="wcp-column">
			  <?php wp_nav_menu( array(  'menu' => 'Legal','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 3 , 'items_wrap' => ' <ul>
				 <li class="title">Our Services</li>%3$s</ul>' ) );?> 
		  </div>
		 <div class="wcp-column">
			 <?php wp_nav_menu( array(  'menu' => 'Legal','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 3 , 'items_wrap' => ' <ul>
				<li class="title">Our Services</li>%3$s</ul>' ) );?> 
		 </div>
		 <div class="wcp-column">
			 <?php wp_nav_menu( array(  'menu' => 'Legal','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 3 , 'items_wrap' => ' <ul>
			   <li class="title">The Legal Bits</li>%3$s</ul>' ) );?>  
		 </div>
	</div>
	<div class="copyright"></div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

