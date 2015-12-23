<?php
Class SimpleAccordion {

	public function acfDefinition()
	{
		return array (
			'label' => 'Simple Accordion',
			'name' => 'simpleAccordion',
			'display' => 'row',
			'min' => '',
			'max' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_559e5657b26ad',
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
					'key' => 'field_559e5674b26ae',
					'label' => 'Items',
					'name' => 'items',
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
							'key' => 'field_559e5687b26af',
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
							'key' => 'field_559e5696b26b0',
							'label' => 'Body',
							'name' => 'body',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'visual',
							'toolbar' => 'basic',
							'media_upload' => 1,
						),
					),
				)
			)
		);
	}

	public function render($properties)
	{
		?>
		<div class="simple-accordion module module--padded">


			
			<?php
			if($properties['headline']){
			?>
			<div class="row">
				<div class="col-xs-12">
					<h2><?php print $properties['headline']; ?></h2>
				</div>
			</div>
			<?php
			}
			?>



			<div class="row row--padded">
				<div class="accordion accordion--trade panel-group">
					<?php
					foreach ($properties['items'] as $item) {
					?>					
						
						<div class="accordion-item panel" accordion-item parent=".accordion--trade" ga-event="simple-accordion/accordion-open/<?= $item['headline']; ?>">

							<div class="accordion-item__heading">
								<div class="inner">									

									<div class="accordion-wrapper">
										<div class="accordion-headline">
											<h4 class="truncate"><?php print $item['headline']; ?></h4>
										</div>
										<div class="accordion-icon">
											<span class="glyphicon glyphicon-plus"></span>
										</div>								
									</div>

								</div>
							</div>


							<div class="accordion-item__body collapse">
								<div class="inner simple-accordion">
									<div class="row">

										<div class="col-xs-12">
											<div class="simple-accordion__content">
												<?php print $item['body']; ?>
											</div>
										</div>

									</div>
								</div>        
							</div>

						</div>					

					<?php
					}
					?>
				</div>
			</div>


		</div>
		<?php	
	}
}