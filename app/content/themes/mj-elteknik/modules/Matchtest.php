<?php
Class Matchtest {

	public function acfDefinition()
	{
		return array (
			'label' => 'Matchtest',
			'name' => 'Matchtest',
			'display' => 'row',
			'min' => '',
			'max' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_55c74d0fa3586',
					'label' => 'Matchtest step',
					'name' => 'matchtest_step',
					'type' => 'flexible_content',
					'instructions' => 'This can either be a choice OR a result containing modules.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'button_label' => 'Add step',
					'min' => '',
					'max' => '',
					'layouts' => array (
						array (
							'key' => '55c74d23a76eb',
							'name' => 'choice',
							'label' => 'Choice',
							'display' => 'block',
							'sub_fields' => array (
								array (
									'key' => 'field_55c74d76a3587',
									'label' => 'Choice',
									'name' => 'choice',
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
									'button_label' => 'Add choice',
									'sub_fields' => array (
										array (
											'key' => 'field_559e8865c440800785264image',
											'label' => 'Image',
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
											'key' => 'field_55c74d94a3588',
											'label' => 'Choice text',
											'name' => 'choice_text',
											'type' => 'text',
											'instructions' => 'E.g. "Jeg er kreativ"',
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
											'key' => 'field_55c74d94a35885756caption',
											'label' => 'Caption text',
											'name' => 'caption_text',
											'type' => 'text',
											'instructions' => 'E.g. "Jeg elsker at udvikle ting fra bunden."',
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
											'key' => 'field_55c74e4ca358c',
											'label' => 'Choice target',
											'name' => 'choice_target',
											'type' => 'select',
											'instructions' => 'Define which step the user goes to after having selected this as their choice.',
											'required' => 1,
											'conditional_logic' => 0,
											'wrapper' => array (
												'width' => '',
												'class' => '',
												'id' => '',
											),
											'choices' => array (
												'first after this step' => 'first after this step',
												'second after this step' => 'second after this step',
												'third after this step' => 'third after this step',
												'fourth after this step' => 'fourth after this step',
												'fifth after this step' => 'fifth after this step',
												'define the step by number' => 'define the step by number',
												'show courses' => 'show courses'
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
											'key' => 'field_55c74f15a358d',
											'label' => 'Send til',
											'name' => 'target',
											'type' => 'number',
											'instructions' => 'Input the number of the step to go to. Remember this is fragile to changes - e.g. if you add a step in the	top then you also have to change this number.',
											'required' => 1,
											'conditional_logic' => array (
												array (
													array (
														'field' => 'field_55c74e4ca358c',
														'operator' => '==',
														'value' => 'define the step by number',
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
											'min' => 1,
											'max' => '',
											'step' => '',
											'readonly' => 0,
											'disabled' => 0,
										),
										array (
											'key' => 'field_55c74dd6a358a',
											'label' => 'Result',
											'name' => 'result',
											'type' => 'repeater',
											'instructions' => '',
											'required' => 1,
											'conditional_logic' => array (
												array (
													array (
														'field' => 'field_55c74e4ca358c',
														'operator' => '==',
														'value' => 'show courses',
													),
												),
											),
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
													'key' => 'field_55c74df1a358b',
													'label' => 'Fagmodul',
													'name' => 'fagmodul',
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
									),
								),
							),
							'min' => '',
							'max' => '',
						),
					),
				),
			)
		);
	}


	public function render($properties)
	{
		$moduleIdentifier = "matchtest";

		// print_r($properties['matchtest_step']); die();

		// Add kursusstarter
		foreach($properties['matchtest_step'] as $key1 => $choices){
			
			// print_r($choices['choice']); die();

			foreach($choices['choice'] as $key2 => $choice){
				if(isset($choice['result']) && count($choice['result']) > 0){
					foreach($choice['result'] as $key3 => $fag){
						// print_r(get_field('fag_id',$fag['fagmodul']->ID)); die();
						$fm = new Fagmoduler();
						$properties['matchtest_step'][$key1]['choice'][$key2]['result'][$key3]['fag'] = @$fm->getFag(
							get_field('fag_id',$fag['fagmodul']->ID)
						);
					}
				}
			}
		}		

		$autoStart = false;
		if( isset($_GET['auto']) ){
			$autoStart = $_GET['auto'];
		}
		
		print "<script> var ".$moduleIdentifier." = ".json_encode($properties['matchtest_step'])."; </script>";
		?>

		<div ng-controller="MatchTestCtrl as matchtest" ng-cloak ng-init="matchtest.begin('<?php print $moduleIdentifier; ?>', '<?php print  $autoStart; ?>')">
		
			<div class="matchtest__navigation">
				<div class="matchtest__navigation__brand">
					<a href="<?php print  get_home_url(); ?>"><img-responsive src-xs="<?php print  get_image('logo-mobile.png'); ?>" src-md="<?php print  get_image('matchtest-desktop.png'); ?>"></img-responsive></a>
				</div>
				<div class="matchtest__navigation__control">
					<a href="<?php print  get_home_url(); ?>"><span class="glyphicon glyphicon-chevron-left"></span>Tilbage til sitet</a>
				</div>
			</div>


			<div class="matchtest">

				<div class="matchtest__content" ng-class="{'table-cell vertical-align-middle' : !matchtest.startMatchTest}">
					<div class="col-xs-12">

						<div ng-if="!matchtest.startMatchTest">
							<div class="matchtest__content__intro">
								<h2>Hvordan vil du gerne arbejde?</h2>
								<p>Brænder du for at udvikle ting fra bunden?  Er der en leder gemt i dig? Elsker du at sætte ting i system? Test dig selv. Måske vil det overraske dig, at der findes fagmoduler, som matcher lige præcis dine interesser.</p>

								<a ng-click="matchtest.startMatchTest = true" class="btn button">
								    <div class="label">Tag testen</div>
								    <div class="arrow">
								        <span class="glyphicon glyphicon glyphicon-chevron-right"></span>
								    </div>
								</a>
								
							</div>
						</div>
						
						<div ng-if="matchtest.startMatchTest && matchtest.currentStep >= 0 &&  !<?php print $moduleIdentifier;?>.courses.length >= 1">
							<div class="matchtest__content__app text-align-center">
														
								<div class="matchtest__content__app__header" ng-if="matchtest.currentStep == 0">
									<h2 class="color-orange">Hvordan vil du gerne arbejde?</h2>
									<p class="hide-if-mobile">Vælg det, som passer dig bedst</p>
								</div>

								<div class="matchtest__content__app__title" ng-if="matchtest.currentStep >= 1">
									<div class="matchtest__content__app__title__thumbnail">
										<img src="<?php print  get_image('matchtest-overblik.png') ?>" alt="">
									</div>
									<div class="matchtest__content__app__title__text">
										<h2 class="color-white">Hvad passer bedst på dig?</h2>
										<p>Vælg en</p>
									</div>
								</div>								

								<ul class="matchtest__content__app__list" ng-class="{'matchtest__content__app__list--primary' : matchtest.currentStep == 0, 'matchtest__content__app__list--secondary' : matchtest.currentStep >= 1}">
									<li ng-repeat="choice in <?php print  $moduleIdentifier; ?>.currentStepData track by $index" ng-click="<?php print  $moduleIdentifier; ?>.onClickStep(choice)" ng-class="{'length-2' : matchtest.currentStep >= 1 && matchtest.currentStepData.length == 2, 'length-3' : matchtest.currentStep >= 1 && matchtest.currentStepData.length == 3}">
										<div class="matchtest__content__app__list__item">
											<div ng-class="{'col-xs-2 col-sm-12 no-padding-left no-padding-right' : matchtest.currentStep == 0}">
												<div class="matchtest__content__app__list__thumbnail" ng-if="choice.image">
													<img ng-src="{{choice.image}}" alt="">
												</div>
											</div>
											
											<div ng-class="{'col-xs-10 col-sm-12 no-padding-left no-padding-right' :  matchtest.currentStep == 0}">
												<div class="matchtest__content__app__list__details" ng-class="{'inline-table--desktop-only' : matchtest.currentStep == 0 }">								
													<h2 class="choice_text color-white">{{choice.choice_text}}</h2>							
													<p ng-if="choice.caption_text">{{choice.caption_text}}</p>
												</div>
											</div>
										</div>
									</li>
								</ul>								

								<div class="matchtest__content__app__button matchtest__content__app__button--orange" ng-click="<?php print  $moduleIdentifier; ?>.goBack()" ng-if="<?php print  $moduleIdentifier; ?>.currentStep > 0">Tilbage</div>		
								
							</div>
						</div>					
						
						<div class="matchtest__content__app" ng-if="<?php print $moduleIdentifier;?>.courses.length >= 1">
							
							<div class="matchtest__content__app__title">
								<div class="matchtest__content__app__title__thumbnail">
									<img src="<?php print  get_image('matchtest-overblik.png') ?>" alt="">
								</div>
								<div class="matchtest__content__app__title__text">
									<h2 class="color-orange">Resultat</h2>
									<p>Disse moduler er måske noget for dig</p>
								</div>
							</div>
							
							<div class="row row--padded">
								<div class="col-xs-12">
									<div class="advanced-accordion advanced-accordion--black">
										<div class="row">
											<div class="accordion accordion--black accordion--trade panel-group">						

												<div ng-repeat="course in <?php print  $moduleIdentifier; ?>.courses track by $index" class="accordion-item panel" accordion-item matchtesten="true" parent=".accordion--trade">

													<div class="accordion-item__heading accordion-item__heading--black">
														<div class="inner">				
															<div class="accordion-wrapper">
																<div class="accordion-thumbnail">
																	<img ng-src="{{::course.fag.billede}}" alt="">
																</div>													
																<div class="accordion-headline">
																	<h4>{{course.fag.post_title}}</h4>
																</div>
																<div class="accordion-icon">
																	<span class="glyphicon glyphicon-plus"></span>
																</div>								
															</div>

														</div>
													</div>

													<div class="accordion-item__body accordion-item__body--black collapse" aria-expanded="false">
														<trade-module-content data="::course.fag" ></trade-module-content>														
													</div>

												</div> <!-- ng-repeat -->						
									

											</div>
										</div>
									</div>
								</div>
							</div>
							<a class="matchtest__content__app__button matchtest__content__app__button--orange" ng-click="matchtest.begin('<?php print $moduleIdentifier; ?>', '<?php print  $autoStart; ?>')">Tag testen igen</a>
						</div>


					</div>
				</div>

			</div>

		</div>
		<?php
	}

}