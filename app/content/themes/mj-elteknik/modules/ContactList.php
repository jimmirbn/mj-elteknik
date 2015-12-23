<?php
Class ContactList {

	public function acfDefinition()
	{
		return array (
			'label' => 'Contact List',
			'name' => 'contactList',
			'display' => 'row',
			'min' => '',
			'max' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_55a3b6d56667c',
					'label' => 'Headline',
					'name' => 'headline',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_55a3b6e76667d',
					'label' => 'Headline type',
					'name' => 'headline_type',
					'type' => 'select',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'primary' => 'Primær',
						'secondary' => 'Sekundær',
					),
					'default_value' => array (
						'' => '',
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'placeholder' => '',
					'disabled' => 0,
					'readonly' => 0,
				),
				array (
					'key' => 'field_55a3b71d6667e',
					'label' => 'Body',
					'name' => 'body',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'wpautop',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_55a3b82266680',
					'label' => 'Contacts',
					'name' => 'contacts',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'min' => 1,
					'max' => '',
					'layout' => 'table',
					'button_label' => 'Tilføj kontakt',
					'sub_fields' => array (
						array (
							'key' => 'field_55a3b85766681',
							'label' => 'Company',
							'name' => 'company',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_55a3b86366682',
							'label' => 'Address',
							'name' => 'address',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_55a3b86b66683',
							'label' => 'Zip Code',
							'name' => 'zip_code',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_55a3b88b66684',
							'label' => 'City',
							'name' => 'city',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_55a3b89466685',
							'label' => 'Contact Person',
							'name' => 'contact_person',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_55a3b8a966686',
							'label' => 'E-mail',
							'name' => 'email',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_55a3b8d166687',
							'label' => 'Phone',
							'name' => 'phone',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
						array (
							'key' => 'field_55bf5e3212821',
							'label' => 'Opening Hours',
							'name' => 'opening_hours',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
							'readonly' => 0,
							'disabled' => 0,
						),
					),
				),
			)
		);
	}

	public function render($properties)
	{	
		// set heading according to selction
		if ($properties['headline_type'] == 'primary') {
			$heading = '<h2>' . $properties['headline'] . '</h2>';
		} 
		else {
			$heading = '<h4>' . $properties['headline'] . '</h4>';
		}

		$contacts = $properties['contacts'];
		// set default classes
		$groupClasses = array('contact-list__group');
		$contactClasses = array('contact-list__item');
		$companyClasses = array('contact-item__company');

		// we only handle one or two columns
		if (count($contacts) == 1) {
			$contactClasses[] = 'col-xs-12';
		}
		else if (count($contacts) == 2) {
			$contactClasses[] = 'col-sm-6';
			$companyClasses[] = 'h4';
		}
		else {
			$contactClasses[] = 'col-sm-4';
		}

		?>
		
		<div class="row row--padded contact-list module">
			<div class="col-xs-12">
				<div class="content">

				<?php if ($properties['headline'] || $properties['body']) { ?>
				
					<div class="row">
						<div class="col-xs-12">
							<?php print $heading; ?> 
							<?php print $properties['body']; ?>
						</div>
					</div>

				<?php } ?>
					<div class="row">
						<!-- Print all groups in this row -->
						<div class="<?php print implode(' ', $groupClasses); ?>">
							<!-- Print all contants in this row -->
							<?php
							if( isset($contacts) ){
								foreach ($contacts as $contact) {
								?>
									<div class="<?php print implode(' ', $contactClasses); ?>">
										<p><b><?php print $contact['company']; ?></b></p>
										<a href="http://maps.google.com/?q=<?php print $contact['address']; ?>+<?php print $contact['zip_code']; ?>+<?php print $contact['city']; ?>" target="_blank">
											<p><?php print $contact['address']; ?></p>
											<p><?php print $contact['zip_code']; ?> <?php print $contact['city']; ?></p>
										</a>										
										<p><?php print $contact['contact_person']; ?></p>
										<p><b>E-mail:</b> <a href="mailto:<?php print $contact['email']; ?>?subject=Henvendelse fra bygovenpaa.dk"><?php print $contact['email']; ?></a></p>
										<p><b>Telefon:</b> <?php print $contact['phone']; ?></p>
										<p><?php print $contact['opening_hours']; ?></p>
									</div>
								<?php		
								}
							}
							?>
						</div>									
					</div>

				</div>
			</div>
		</div>
		<?php
	}
}