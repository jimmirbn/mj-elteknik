<?php
Class FullWidthPromo {

	public function acfDefinition()
	{
		return array (
			'label' => 'Full Width Promo',
			'name' => 'fullWidthPromo',
			'display' => 'row',
			'min' => '',
			'max' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_559e800e1ba01',
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
					'key' => 'field_559e80181ba02',
					'label' => 'Body',
					'name' => 'body',
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
					'key' => 'field_559e80201ba03',
					'label' => 'Button label',
					'name' => 'button_label',
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
					'key' => 'field_559e8804c4406',
					'label' => 'Button link',
					'name' => 'button_link',
					'type' => 'page_link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => array (
						0 => 'page',
					),
					'taxonomy' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
				),
				array (
					'key' => 'field_559e8a24b03d2',
					'label' => 'Baggrund',
					'name' => 'background',
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
						'Color' => 'Color',
						'Image' => 'Image',
					),
					'default_value' => array (
						'Choose' => 'Choose',
					),
					'allow_null' => 1,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'placeholder' => '',
					'disabled' => 0,
					'readonly' => 0,
				),
				array (
					'key' => 'field_559e8865c4408',
					'label' => 'Background-image',
					'name' => 'background-image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_559e8a24b03d2',
								'operator' => '==',
								'value' => 'Image',
							),
						),
					),
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
					'key' => 'field_559e8a6cb03d3',
					'label' => 'Farve',
					'name' => 'color',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_559e8a24b03d2',
								'operator' => '==',
								'value' => 'Color',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'White' => 'White',
						'Orange' => 'Orange',
						'Black' => 'Black',
					),
					'default_value' => array (
						'Choose' => 'Choose',
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
					'key' => 'field_559e8887c4409',
					'label' => 'Billede',
					'name' => 'image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_559e8a24b03d2',
								'operator' => '==',
								'value' => 'Color',
							),
						),
					),
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
					'key' => 'field_559e88bdc440a',
					'label' => 'Image alignment',
					'name' => 'image_alignment',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_559e8a24b03d2',
								'operator' => '==',
								'value' => 'Color',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'Left' => 'Left',
						'Right' => 'Right',
					),
					'default_value' => array (
						'Choose' => 'Choose',
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
					'key' => 'field_559e8930c440b',
					'label' => 'Has gutter',
					'name' => 'has_gutter',
					'type' => 'checkbox',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_559e8a24b03d2',
								'operator' => '==',
								'value' => 'Color',
							),
						),
					),
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
			)
		);
	}

	public function render($properties)
	{
		$rowClasses = array('full-width-promo', 'row');
		$contentClasses = array(
			"firstCol" => array(),
			"secondCol" => array()
		);
		$contentRowClasses = array('row');
		$hasBackgroundImage = false;
		$hasGutter = false;
		$hasImage = false;
		$hasImageClasses = array('deco', 'deco--small', 'hidden-xs');
		$headlineClasses = array('headline');
		$alignClasses = array();
		$displayClasses = array();

		if($properties['background'] == "Image"){
			// When background = image
			$hasBackgroundImage = true;
			$rowClasses[] = "full-width-promo--image full-width-promo--padded full-width-promo--padded-large-bottom";
			$contentClasses['firstCol'] = array('col-xs-12', 'col-sm-6', 'col-md-5', 'col-md-offset-right-7');
			$contentClasses['secondCol'] = array('col-xs-12', 'col-sm-6', 'col-md-5', 'col-md-offset-right-7');
			$headlineClasses[] = "headline--white";
		}

		else {
			// When background = color
			if ($properties['color'] == "Black"){
				$rowClasses[] = "full-width-promo--black full-width-promo--padded";	
				$headlineClasses[] = "headline--white";
			}
			else if ($properties['color'] == "Orange"){
				$rowClasses[] = "full-width-promo--orange";
				$headlineClasses[] = "headline--white";
			}
			else if ($properties['color'] == "White"){
				$headlineClass = "headline--black";
			}
			if ($properties['has_gutter']){
				$hasGutter = true;
				$rowClasses[] = "full-width-promo--has-gutter row--padded";
			}
			if ($properties['image']){
				$hasImage = true;
				if($properties['image_alignment'] == "Left"){
					$hasImageClasses['deco'] = "deco--left";
					$contentClasses['firstCol'] = array('col-xs-12', 'col-sm-8', 'col-sm-offset-4');
					$contentClasses['secondCol'] = array('col-xs-12', 'col-sm-8', 'col-sm-offset-4');
				} else{
					$hasImageClasses['deco'] = "deco--right";
					$contentClasses['firstCol'] = array('col-xs-12', 'col-sm-6', 'col-sm-offset-right-6');
					$contentClasses['secondCol'] = array('col-xs-12', 'col-sm-6', 'col-sm-offset-right-6');
				}
			} else{
				$contentClasses['firstCol'] = array('col-xs-12', 'col-sm-7');
				$contentClasses['secondCol'] = array('col-xs-12', 'col-sm-5');
				$alignClasses[] = 'text-align-right-if-desktop';
				$displayClasses[] = 'inline';
			}
		}

	?>
	
		<div class="module module--margin-top-large">

			<div class="<?php print implode(' ', $rowClasses); ?>" <?php if ($hasBackgroundImage) { ?> style="background-image: url(<?php print $properties['background-image']; ?>);"<?php } ?> >

				<div class="col-xs-12">
					<div class="content">
						<div class="row<?php if (!$hasGutter) { ?> row--padded<?php } ?>">

							<?php if ($hasImage) { ?>
								<div class="<?php print implode(' ', $hasImageClasses); ?>">
									<img src="<?php print $properties['image'] ?>" alt="">
								</div>
							<?php } ?>

							<div class="<?php print implode(' ', $contentClasses['firstCol']); ?>">
								<h2 class="<?php print implode(' ', $headlineClasses); ?>"><?php print $properties['headline']; ?></h2>
								<?php print $properties['body']; ?>
							</div>

							<div class="<?php print implode(' ', $contentClasses['secondCol']) ?> <?php print implode(' ', $alignClasses); ?>">							

								<a href="<?php print $properties['button_link']; ?>" class="btn button <?php print implode(' ', $displayClasses); ?>">
								    <div class="label"><?php print $properties['button_label']; ?></div>
								    <div class="arrow">
								        <span class="glyphicon glyphicon glyphicon-chevron-right"></span>
								    </div>
								</a>

							</div>

						</div>
					</div>
				</div>

			</div>

		</div>


	<?php
	}
}