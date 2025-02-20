<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/twomice/cfreviewp
 * @since             1.0.0
 * @package           Cfreviewp
 *
 * @wordpress-plugin
 * Plugin Name:       Caldera Forms Review for PILnet
 * Plugin URI:        https://github.com/twomice/cfreviewp
 * Description:       Provides review of PILnet Matters; passing review creates a Matter in CiviCRM.
 * Version:           1.0.1
 * Author:            Allen Shaw, Joinery
 * Author URI:        https://joineryhq.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cfreviewp
 */
// If this file is called directly, abort.
if (!defined('WPINC')) {
  die;
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-cfreviewp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_cfreviewp() {
  $plugin = new Cfreviewp();
  $plugin->run();
}

run_cfreviewp();

