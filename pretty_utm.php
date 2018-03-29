<?php
/**
 * Plugin Name:       Pretty UTM
 * Plugin URI:        
 * Description:       Create UTM for your posts, pages and external websites easily. Also, create short pretty URLs to make your campaign tracking better than ever.
 * Version:           1.0.1
 * Author:            Mainul Kabir Aion
 * Author URI:        https://mkaion.com
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       aion
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) )
{
	die;
}


function activate_pretty_utm()
{

	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pretty_utm.php';
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pretty_utm-activator.php';
	
	$plugin_ = new pretty_utm();
	$activation = new pretty_utm_Activator( $plugin_->get_plugin_name() );
	$activation->run();

}

function deactivate_pretty_utm()
{

	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pretty_utm.php';
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pretty_utm-deactivator.php';
	
	$plugin_ = new pretty_utm();
	$plugin = new pretty_utm_Deactivator( $plugin_->get_plugin_name() );
	$plugin->deactivate();

}

register_activation_hook( __FILE__, 'activate_pretty_utm' );
register_deactivation_hook( __FILE__, 'deactivate_pretty_utm' );

require plugin_dir_path( __FILE__ ) . 'includes/class-pretty_utm.php';

$plugin = new pretty_utm();
$plugin->run();

