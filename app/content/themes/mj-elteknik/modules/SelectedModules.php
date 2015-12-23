<?php
Class SelectedModules {

	public function acfDefinition()
	{
		return array (
			'label' => 'Selected Modules',
			'name' => 'SelectedModules',
			'display' => 'row',
			'min' => '',
			'max' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_55a8ba09834c3',
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
					'key' => 'field_55a8bac3834c4',
					'label' => 'Modules',
					'name' => 'modules',
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
					'max' => '',
					'layout' => 'table',
					'button_label' => 'Add Row',
					'sub_fields' => array (
						array (
							'key' => 'field_55a8be1e834c5',
							'label' => 'Module Post',
							'name' => 'module_post',
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
								0 => 'moduler',
							),
							'taxonomy' => array (
							),
							'allow_null' => 0,
							'multiple' => 0,
							'return_format' => 'object',
							'ui' => 1,
						),
					),
				),
			)
		);
	}

	public function render($properties)
	{
		?>
		<div class="module module--padded">



		<?php
		$moduleIdentifier = "selectedModules_" . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90));

		$fagmod = new Fagmoduler();

		if ( is_page_template('gode-erfaringer-children.php') ){
			
			$field_fornavn = get_field('fornavn', get_the_ID() );

			if( $field_fornavn ){
				print '<h3>'.$properties['headline'].' som '.$field_fornavn.'</h3>';	
			} else {
				print '<h3>'.$properties['headline'].'</h3>';	
			}

		} else {

			print '<h2>'.$properties['headline'].'</h2>';

		}
		$fagList = array();
		foreach($properties['modules'] as $modul){
			$fag = $fagmod->getFag( get_field("fag_id", $modul['module_post']->ID) );
			$fagList[] = $fag;
		}
		?>



		<script>
			var <?php print $moduleIdentifier; ?> = <?php print  json_encode($fagList); ?>;
		</script>
	
		<div class="accordion accordion--trade panel-group" ng-controller="SelectedModulesCtrl as <?php print  $moduleIdentifier; ?>" ng-init="<?php print  $moduleIdentifier; ?>.init('<?php print $moduleIdentifier; ?>')">
			<?php
			set_query_var('moduleIdentifier', $moduleIdentifier);
			get_template_part('parts/fagmoduler-accordion-part');
			?>
		</div>



		</div>
		<?php
	}
}