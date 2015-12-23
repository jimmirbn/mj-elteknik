<?php
Class TemplateParts {

	public function acfDefinition()
	{
		return array(
			'label' => 'Template part',
			'name' => 'TemplateParts',
			'display' => 'row',
			'min' => '',
			'max' => '',
			'sub_fields' => array (
				array (
					'key' => 'module_template_parts_pages',
					'label' => '',
					'name' => '',
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
						0 => 'templateparts',
					),
					'taxonomy' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
					'return_format' => 'id',
					'ui' => 1,
				)
			)
		);
	}

	/*
	* Not relevant any since part-modules-rendering.php takes care of rendering modules contained in a template part
	public function render()
	{
		// if( have_rows('layout_group_rows') ):
		// 	while ( have_rows('layout_group_rows') ) : the_row();
		        $rowName = get_row_layout();
		        print "<h1>".$rowName."</h1>";
		        // $module = new $rowName();
		        // $module->render();
		        
		        // else :
		        //     // get_template_part('part/_module--not-found.part');
		        // endif;
		    
		//     endwhile;
		// endif;
	}*/
}