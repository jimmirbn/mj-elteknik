<?php
Class LogoWall {

	public function acfDefinition()
	{
		return array (
			'label' => 'Logo Wall',
			'name' => 'logoWall',
			'display' => 'row',
			'min' => '',
			'max' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_55d34beee2912',
					'label' => 'images',
					'name' => 'images',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'min' => '',
					'max' => '',
					'layout' => 'table',
					'button_label' => 'Add Row',
					'sub_fields' => array (
						array (
							'key' => 'field_55d34bfde2913',
							'label' => 'image',
							'name' => 'image',
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
							'preview_size' => 'medium',
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
							'key' => 'field_55d35804cd281',
							'label' => 'Hyperlink',
							'name' => 'hyperlink',
							'type' => 'url',
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
						),
					),
				)
			)
		);
	}

	public function render($properties)
	{	
	?>
		<div class="module">
			<div class="row row--padded">
				<?php if ($properties['images']) { ?>
					<div class="logo-wall">
						<?php foreach ($properties['images'] as $image) { ?>
							<div class="col-xs-6 col-sm-4">
								<div class="logo-wall__item">
									<a href="<?php print $image['hyperlink']; ?>" target="_blank">
										<img src="<?php print $image['image']; ?>" alt="">
									</a>
								</div>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
	<?php
	}
}