<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/kalamalahala/
 * @since      1.0.0
 *
 * @package    Globe_Admin_Ttk
 * @subpackage Globe_Admin_Ttk/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Globe_Admin_Ttk
 * @subpackage Globe_Admin_Ttk/includes
 * @author     Tyler Karle <tyler.karle@icloud.com>
 */
class Globe_Admin_Ttk_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'globe-admin-ttk',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
