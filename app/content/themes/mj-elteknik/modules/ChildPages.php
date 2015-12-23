<?php
Class ChildPages {

	public function acfDefinition()
	{
		return array(
			'label' => 'Child Pages',
			'name' => 'ChildPages',
			'display' => 'row',
			'min' => '',
			'max' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_55a7937067825',
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
					'key' => 'field_55a7938767826',
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
				array (
					'key' => 'field_55d2346ccaf64',
					'label' => 'Show all - label',
					'name' => 'all_label',
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
					'key' => 'field_55d234abcaf65',
					'label' => 'Show all - destination',
					'name' => 'all_destination',
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
					),
					'taxonomy' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
				),
				array (
					'key' => 'field_55a76124ca724',
					'label' => 'Parent page',
					'name' => 'parent_page',
					'type' => 'post_object',
					'instructions' => '',
					'required' => 1,
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
					'return_format' => 'id',
					'ui' => 1,
				),
				array (
					'key' => 'field_55a75fb5ca721',
					'label' => 'Vis',
					'name' => 'show',
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
						'allPages' => 'All child pages',
						'limitedPages' => 'Limited number of child pages',
						'selectedPages' => 'Choose the pages to be displayed',
					),
					'default_value' => array (
						'' => '',
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
					'key' => 'field_55a76057ca722',
					'label' => 'Number of pages to be displayed',
					'name' => 'number_of_pages_to_be_displayed',
					'type' => 'number',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_55a75fb5ca721',
								'operator' => '==',
								'value' => 'limitedPages',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'min' => '',
					'max' => '',
					'step' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_55a7607dca723',
					'label' => 'Show selected pages',
					'name' => 'show_selected_pages',
					'type' => 'post_object',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_55a75fb5ca721',
								'operator' => '==',
								'value' => 'selectedPages',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => array (
					),
					'taxonomy' => array (
					),
					'allow_null' => 0,
					'multiple' => 1,
					'return_format' => 'object',
					'ui' => 1,
				),
				array (
					'key' => 'field_55a8ef8d4786a',
					'label' => 'Link label',
					'name' => 'link_label',
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
				)
			)
		);
	}

	public function render($properties)
	{
	?>
		<div class="module">
			<div class="child-pages">
				
				<div class="row row--padded">
					<?php if ( $properties['headline'] && $properties['all_label'] && $properties['all_destination']) { ?>
						<div class="col-xs-12 col-sm-6">
							<?php if ($properties['headline']) { ?>
								<h2><?php print $properties['headline']; ?></h2>
							<?php } ?>
						</div>
						<div class="col-xs-12 col-sm-6 text-align-right-if-desktop">
							<?php if ( $properties['all_label'] && $properties['all_destination'] ) { ?>
								<a href="<?php print $properties['all_destination']; ?>"><?php print $properties['all_label']; ?> <span class="glyphicon glyphicon-chevron-right"></span></a>
							<?php } ?>
						</div>
					<?php } elseif ($properties['headline']) { ?>
						<div class="col-xs-12">
							<?php if ($properties['headline']) { ?>
								<h2><?php print $properties['headline']; ?></h2>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
				

				<div class="row row--padded">
					<div class="col-xs-12 child-pages__body">
						<?php if ($properties['body']) { ?>
							<?php print $properties['body']; ?>
						<?php } ?>
					</div>
				</div>
				
			
			<?php

			$contentClasses = array('col-xs-12');

			global $wpdb;
			// print_r($properties);
			// 

			switch ($properties['show']) {
				case 'allPages':
				case 'limitedPages':
					$query_sql = "
					    SELECT *
					    FROM $wpdb->posts
					    WHERE post_parent = ".$properties['parent_page']."
						AND post_status = 'publish' " .
						($properties['show'] == "limitedPages" && isset($properties['number_of_pages_to_be_displayed']) && $properties['number_of_pages_to_be_displayed'] > 0 ? " LIMIT ".$properties['number_of_pages_to_be_displayed'] : "");

					$thePosts = $wpdb->get_results($query_sql, OBJECT);

					// ($properties['show'] == "limitedPages" && isset($properties['number_of_pages_to_be_displayed']) && $properties['number_of_pages_to_be_displayed'] == 2 ? $contentClasses[] = "col-sm-6" : $contentClasses[] = "col-sm-4");
					$totalItems = count($thePosts);
					($totalItems == 2 || $totalItems == 4  ? $contentClasses[] = "col-sm-6" : $contentClasses[] = "col-sm-4");
					$itemCount = 0;
					$itemsPerRow = ($totalItems == 2 || $totalItems == 4) ? 2 : 3;

					foreach($thePosts as $thePost){

						if ($itemCount%$itemsPerRow == 0) {
							echo '<div class="row row--padded" equal-heights-children=".child-pages__headline,.child-pages__paragraph">';
						}

						?>
							<div class="child-pages__item <?php print implode(' ', $contentClasses); ?>">
								<div class="child-pages__image">
									<!-- Thumbnail -->
									<a class="link--image" href="<?php print get_permalink($thePost->ID); ?>">
										<?php print get_the_post_thumbnail( $thePost->ID, 'medium' ); ?>
									</a>
								</div>
								<div class="child-pages__content">
									<!-- Title and content -->
									<?php
									$excerpt = get_post_field('post_content', $thePost->ID);
									if(strpos($excerpt, "<!--more-->") !== false){
										$excerpt = substr($excerpt, 0, strpos($excerpt, "<!--more-->"));
									}
									?>
									<h4 class="child-pages__headline"><a class="link link--orange" href="<?php print get_permalink($thePost->ID); ?>"><?php print get_post_field('post_title', $thePost->ID); ?></a></h4>
									<p class="child-pages__paragraph"><?php print $excerpt; ?></p>
									<a class="link" href="<?php print get_permalink($thePost->ID); ?>"><?php print $properties['link_label']; ?> <span class="glyphicon glyphicon-chevron-right"></span></a>								
								</div>
							</div>
						<?php
						$itemCount++;
						if ($itemCount%$itemsPerRow == 0 || $itemCount == $totalItems) {
							echo '</div>';
						}
					}
					break;
				case 'selectedPages':

					$totalItems = count($properties['show_selected_pages']);
					($totalItems == 2 || $totalItems == 4  ? $contentClasses[] = "col-sm-6" : $contentClasses[] = "col-sm-4");
					$itemCount = 0;
					$itemsPerRow = ($totalItems == 2 || $totalItems == 4) ? 2 : 3;

					// ($totalItems == 2 || $totalItems == 4 ? $itemsPerRow = 2 : $itemsPerRow = 3);

					foreach($properties['show_selected_pages'] as $selectedPage){

						if ($itemCount%$itemsPerRow == 0) {
							echo '<div class="row row--padded" equal-heights-children=".child-pages__headline,.child-pages__paragraph">';
						}
						?>

							<div class="child-pages__item <?php print implode(' ', $contentClasses); ?>">
								<div class="child-pages__image">
									<!-- Thumbnail -->
									<a class="link--image" href="<?php print get_permalink($selectedPage->ID); ?>">
										<?php print get_the_post_thumbnail($selectedPage->ID, 'medium'); ?>
									</a>						
								</div>
								<div class="child-pages__content">
									<!-- Title and content -->
									<h4 class="child-pages__headline"><a class="link" href="<?php print get_permalink($selectedPage->ID); ?>"><?php print $selectedPage->post_title; ?></a></h4>
									<p class="child-pages__paragraph"><?php print get_post_field('post_content', $selectedPage->ID); ?></p>
									<a class="link" href="<?php print get_permalink($selectedPage->ID); ?>"><?php print $properties['link_label']; ?> <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>
							</div>
						<?php
						$itemCount++;
						if ($itemCount%$itemsPerRow == 0 || $itemCount == $totalItems) {
							echo '</div>';
						}
					}
					break;
				
				default:
					# code...
					break;
			}
			?>
			</div>
		</div>
		<?php
	}
}