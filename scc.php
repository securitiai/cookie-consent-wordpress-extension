<?php

/**
 *
 * @link              https://securiti.ai
 * @since             1.0.0
 * @package           scc
 *
 * @wordpress-plugin
 * Plugin Name:       Cookie Consent for GDPR/CCPA | Securiti
 * Plugin URI:        https://securiti.ai/privaci/cookie-consent-management/?utm_source=wordpress&utm_medium=referral&utm_campaign=plugin
 * Description:       Award-winning Cookie Consent plugin that allows you to generate Cookie Banner, Notice & Policy for your website. Supports GDPR, CCPA, PIPEDA and ePrivacy.
 * Version:           1.0.1
 * Author:            Securiti
 * Author URI:        https://securiti.ai/privaci/cookie-consent-management/?utm_source=wordpress&utm_medium=referral&utm_campaign=plugin
 * License:           GPL-3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       scc
 * Domain Path:       /languages/
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'scc_VERSION', '1.0.1' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-scc.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_scc() {

	$plugin = new scc();
	$plugin->run();

}
run_scc();
