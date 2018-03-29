<?php
/**
 * Reset and Drop all plugin data
 */
class pretty_utm_Reset extends pretty_utm
{
    public $db;

    public function __construct( $plugin_name )
    {
        $this->plugin_name = $plugin_name;
        global $wpdb;
        $this->db = $wpdb;
    }

    public function reset_links()
    {
        $this->db->query( "DROP TABLE IF EXISTS " . $this->db->prefix . $this->plugin_name . '_links' );
    }

    public function reset_mediums()
    {
        $this->db->query( "DROP TABLE IF EXISTS " . $this->db->prefix . $this->plugin_name . '_mediums' );
    }

    public function reset_sources()
    {
        $this->db->query( "DROP TABLE IF EXISTS " . $this->db->prefix . $this->plugin_name . '_sources' );
    }

    public function reset_options()
    {
        delete_option( $this->plugin_name . '_version' );
        delete_option( $this->plugin_name . '_google_api_key' );
    }

    public function reset_all()
    {
        self::reset_links();
        self::reset_mediums();
        self::reset_sources();
        self::reset_options();
    }

}
