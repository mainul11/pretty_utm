<?php 
/**
 * triggered on deactivate
 */
class pretty_utm_Deactivator
{
	public $db;

	public function __construct( $plugin_name )
    {
		$this->plugin_name = $plugin_name;
		global $wpdb;
        $this->db = $wpdb;
	}

	public function deactivate()
    {
		//
	}
}