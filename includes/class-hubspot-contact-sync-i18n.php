<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/cravelight
 * @since      1.0.0
 *
 * @package    Hubspot_Contact_Sync
 * @subpackage Hubspot_Contact_Sync/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Hubspot_Contact_Sync
 * @subpackage Hubspot_Contact_Sync/includes
 * @author     Mark Gidman <cravelight@gmail.com>
 */
class Hubspot_Contact_Sync_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'hubspot-contact-sync',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
