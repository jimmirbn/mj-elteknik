<?php
Class PromoFrontpage {

	public function acfDefinition()
	{
		return array(
			'label' => 'Promo - Frontpage',
			'name' => 'PromoFrontpage',
			'display' => 'row',
			'min' => '',
			'max' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_5592bbc206a0d',
					'label' => 'Headline',
					'name' => 'headline',
					'type' => 'text',
					'column_width' => '',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'html',
					'maxlength' => '',
				),
				array (
					'key' => 'field_5592bbce06a0e',
					'label' => 'Background image',
					'name' => 'background_image',
					'type' => 'image',
					'column_width' => '',
					'save_format' => 'object',
					'preview_size' => 'thumbnail',
					'library' => 'all',
				),
			)
		);
	}

	public function render($properties)
	{
		?>
		<div style="height:200px; width:400px; background: url(<?php print $properties['background_image']['sizes']['medium']; ?>)">
			<h1><?php print $properties['headline']; ?></h1>
		</div>
		<?php
	}
}