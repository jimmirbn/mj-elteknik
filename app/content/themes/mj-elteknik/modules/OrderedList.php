<?php
Class OrderedList {

	public function acfDefinition()
	{
		return array (
			'label' => 'Ordered List',
			'name' => 'orderedList',
			'display' => 'row',
			'min' => '',
			'max' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_559e5b07d0618',
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
					'key' => 'field_559e5b0cd0619',
					'label' => 'Liste',
					'name' => 'list',
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
							'key' => 'field_559e5b39d061a',
							'label' => 'Tekst',
							'name' => 'text',
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
					),
				),
			)
		);
	}

	public function render($properties)
	{
	?>
		<div class="row row--padded ordered-list">
			<div class="col-xs-12">
				<?php if($properties['headline']){ ?>
					<h3><?php print $properties['headline'] ?></h3>
				<?php } ?>	
			</div>			
			<div class="col-xs-12">
			<?php
				if($properties['list']){
					$itemKey = 0;
					foreach ($properties['list'] as $item) {
						$itemKey++;
			?>			
						<div class="ordered-list__item">
							<div class="ordered-list__number">
								<h2><?php print $itemKey; ?></h2>							
							</div>

							<div class="ordered-list__body">
								<?php print $item['text']; ?>
							</div>

						</div>

			<?php 		} 
				} 
			?>
			</div>
		</div>
	<?php
	}
}