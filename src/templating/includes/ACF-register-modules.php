<?php
/**
 * Create "Layout group" flexible content field and loop through modules and register them
 * Link to documentation: http://www.advancedcustomfields.com/resources/register-fields-via-php/
 *
 * @author Jens Sogaard
 **/	



/**
 * replace any value in $array specified by $key with $value
 *
 * @return array array with replaced values
 */
function replace_recursive(Array $array, $theKey, $appendToKey)
{
    array_walk_recursive($array, function(&$v, $k) use ($theKey, $appendToKey)
	{
		if($k === $theKey) $v .= $appendToKey;
	});
    return $array;
}

/**
 * Add "reusablemodule"-posttype
 * */
function custom_post_type_reusablemodule() {
    $name = "Reusable modules";
	$singular_name = "Reusable module";
	$slug = "reusablemodule";

	$labels = array(
		'name'               => $name,
		'singular_name'      => $singular_name,
		'add_new'            => 'Tilføj ny',
		'add_new_item'       => 'Tilføj ny '.$singular_name,
		'edit_item'          => 'Rediger '.$singular_name,
		'new_item'           => 'Ny '.$singular_name,
		'all_items'          => 'Alle '.$name,
		'view_item'          => 'Se '.$singular_name,
		'search_items'       => 'Søg '.$name,
		'not_found'          => 'Ingen '.strtolower($name).' found',
		'not_found_in_trash' => 'Ingen '.strtolower($name).' found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => $name
		);

	$args = array(
		'menu_icon' => 'dashicons-layout',
		'labels'             => $labels,
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => $slug ),
		'capability_type'    => 'page',
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','author')
	);
	register_post_type( $slug, $args );
}
add_action( 'init', 'custom_post_type_reusablemodule' );

/**
 * Loops through all files in folder modules and adds them to the ACF repeater
 * */
if(function_exists("acf_add_local_field_group"))
{
	// Loop over files in modules
	$moduleDefinitionsAbove = array();
	$moduleDefinitions = array();

	$files = glob(dirname(__FILE__)."/../modules/*.php");
	$files = array_reverse($files);
	foreach ($files as $filename)
	{
	    include $filename;
	    $filename = explode("/",$filename);
	    $className = str_replace(".php","",$filename[count($filename)-1]);
	    if(substr($className,0,1) == "_") continue; // Skip the file if it begins with underscore
	    $module = new $className();
	    $moduleDefinition = $module->acfDefinition();
	    $moduleDefinitions[] = $moduleDefinition;

	    // Tweak module definition used above content. MUST: unique keys so we append ___top
	    $moduleDefinitionAbove = $moduleDefinition;
	    $moduleDefinitionAbove['sub_fields'] = replace_recursive($moduleDefinitionAbove['sub_fields'], 'key', '___top');
	    $moduleDefinitionAbove['sub_fields'] = replace_recursive($moduleDefinitionAbove['sub_fields'], 'field', '___top');
	    $moduleDefinitionsAbove[] = $moduleDefinitionAbove;
	}

	acf_add_local_field_group(array (
		'key' => 'plant_layout_group',
		'title' => 'Layout Group',
		'fields' => array (
			array (
				'key' => 'layout_group_rows',
				'label' => 'Modules',
				'name' => 'layout_group',
				'type' => 'flexible_content',
				'layouts' => $moduleDefinitionsAbove,
				'button_label' => 'Add module',
				'min' => '',
				'max' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'reusablemodule',
				),
			)
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}