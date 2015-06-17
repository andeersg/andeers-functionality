<?php
/**
 * Plugin Name:       Andeers Functionality
 * Plugin URI:        https://github.com/andeersg/andeers-functionality
 * Description:       Custom functionality plugin for css-tricks.com
 * Version:           1.0.0
 * Author:            Anders Grendstadbakk
 */

// If this file is called directly, abort.
if ( !defined( 'WPINC' ) ) {
	die;
}
if( !class_exists( 'AF' ) ) {
	class AF {

		/**
		 * Instance of the class
		 *
		 * @since 1.0.0
		 * @var Instance of AF class
		 */
		private static $instance;

		/**
		 * Instance of the plugin
		 *
		 * @since 1.0.0
		 * @static
		 * @staticvar array $instance
		 * @return Instance
		 */
		public static function instance() {
			if ( !isset( self::$instance ) && ! ( self::$instance instanceof AF ) ) {
				self::$instance = new AF;
				self::$instance->define_constants();
				self::$instance->includes();
				self::$instance->init = new AF_Init();
			}
		return self::$instance;
		}

		/**
		 * Define the plugin constants
		 *
		 * @since  1.0.0
		 * @access private
		 * @return void
		 */
		private function define_constants() {
			// Plugin Version
			if ( ! defined( 'AF_VERSION' ) ) {
				define( 'AF_VERSION', '1.0.0' );
			}
			// Prefix
			if ( ! defined( 'AF_PREFIX' ) ) {
				define( 'AF_PREFIX', 'af_' );
			}
			// Textdomain
			if ( ! defined( 'AF_TEXTDOMAIN' ) ) {
				define( 'AF_TEXTDOMAIN', 'af' );
			}
			// Plugin Options
			if ( ! defined( 'AF_OPTIONS' ) ) {
				define( 'AF_OPTIONS', 'af-options' );
			}
			// Plugin Directory
			if ( ! defined( 'AF_PLUGIN_DIR' ) ) {
				define( 'AF_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
			}
			// Plugin URL
			if ( ! defined( 'AF_PLUGIN_URL' ) ) {
				define( 'AF_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
			}
			// Plugin Root File
			if ( ! defined( 'AF_PLUGIN_FILE' ) ) {
				define( 'AF_PLUGIN_FILE', __FILE__ );
			}
		}

		/**
		 * Load the required files
		 *
		 * @since  1.0.0
		 * @access private
		 * @return void
		 */
		private function includes() {
			$includes_path = plugin_dir_path( __FILE__ ) . 'includes/';
			//require_once AF_PLUGIN_DIR . 'includes/class-af-register-post-types.php';
			//require_once AF_PLUGIN_DIR . 'includes/class-af-register-taxonomies.php';
			//require_once AF_PLUGIN_DIR . 'includes/class-af-remove-admin-bar.php';
			require_once AF_PLUGIN_DIR . 'includes/class-af-clean-up-head.php';
			//require_once AF_PLUGIN_DIR . 'includes/class-af-close-comments.php';
			//require_once AF_PLUGIN_DIR . 'includes/class-af-custom-feed-link.php';
			//require_once AF_PLUGIN_DIR . 'includes/class-af-insert-figure.php';
			//require_once AF_PLUGIN_DIR . 'includes/class-af-rcp-auto-renew.php';
			//require_once AF_PLUGIN_DIR . 'includes/class-af-long-url-spam.php';
			//require_once AF_PLUGIN_DIR . 'includes/class-af-remove-jetpack-bar.php';
			//require_once AF_PLUGIN_DIR . 'includes/class-af-add-mime-types.php';
			//require_once AF_PLUGIN_DIR . 'includes/class-af-remove-markdown-support.php';
			//require_once AF_PLUGIN_DIR . 'includes/class-af-add-email-feed.php';
			//require_once AF_PLUGIN_DIR . 'includes/class-af-increase-postmeta-form-limit.php';
			//require_once AF_PLUGIN_DIR . 'includes/class-af-limit-users-delete.php';
			require_once AF_PLUGIN_DIR . 'includes/class-af-remove-unwanted-assets.php';
			//require_once AF_PLUGIN_DIR . 'includes/class-af-remove-post-author-url.php';
			//require_once AF_PLUGIN_DIR . 'includes/class-af-custom-pagi.php';
			//require_once AF_PLUGIN_DIR . 'includes/class-af-allowed-tags.php';


			//require_once AF_PLUGIN_DIR . 'includes/template-functions.php';
			require_once AF_PLUGIN_DIR . 'includes/class-af-init.php';
		}

		/**
		 * Throw error on object clone
		 *
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		public function __clone() {
			_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', AF_TEXTDOMAIN ), '1.6' );
		}

		/**
		 * Disable unserializing of the class
		 *
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		public function __wakeup() {
			_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', AF_TEXTDOMAIN ), '1.6' );
		}

	}
}
/**
 * Return the instance
 *
 * @since 1.0.0
 * @return object The Safety Links instance
 */
function AF_Run() {
	return AF::instance();
}
AF_Run();