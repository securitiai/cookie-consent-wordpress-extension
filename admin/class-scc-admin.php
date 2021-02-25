<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://securiti.ai
 * @since      1.0.0
 *
 * @package    scc
 * @subpackage scc/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    scc
 * @subpackage scc/admin
 * @author     SECURITI.ai <wordpress-support@securiti.ai>
 */
class scc_Admin {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      scc_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;


	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 * @param      string    $loader    Class that orchestrates the hooks with the plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->loader = new scc_Loader();

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/scc-admin.css', array(), $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/scc-admin.js', array( 'jquery' ), $this->version, false );
	}

	/**
	 * Add an options page under the Settings submenu
	 *
	 * @since  1.0.0
	 */
	public function add_options_page() {
		add_options_page(
			__('Cookie Consent for GDPR/CCPA | securiti Settings', $this->plugin_name ),
			__( 'Cookie Consent for GDPR/CCPA | securiti', $this->plugin_name ),
			'manage_options',
			$this->plugin_name,
			array( $this, 'display_options_page' )
		);
	}

	/**
	 * Render the options page for plugin
	 *
	 * @since  1.0.0
	 */
	public function display_options_page() {
		// check user capabilities
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/options-page.php';
	}

	/**
	 * Register settings for plugin
	 *
	 * @since  1.0.0
	 */
	public function register_setting() {
		register_setting( 'cookie-consent-code', 'scc_code', 'trim' );
	}

	/**
	 * Register settings for plugin
	 *
	 * @since  1.0.0
	 */
	public function render_codes() {
		$this->loader->output('scc_code');
	}
}
