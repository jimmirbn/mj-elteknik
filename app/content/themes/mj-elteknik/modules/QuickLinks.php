<?php 
Class QuickLinks {

	public function acfDefinition()
	{
		return array (
			'label' => 'Quick Links',
			'name' => 'quickLinks',
			'display' => 'row',
			'min' => '',
			'max' => '',
			'sub_fields' => array (
				array (
					'key' => 'field_55c079ecbc883',
					'label' => 'Apprenticeship Headline',
					'name' => 'apprenticeship_headline',
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
					'key' => 'field_55c07aa2bc884',
					'label' => 'Apprenticeship Body',
					'name' => 'apprenticeship_body',
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
					'key' => 'field_55c07aa7bc885',
					'label' => 'Apprenticeship Trade Area Label',
					'name' => 'apprenticeship_trade_area_label',
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
					'key' => 'field_55c07ae2bc886',
					'label' => 'Apprenticeship Label',
					'name' => 'apprenticeship_label',
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
					'key' => 'field_55c07ae9bc887',
					'label' => 'Type Test Headline',
					'name' => 'type_test_headline',
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
					'key' => 'field_55c07affbc888',
					'label' => 'Type Test Body',
					'name' => 'type_test_body',
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
					'key' => 'field_55c07b9fbc889',
					'label' => 'Type Test Label',
					'name' => 'type_test_label',
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
			)
		);
	}

	public function render($properties)
	{
	?>
		<div ng-controller="QuickLinksCtrl as ql" ng-cloak>
			<div class="quick-links row row--padded module">


				<div class="quick-links__apprenticeship col-xs-12 col-sm-6">
					<h2 class="headline"><?php print $properties['apprenticeship_headline']; ?></h2>
					<?php print $properties['apprenticeship_body']; ?>
				
					<div class="dropdown-wrapper dropdown-wrapper--without-padding">
						<div class="dropdown">
						    <button type="button" class="btn" data-toggle="dropdown">
						        <div class="label">{{ql.selections.tradeArea || '<?php print $properties['apprenticeship_trade_area_label']; ?>'}}</div>
						        <div class="arrow">
						            <span class="glyphicon glyphicon glyphicon-chevron-down"></span>
						        </div>
						    </button>
						    <ul class="dropdown-menu">
						        <li ng-repeat="item in ql.filters.fagomraade">
						            <div ng-click="ql.setFilter('tradeArea', item)" ga-track-event="forside/filter-fagomraade/{{::item}}">{{::item}}</div>
						        </li>
						    </ul>
						</div>
					</div>

					<div class="dropdown-wrapper dropdown-wrapper--without-padding-bottom" ng-hide="!ql.selections.tradeArea">
						<div class="dropdown">
						    <button type="button" class="btn" data-toggle="dropdown">
						        <div class="label">{{ql.selections.apprenticeship || '<?php print $properties['apprenticeship_label']; ?>'}}</div>
						        <div class="arrow">
						            <span class="glyphicon glyphicon glyphicon-chevron-down"></span>
						        </div>
						    </button>
						    <ul class="dropdown-menu">
						        <li ng-repeat="item in ql.filters.svendebrev">
						            <div ng-click="ql.setApprenticeship('apprenticeship', item)" ga-track-event="forside/filter-svendebrev/{{::item}}">{{::item}}</div>
						        </li>
						    </ul>
						</div>
					</div>				



				</div>


				<div class="quick-links__test col-xs-12 col-sm-6">
					<h2 class="headline"><?php print $properties['type_test_headline']; ?></h2>
					<?php print $properties['type_test_body']; ?>

					<a href="/matchtesten/?auto=true" class="btn button" ga-track-event="forside/tag-testen">
					    <div class="label"><?php print $properties['type_test_label']; ?></div>
					    <div class="arrow">
					        <span class="glyphicon glyphicon glyphicon-chevron-right"></span>
					    </div>
					</a>

				</div>


			</div>
		</div>
	<?php 
	}
}