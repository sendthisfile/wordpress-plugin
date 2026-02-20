<?php
/*
Plugin Name: SendThisFile Button
Plugin URI: https://github.com/sendthisfile/wordpress-plugin
Author: SendThisFile
Author URI: https://sendthisfile.com
Description: Enables [sendthisfile] shortcode that displays a file sharing button and dialog to your website.
Version: 1.1.0
Requires at least: 4.7
Tested up to: 6.8.2
Text Domain: sendthisfile-button
Domain Path: /languages
*/

defined( 'ABSPATH' ) or die;

define( 'SENDTHISFILE_BUTTON_FILE', __FILE__ );
define( 'SENDTHISFILE_BUTTON_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'SENDTHISFILE_BUTTON_OPTSGROUP_NAME', 'sendthisfile_button_optsgroup' );
define( 'SENDTHISFILE_BUTTON_OPTIONS_NAME', 'sendthisfile_button_options' );
define( 'SENDTHISFILE_BUTTON_SCRIPT_URL', 'https://cdn.sendthisfile.com/button/sendthisfile-button.min.js' );
define( 'SENDTHISFILE_BUTTON_SCRIPT_DEV_URL', 'https://cdn.dev.sendthisfile.com/button/sendthisfile-button.min.js' );
define( 'SENDTHISFILE_BUTTON_SCRIPT_LOCAL_URL', 'http://localhost:8081/button/sendthisfile-button.min.js' );
define( 'SENDTHISFILE_BUTTON_LOGO_URL', plugins_url( 'images/logo.svg', __FILE__ ) );
define( 'SENDTHISFILE_BUTTON_VER', '1.0.0' );

if ( ! class_exists( 'SendThisFile_Button' ) ) {
	class SendThisFile_Button{
		public static function get_instance() {
			if ( self::$instance == null ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

    private $scriptUrl = SENDTHISFILE_BUTTON_SCRIPT_URL;

		private static $instance = null;

		private function __clone() { }

		public function __wakeup() { }

		private function __construct() {
			// General Initialization
			add_action( 'init', array( $this, 'init' ) );
			add_action( 'admin_init', array( $this, 'register_settings' ) );
			add_action( 'admin_menu', array( $this, 'add_menu_item' ) );

			// Set up Shortcode
			add_shortcode( 'sendthisfile', array( $this, 'output_shortcode' ) );

			// The script must be installed after adding the shortcode because the process depends on
			// information obtained during the shortcode setup.
      add_action( 'wp_enqueue_scripts', array( $this, 'register_assets' ) );
		}

		public function init() {
			load_plugin_textdomain( 'sendthisfile-button', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
		}

		public function register_settings() {
			register_setting( SENDTHISFILE_BUTTON_OPTSGROUP_NAME, SENDTHISFILE_BUTTON_OPTIONS_NAME );
		}

		public function add_menu_item() {
			add_menu_page(
				__( 'SendThisFile', 'sendthisfile-button' ),
				__( 'SendThisFile', 'sendthisfile-button' ),
				'manage_options',
				'sendthisfile-button',
				array( $this, 'render_options_page' ),
				plugins_url( 'images/icon.png', __FILE__ )
			);
		}

		public function render_options_page() {
			require( __DIR__ . '/options.php' );
		}

		public function register_assets() {
			wp_register_script( 'sendthisfile-button', $this->scriptUrl, array(), SENDTHISFILE_BUTTON_VER, true );
		}

		public function output_shortcode( $atts, $content, $tag ) {
			wp_enqueue_script( 'sendthisfile-button' );

			extract( shortcode_atts( array(
				'buttonid' => $this->get_option( 'buttonid' ),
				'button_label' => $this->get_option( 'button_label', __( 'Send files', 'sendthisfile-button' ) ),
				'env' => $this->get_option( 'env' )
			), $atts, $tag ) );

			if ( empty( $buttonid ) ) return __( 'Invalid button id', 'sendthisfile-button' );

      switch ( $env ) {
        case 'dev':
          $this->scriptUrl = SENDTHISFILE_BUTTON_SCRIPT_DEV_URL;
          break;
        case 'local':
          $this->scriptUrl = SENDTHISFILE_BUTTON_SCRIPT_LOCAL_URL;
          break;
      }

			return '<sendthisfile-button label="' . esc_attr( $button_label ) . '" buttonid="' . esc_attr( $buttonid ) . '"></sendthisfile-button>';
		}

		private function get_option( $option_name, $default = '' ) {
			if ( is_null( $this->options ) ) $this->options = ( array ) get_option( SENDTHISFILE_BUTTON_OPTIONS_NAME, array() );
			if ( isset( $this->options[$option_name] ) ) return $this->options[$option_name];
			return $default;
		}
	}

	SendThisFile_Button::get_instance();

}
