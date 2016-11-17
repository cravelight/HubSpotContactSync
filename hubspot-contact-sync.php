<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/cravelight
 * @since             1.0.0
 * @package           Hubspot_Contact_Sync
 *
 * @wordpress-plugin
 * Plugin Name:       HubSpot Contact Sync
 * Plugin URI:        https://github.com/cravelight/HubSpotContactSync
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Mark Gidman
 * Author URI:        https://github.com/cravelight
 * License:           GPL-2.0+
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       hubspot-contact-sync
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hubspot-contact-sync-activator.php
 */
function activate_hubspot_contact_sync() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hubspot-contact-sync-activator.php';
	Hubspot_Contact_Sync_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hubspot-contact-sync-deactivator.php
 */
function deactivate_hubspot_contact_sync() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hubspot-contact-sync-deactivator.php';
	Hubspot_Contact_Sync_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hubspot_contact_sync' );
register_deactivation_hook( __FILE__, 'deactivate_hubspot_contact_sync' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hubspot-contact-sync.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hubspot_contact_sync() {

	$plugin = new Hubspot_Contact_Sync();
	$plugin->run();

}
run_hubspot_contact_sync();
