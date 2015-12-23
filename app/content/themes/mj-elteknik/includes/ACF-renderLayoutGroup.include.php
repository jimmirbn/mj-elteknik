<?php
/* Rendering the rows in the flexible content group */
if(!function_exists('renderLayoutGroup')){
	function renderLayoutGroup($pageId = null, $moduleLayout = null)
	{
		if(!isset($moduleLayout)) $moduleLayout = 'layout_group_rows';
		if($pageId){
			$rows = get_field($moduleLayout, $pageId);
			// $rows = get_field('layout_group_rows', $pageId);
		} else {
			$rows = get_field($moduleLayout);
			// $rows = get_field('layout_group_rows');
		}

		if( $rows ){
			foreach( $rows as $row ){
				// echo '<pre>';
				// 	print_r($row);
				// echo '</pre>';
					
				if($row['acf_fc_layout'] == 'reusablemodule'){
					renderLayoutGroup($row[""]);
				} else {
					$moduleName = $row['acf_fc_layout'];
					$module = new $moduleName();
				    $module->render($row);
				}
			}
		}
	}
}
if(isset($theme_settings_modulePartId)){
	renderLayoutGroup($theme_settings_modulePartId);
} else if(isset($moduleLayout) && $moduleLayout != ""){
	renderLayoutGroup(null, $moduleLayout);
} else {
	renderLayoutGroup(null);
}

/* Render options page template parts for archive pages */
//if(isset($theme_settings_modulePartId)) renderLayoutGroup($theme_settings_modulePartId);

set_query_var('theme_settings_modulePartId', null); // Unset the parameter since we're done with it
set_query_var('moduleLayout', null); // Unset the parameter since we're done with it