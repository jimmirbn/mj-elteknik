<?php
Class FullWidthMedia {

	public function acfDefinition()
	{
		return array (
			'label' => 'Full Width Media',
			'name' => 'fullWidthMedia',
			'display' => 'row',
			'min' => '',
			'max' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_559e4fbe3e977',
					'label' => 'Type of media',
					'name' => 'typeofmedia',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'Video' => 'Video',
						'Image' => 'Image',
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
					'key' => 'field_559e50383e978',
					'label' => 'Video',
					'name' => 'video',
					'type' => 'oembed',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_559e4fbe3e977',
								'operator' => '==',
								'value' => 'Video',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'width' => '',
					'height' => '',
				),
				array (
					'key' => 'field_559e505e3e979',
					'label' => 'Plakat',
					'name' => 'poster',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_559e4fbe3e977',
								'operator' => '==',
								'value' => 'Video',
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
					'key' => 'field_559e50703e97a',
					'label' => 'Billede',
					'name' => 'image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_559e4fbe3e977',
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
					'return_format' => 'array',
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
			)
		);
	}

	public function render($properties)
	{
		
		$rowClasses = array('row', 'module');
		$mediaClasses = array('full-width-media');
		$isVideo = false;

		if ($properties['typeofmedia'] == "Video"){
			$mediaClasses[] = "full-width-media--video";
			$isVideo = true;
		} else{
			$mediaClasses[] = "full-width-media--image";
		}

		if($isVideo){
			// get iframe HTML
			$iframe = $properties['video'];

			// use preg_match to find iframe src
			preg_match('/src="(.+?)"/', $iframe, $matches);
			$src = $matches[1];

			// add extra params to iframe src
			$params = array(
			    'api' => 1,
			    'player_id' => 'fwmVideo'
			);

			$new_src = add_query_arg($params, $src);
			$iframe = str_replace($src, $new_src, $iframe);

			// add extra attributes to iframe html
			$attributes = 'frameborder="0"';

			$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

			// $iframe = $properties['video'];
			// add extra attributes to iframe html
			$attributes = 'frameborder="0" id="fwmVideo"';
			$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
		}

		?>
		<div class="row">
			<div class="<?php print implode(' ', $mediaClasses); ?>">
				<div class="full-width" ng-controller="FullWidthMediaCtrl as fwm" ng-click="fwm.play()">
				<?php if ($isVideo) { ?>
					<div class="full-width-media__control" ng-if="!fwm.playing && !main.isMobile">
						<span class="glyphicon glyphicon-play" id="play-button"></span>
					</div>	
					<div class="full-width-media__embed" vimeo-player>
						<?php print $iframe; ?>
					</div>
				<?php } else { ?>
					<div class="full-width-media--image">				
						<img-responsive src-xs="<?php print $properties['image']['sizes']['medium']; ?>" src-sm="<?php print $properties['image']['sizes']['large']; ?>"></img-responsive>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
		<?php		
	}
}