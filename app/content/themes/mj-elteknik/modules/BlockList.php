<?php
Class BlockList {

	public function acfDefinition()
	{
		return array (
			'label' => 'Block List',
			'name' => 'blockList',
			'display' => 'row',
			'min' => '',
			'max' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_55d3209f9c856',
					'label' => 'Wrapped in a box?',
					'name' => 'boxed',
					'type' => 'checkbox',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'' => '',
					),
					'default_value' => array (
						'' => '',
					),
					'layout' => 'vertical',
					'toggle' => 0,
				),
				array (
					'key' => 'field_55d3202a9c851',
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
					'key' => 'field_55d3203c9c852',
					'label' => 'Intro',
					'name' => 'intro',
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
					'toolbar' => 'basic',
					'media_upload' => 1,
				),
				array (
					'key' => 'field_55d3206b9c854',
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
							'key' => 'field_55d3207e9c855',
							'label' => 'Tekst',
							'name' => 'text',
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
				array (
					'key' => 'field_55d320639c853',
					'label' => 'Outro',
					'name' => 'outro',
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
					'toolbar' => 'basic',
					'media_upload' => 1,
				),
			)
		);
	}

	public function render($properties)
	{
		$blockClasses = array('block-list');
		$itemClasses = array();
		$introClasses = array();
		$outroClasses = array();

		if ($properties['boxed']) {
			$blockClasses[] = 'block-list--boxed';
			$itemClasses[] = 'block-list__item--boxed';
		}

		if (!$properties['boxed']) {
			$itemClasses[] = 'block-list__item--divided';
		}

		if ($properties['list']) {
			$introClasses[] = 'block-list__intro--margin-bottom';
			$outroClasses[] = 'block-list__outro--margin-top';
		}

	?>
		<div class="module module--padded">
			<div class="<?php print implode(' ', $blockClasses); ?>">

				<?php if($properties['headline']){ ?>
					<div class="block-list__header">
						<?php if($properties['boxed']) { ?>
							<h3><?php print $properties['headline'] ?></h3>
						<?php } else { ?>	
							<h4><?php print $properties['headline'] ?></h4>
						<?php } ?>	
					</div>	
				<?php } ?>

				<?php if($properties['intro']){ ?>
					<div class="block-list__intro <?php print implode(' ', $introClasses); ?>">
						<?php print $properties['intro'] ?>
					</div>
				<?php } ?>				
			
				<?php
				if($properties['list']){
					$itemKey = 0;
					foreach ($properties['list'] as $item) {
						$itemKey++;
						?>			
						<div class="block-list__item <?php print implode(' ', $itemClasses); ?>">
							<?php if($properties['boxed']) { ?>
								<div class="block-list__item__number">
									<p><?php print $itemKey; ?>.</p>							
								</div>
							<?php } ?>	

							<div class="block-list__item__body">
								<p><?php print $item['text']; ?></p>
							</div>

						</div>
					<?php } ?>
				<?php } ?>

				<?php if($properties['outro']){ ?>
					<div class="block-list__outro <?php print implode(' ', $outroClasses); ?>">
						<?php print $properties['outro'] ?>
					</div>
				<?php } ?>	

			</div>
		</div>
	<?php
	}
}