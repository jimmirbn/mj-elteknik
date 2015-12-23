<?php
Class ContentModule {

	public function acfDefinition()
	{
		return array (
			'label' => 'Content Module',
			'name' => 'contentModule',
			'display' => 'row',
			'min' => '',
			'max' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_55c3499e8bf9f',
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
					'key' => 'field_55c349ab8bfa0',
					'label' => 'Indhold',
					'name' => 'content',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'visual',
					'toolbar' => 'full',
					'media_upload' => 0,
				),
			)
		);
	}

	public function render($properties)
	{
	?>
		<div class="module module--padded">
			<div class="row">
				<div class="col-xs-12">
					
					<h2><?php print $properties['headline']; ?></h2>
					<?php print $properties['content']; ?>

				</div>
			</div>
		</div>
	<?php
	}
}