<?php

$telephone_number = ! empty( get_field('telephone_number','options') ) ? '<li><a href="tel:'.get_field('telephone_number','options').'" title="Call the team"><i class="fa-light fa-phone"></i>'.get_field('telephone_number','options').'</a></li>' : '';
$emailaddress = ! empty( get_field('email_address','options') ) ? '<li><a href="mailto:'.get_field('email_address','options').'" title="Email the team"><i class="fa-light fa-mailbox"></i>'.get_field('email_address','options').'</a></li>' : '';

$social = ! empty( get_field('facebook_link','options') ) ? '<a href="'.get_field('facebook_link','options').'" title="Visit us on Facebook"><i class="fa-brands fa-facebook-f"></i></a>' : '';

$social .= ! empty( get_field('twitter_link','options') ) ? '<a href="'.get_field('twitter_link','options').'" title="Visit us on Twitter"><i class="fa-brands fa-twitter"></i></a>' : '';

$social .= ! empty( get_field('instagram_link','options') ) ? '<a href="'.get_field('instagram_link','options').'" title="Visit us on Instagram"><i class="fa-brands fa-instagram"></i></a>' : '';

$social .= ! empty( get_field('linkedin_link','options') ) ? '<a href="'.get_field('linkedin_link','options').'" title="Visit us on LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>' : '';


?>
<footer>
	<div class="wcp-columns">
		 <div class="wcp-column ctdetails">		 
			 <ul>
				 <li class="title">Get In touch</li>
				 <?php echo $emailaddress.$telephone_number?>
			 </ul>
		 </div>
		 <div class="wcp-column links about">
			  <?php wp_nav_menu( array(  'menu' => 'Legal','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 3 , 'items_wrap' => ' <ul>
				 <li class="title">Our Services</li>%3$s</ul>' ) );?> 
		  </div>
		 <div class="wcp-column links services">
			 <?php wp_nav_menu( array(  'menu' => 'Legal','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 3 , 'items_wrap' => ' <ul>
				<li class="title">Our Services</li>%3$s</ul>' ) );?> 
		 </div>
		 <div class="wcp-column links legal">
			 <?php wp_nav_menu( array(  'menu' => 'Legal','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 3 , 'items_wrap' => ' <ul>
			   <li class="title">The Legal Bits</li>%3$s</ul>' ) );?>  
		 </div>
		 <div class="wcp-column ctsocial">		 
			  <ul>
				   <li class="title">Follow Us Online</li>
				   <li class="social"><?php echo $social;?></li>
			   </ul>
		  </div>
	</div>
	<div class="copyright">
		<div class="wcp-columns">
		 <div class="wcp-column copystatement">Copyright J’s Perfections Weddings And Occasions 2022  |  Site Design and Build By Strength 9</div>
		 <div class="wcp-column legallinks">
			 <ul class="legalfoot">
				<li><a href="#">Terms of Sale</a></li>      
				<li><a href="#">Terms & Conditions</a></li>      
				<li><a href="#">Privacy Policy</a></li>      
				<li><a href="#">Contact</a></li>
			 </ul>
		 </div>
		</div>
		 		 
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

