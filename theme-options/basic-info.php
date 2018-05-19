<?php

if( function_exists( 'get_field' ) ){ 

	function applayAddress(){ 

	$address = get_field('address', 'option');

		if( !empty($address) ): ?>
			<div class="addres-info">
				<?php if(!empty($address['cmpany_name'])): ?>
					<p><?php echo $address['cmpany_name']; ?></p>
				<?php endif; ?>
				<?php if(!empty($address['street_address'])): ?>
					<p><?php echo $address['street_address']; ?></p>
				<?php endif; ?>
				<?php if(!empty($address['city_name'])): ?>
					<p><?php echo $address['city_name']; ?></p>
				<?php endif; ?>
				<?php if(!empty($address['cmpany_name'])): ?>
					<p><?php echo $address['country_name']; ?></p>
				<?php endif; ?>
				<?php if(!empty($address['address_icon'])): ?>
					<img src="<?php echo $address['address_icon']; ?>">
				<?php endif; ?>
			</div>
		<?php endif;

	}

	function applayEmail(){ 

	$email_adress = get_field('email_adress', 'option');

		if( !empty($email_adress) ): ?>
			<div class="email-address">
				<?php if(!empty($email_adress['email_add'])): ?>
					<p><?php echo $email_adress['email_add']; ?></p>
				<?php endif; ?>
				<?php if(!empty($email_adress['email_icon'])): ?>
					<img src="<?php echo $email_adress['email_icon']; ?>">
				<?php endif; ?>
			</div>
		<?php endif;

	}

	function applayPhoneNumber(){ 

	$phone_number = get_field('pnone_number', 'option');

		if( !empty($phone_number) ): ?>
			<div class="email-address">
				<?php if(!empty($phone_number['phone_num'])): ?>
					<p><?php echo $phone_number['phone_num']; ?></p>
				<?php endif; ?>
				<?php if(!empty($phone_number['phone_icon'])): ?>
					<img src="<?php echo $phone_number['phone_icon']; ?>">
				<?php endif; ?>
			</div>
		<?php endif;

	}

	function applayCopypright(){ 

	$footer_info = get_field('footer_info', 'option');

		if( !empty($footer_info['copyright']) ): ?>
			<div class="copyright-info">
				<p><?php echo $footer_info['copyright']; ?></p>
			</div>
		<?php endif;

	}

	function applayFooterDescription(){ 

	$footer_description = get_field('footer_info', 'option');

		if( !empty($footer_description['footer_description']) ): ?>
			<div class="footer-description-info">
				<p><?php echo $footer_description['footer_description']; ?></p>
			</div>
		<?php endif;

	}

	function applayContactForm7(){ 

	$contact_form_7 = get_field('contact_form_7', 'option');

		if( !empty($contact_form_7)): ?>
			<div class="contact_form_7">
				<?php echo do_shortcode($contact_form_7); ?>
			</div>
		<?php endif;

	}

	function applayOpeningHours(){ 

	$opening_hours = get_field('opening_hours', 'option');

		if( !empty($opening_hours)): ?>
			<div class="opening_hours">
				<img src="<?php echo $opening_hours['icon']; ?>">
				<p><?php echo $opening_hours['hours']; ?></p>
			</div>
		<?php endif;

	}


}