<?php
/*
Plugin Name: SendThisFile Button
Description: Enables [SendThisFileButton] shortcode which outputs a file sharing button and dialog to your website.
Version:     1.0.0
Author:      sendthisfile
Author URI:  https://app.sendthisfile.com/
Text Domain: sendthisfile-button
Domain Path: /languages
*/

defined( 'ABSPATH' ) or die;

define( 'SENDTHISFILE_BUTTON_FILE', __FILE__ );
define( 'SENDTHISFILE_BUTTON_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'SENDTHISFILE_BUTTON_OPTSGROUP_NAME', 'sendthisfile_button_optsgroup' );
define( 'SENDTHISFILE_BUTTON_OPTIONS_NAME', 'sendthisfile_button_options' );
define( 'SENDTHISFILE_BUTTON_SCRIPT_URL', 'https://cdn.sendthisfile.com/button/sendthisfile-button.min.js' );
define( 'SENDTHISFILE_BUTTON_LOGO_URL', plugins_url( 'images/horizontal_PMS.svg', __FILE__ ) );
define( 'SENDTHISFILE_BUTTON_VER', '1.0.0' );

if ( ! class_exists( 'SendThisFile_Button' ) ) {
	class SendThisFile_Button{
		public static function get_instance() {
			if ( self::$instance == null ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		private static $instance = null;

		private function __clone() { }

		public function __wakeup() { }

		private function __construct() {
			// Actions
			add_action( 'init', array( $this, 'init' ) );
			add_action( 'admin_init', array( $this, 'register_settings' ) );
			add_action( 'admin_menu', array( $this, 'add_menu_item' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'register_assets' ) );

			// Shortcode
			add_shortcode( 'SendThisFileButton', array( $this, 'output_shortcode' ) );
		}

		public function init() {
			load_plugin_textdomain( 'sendthisfile-button', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
		}

		public function register_settings() {
			register_setting( SENDTHISFILE_BUTTON_OPTSGROUP_NAME, SENDTHISFILE_BUTTON_OPTIONS_NAME );
		}

		public function add_menu_item() {
			add_menu_page(
				__( 'SendThisFile B', 'sendthisfile-button' ),
				__( 'SendThisFile B', 'sendthisfile-button' ),
				'manage_options',
				'sendthisfile-button',
				array( $this, 'render_options_page' ),
				'dashicons-admin-generic'
			);
		}

		public function render_options_page() {
			require( __DIR__ . '/options.php' );
		}

		public function register_assets() {
			wp_register_script( 'sendthisfile-button', SENDTHISFILE_BUTTON_SCRIPT_URL, array(), SENDTHISFILE_BUTTON_VER, true );
		}

		public function output_shortcode( $atts, $content, $tag ) {
			wp_enqueue_script( 'sendthisfile-button' );

			extract( shortcode_atts( array(
				'button_id' => $this->get_option( 'button_id' ),
				'button_label' => $this->get_option( 'button_label', __( 'Send files', 'sendthisfile-button' ) )
			), $atts, $tag ) );

			if ( empty( $button_id ) ) return __( 'Invalid button id', 'sendthisfile-button' );

			return '<sendthisfile-button label="' . esc_attr( $button_label ) . '" buttonid="' . esc_attr( $button_id ) . '"></sendthisfile-button>';
		}

		private function get_option( $option_name, $default = '' ) {
			if ( is_null( $this->options ) ) $this->options = ( array ) get_option( SENDTHISFILE_BUTTON_OPTIONS_NAME, array() );
			if ( isset( $this->options[$option_name] ) ) return $this->options[$option_name];
			return $default;
		}
	}

	SendThisFile_Button::get_instance();
}