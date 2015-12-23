<?php
Class CampaignVideos {

	public function acfDefinition()
	{
		return array (
			'label' => 'Campaign Videos',
			'name' => 'campaignVideos',
			'display' => 'row',
			'min' => '',
			'max' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_559e22a13a835',
					'label' => 'headline',
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
					'key' => 'field_559e233d3a836',
					'label' => 'body',
					'name' => 'body',
					'type' => 'textarea',
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
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'none',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_559e23583a837',
					'label' => 'videos',
					'name' => 'videos',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'min' => '',
					'max' => 2,
					'layout' => 'table',
					'button_label' => 'Add Row',
					'sub_fields' => array (
						array (
							'key' => 'field_559e22a13a8357912_video_headline',
							'label' => 'headline',
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
							'key' => 'field_559e23623a838',
							'label' => 'video',
							'name' => 'video',
							'type' => 'oembed',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'width' => '',
							'height' => '',
						),
						array (
							'key' => 'field_559e23723a839',
							'label' => 'poster',
							'name' => 'poster',
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
					),
				),
			)
		);
	}

	public function render($properties)
	{
		$moduleIdentifier = chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90));
		$videoClasses = array('campaign-video-thumb col-xs-12 col-sm-6');
		$rowClasses = array('row');
		$colClasses = array();

		if (count($properties['videos']) == 1) {
			$rowClasses[] = 'row--padded';
			$colClasses[] = 'col-xs-12';
		}
		?>
		<div ng-controller="CampaignVideosCtrl as cv_<?php print $moduleIdentifier; ?>">
			<div class="module">


				<div class="row row--padded">
					<div class="col-xs-12">
						<h2><?php print $properties['headline']; ?></h2>
						<p class="large-bottom"><?php print $properties['body']; ?></p>
					</div>
				</div>

				<div class="<?php print implode(' ', $rowClasses); ?>">
					<div class="<?php print implode(' ', $colClasses); ?>">
						<?php
						$videoplayerIndex = 0;
						$oembeds = array();
						foreach ($properties['videos'] as $video) {

							/* Add autoplay */
							$iframe = $video['video'];

							// use preg_match to find iframe src
							preg_match('/src="(.+?)"/', $iframe, $matches);
							$src = $matches[1];

							// add extra params to iframe src
							$params = array(
							    'autoplay' => 1
							);

							$new_src = add_query_arg($params, $src);
							$iframe = str_replace($src, $new_src, $iframe);

							// add extra attributes to iframe html
							$attributes = 'frameborder="0"';

							$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

							$video['video'] = $iframe;
							/* EOF - Add autoplay */

							$oembeds[$videoplayerIndex] = $video['video'];
							?>

							<div class="campaign-videos <?php print implode(' ', $videoClasses); ?>">
								<div class="row">							
									<div class="campaign-videos__item" ng-click="cv_<?php print $moduleIdentifier; ?>.playVideo('<?php print $videoplayerIndex; ?>')">								
										<div class="campaign-videos__control" ng-if="!main.isMobile">
											<span class="glyphicon glyphicon-play" id="play-button"></span>
										</div>
										<div class="campaign-videos__mobile" ng-if="main.isMobile">
											<?php print $video['video']; ?>
										</div>
										<img style="width:100%; max-height:auto;" src="<?php print $video['poster']; ?>" alt="" ng-if="!main.isMobile">
									</div>

									<div class="campaign-videos__title">
										<?php if($video['headline']){ ?>
											<h4 ng-click="cv_<?php print $moduleIdentifier; ?>.playVideo('<?php print $videoplayerIndex; ?>')"><?php print $video['headline']; ?></h4>
										<?php } ?>
									</div>
								</div>
							</div>			

							<?php
							$videoplayerIndex++;
						}
						?>
						<script type="text/javascript">
							var oembeds_<?php print $moduleIdentifier; ?> = <?php print json_encode($oembeds); ?>;
						</script>
						<div class="modal fade" tabindex="-1" videoplayer-modal="oembeds_<?php print $moduleIdentifier; ?>" ng-if="!main.isMobile">
						    
						</div>
					</div>
				</div>


			</div>
		</div>
		<?php
	}
}