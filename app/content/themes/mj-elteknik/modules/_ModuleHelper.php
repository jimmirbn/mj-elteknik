<?php
/**
 * undocumented class
 *
 * @package default
 * @author Jens Sogaard 
 **/
class ModuleHelper
{
	public function jsonResponse($status, $message = "",$data = null)
	{
		$response = json_encode(
			array(
				'status' => $status,
				'message' => $message,
				'data' => $data
			)
		);
		header( "Content-Type: application/json" );
		echo $response;
		die();
	}

	public function getUniqueId($parameters)
	{
		// return md5(uniqid());
		return md5(serialize($parameters));
	}

	public function setValue($key, $value)
	{
		if ( get_option( $key ) !== false ) {
			update_option( $key, $value );
		} else {
			add_option( $key, $value );
		}

	}

	public function getValue($key)
	{
		return get_option($key);
	}

	/**
	 * Returns ACF fields related to a module on a given page
	 *
	 * @return Array of one or more modules (eg. if there's more than one of the same module on a page)
	 * @author Jens Sogaard
	 **/
	public function getModuleFromPage($pageId, $moduleName)
	{
		$rows = get_field("layout_group_rows", $pageId);
		$modules = array();
		foreach($rows as $row){
			if($row['acf_fc_layout'] == $moduleName){
				$modules[] = $row;
			}
		}
		return $modules;
	}

} // END class 