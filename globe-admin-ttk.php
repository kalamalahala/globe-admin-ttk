<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/kalamalahala/
 * @since             1.0.0
 * @package           Globe_Admin_Ttk
 *
 * @wordpress-plugin
 * Plugin Name:       Globe Life User Administration
 * Plugin URI:        https://github.com/kalamalahala/
 * Description:       Common snippets and functions for administering Globe Life wordpress sites.
 * Version:           1.0.0
 * Author:            Tyler Karle
 * Author URI:        https://github.com/kalamalahala/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       globe-admin-ttk
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'GLOBE_ADMIN_TTK_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-globe-admin-ttk-activator.php
 */
function activate_globe_admin_ttk() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-globe-admin-ttk-activator.php';
	Globe_Admin_Ttk_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-globe-admin-ttk-deactivator.php
 */
function deactivate_globe_admin_ttk() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-globe-admin-ttk-deactivator.php';
	Globe_Admin_Ttk_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_globe_admin_ttk' );
register_deactivation_hook( __FILE__, 'deactivate_globe_admin_ttk' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-globe-admin-ttk.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_globe_admin_ttk() {

	$plugin = new Globe_Admin_Ttk();
	$plugin->run();

}
run_globe_admin_ttk();
