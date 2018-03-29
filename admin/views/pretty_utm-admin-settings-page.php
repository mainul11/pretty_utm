<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $wpdb;

$plugin = new pretty_utm_Admin( $this->plugin_real_name, $this->plugin_name, $this->version );
$plugin->check_manage_links();
$plugin->check_settings();
$plugin->check_advanced();
$plugin->check_reset();

$plugin->remove_link_id();

$plugin->enqueue_notices();


?>
<div class="wrap" id="pretty_utm">

    <div class="pretty_utm_notice animated fadeInDown" style="display: none;">
        <div class="pretty_utm_notice__inner">
            <h3><span class="dashicons dashicons-share-alt"></span> Pretty UTM Builder</h3>
            <p>The link has been copied to clipboard.</p>
        </div>
    </div>

	<h1><span class="dashicons dashicons-share-alt"></span> Pretty UTM Builder <i class="pretty_utm_by">by <a href="https://mkaion.com/?utm_source=wp_plugin&utm_medium=title_header&utm_campaign=pretty_utm" target="_blank">Aion</a></i> </h1>

	<ul class="pretty_utm_tabs">
		<li><a href="#pretty_utm_tab-1" class="active"><span class="dashicons dashicons-dashboard"></span> Manage</a></li>
		<li><a href="#pretty_utm_tab-2"><span class="dashicons dashicons-admin-settings"></span> Settings</a></li>
		<li><a href="#pretty_utm_tab-3"><span class="dashicons dashicons-warning"></span> Advanced Settings</a></li>
		<li><a href="#pretty_utm_tab-4"><span class="dashicons dashicons-welcome-learn-more"></span> Help</a></li>
	</ul>

	<div class="pretty_utm_tabs_container">

        <?php include dirname( __FILE__ ) . '/partial/pretty_utm-admin-manage.php'; ?>
        <?php include dirname( __FILE__ ) . '/partial/pretty_utm-admin-settings.php'; ?>
        <?php include dirname( __FILE__ ) . '/partial/pretty_utm-admin-advanced.php'; ?>
        <?php include dirname( __FILE__ ) . '/partial/pretty_utm-admin-help.php'; ?>

	</div>

	<?php include dirname( __FILE__ ) . '/partial/pretty_utm-admin-sidebar.php'; ?>

</div>