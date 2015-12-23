<?php
Class FrontpageHero {

	public function acfDefinition()
	{
		return array (
			'label' => 'Frontpage Hero',
			'name' => 'frontpageHero',
			'display' => 'row',
			'min' => '',
			'max' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_559fb073e0dbc',
					'label' => 'Background-image',
					'name' => 'background-image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_559fb08be0dbd',
					'label' => 'Byline',
					'name' => 'byline',
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
					'key' => 'field_559fb096e0dbe',
					'label' => 'Headline',
					'name' => 'headline',
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
					'key' => 'field_559fb09ce0dbf',
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
			)
		);
	}

	public function render($properties)
	{
		$rowClasses = array('frontpage-hero', 'row');
		?>
		<div class="<?php print implode(' ', $rowClasses); ?>">
			<div class="col-xs-12">
				<div class="content">
					<div class="row row--padded" style="background-image: url(<?php print $properties['background-image']; ?>); background-repeat: no-repeat; background-size: contain; background-position: top;">
						<div class="frontpage-hero__cta col-xs-12 col-sm-10 col-md-8">
							<h4 class="headline"><?php print $properties['byline']; ?></h4>
							<h1><?php print $properties['headline']; ?></h1>
							<?php print $properties['body']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}