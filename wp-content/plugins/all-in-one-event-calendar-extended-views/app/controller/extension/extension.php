<?php
if ( ! class_exists( 'Ai1ec_Extension_Controller' ) ) { 
	/**
	 * Basic extension controller.
	 *
	 * @author     Time.ly Network Inc.
	 * @since      2.0
	 *
	 * @package    AI1EC
	 * @subpackage AI1EC.Controller
	 */
	abstract class Ai1ec_Extension_Controller {
		
		/**
		 * @var Ai1ec_Registry_Object
		 */
		protected $_registry;
	
		/**
		 * @var array
		 */
		protected $_settings;
	
		/**
		 * @var Ai1ec_Registry_Object
		 */
		protected static $_registry_static;
	
		/**
		 * @var array
		 */
		protected static $_settings_static;
	
		/**
		 * @var array
		 */
		protected static $_schema;

		/**
		 * @var string the name of the option for the on_activation() hook
		 */
		protected $_activated_option;
		
		/**
		 * Get the long name of the extension
		 */
		abstract public function get_name();
		
		/**
		 * Get the machine name of the extension
		 */
		abstract public function get_machine_name();
	
		/**
		 * Get the version of the extension
		 */
		abstract public function get_version();
	
		/**
		 * Get the name of the main plugin file
		 */
		abstract public function get_file();
	
		/**
		 * Add extension specific settings
		 */
		abstract protected function _get_settings();
	
		/**
		 * Register action/filters/shortcodes for the extension
		 * 
		 * @param Ai1ec_Event_Dispatcher $dispatcher
		 */
		abstract protected function _register_actions(
			Ai1ec_Event_Dispatcher $dispatcher
		);

		/**
		 * Removes options when uninstalling the plugin.
		 */
		public static function on_uninstall() {
			global $wpdb;
			if ( ! current_user_can( 'activate_plugins' ) ) {
				return;
			}
			$settings = self::$_registry_static->get( 'model.settings' );
			foreach ( self::$_settings_static as $name => $params ) {
				$settings->remove_option( $name );
			}
			$schema = self::$_schema;
			foreach ( $schema['tables'] as $table_name ) {
				// Delete table events
				$wpdb->query( 'DROP TABLE IF EXISTS ' . $table_name );
			}
		}

		/**
		 * Public constructor
		 */
		public function __construct() {
			global $wpdb;
			self::$_schema           = $this->_get_schema( $wpdb->prefix );
			$this->_activated_option = 'ai1ec_' . $this->get_machine_name() .
				'_activated';
		}

		/**
		 * initialize the extension. 
		 */
		public function init( Ai1ec_Registry_Object $registry ) {
			$this->_registry = $registry;
			// static properties are needed as uninstall hook must be static
			// http://wpseek.com/register_uninstall_hook/
			self::$_registry_static = $registry;
			register_deactivation_hook(
				$this->get_file(),
				array( $this, 'on_deactivation' )
			);

			$settings = $this->_get_settings();
			$this->_settings        = $settings;
			self::$_settings_static = $settings;
			// if we are reactivating, show the options
			$option = $registry->get( 'model.option' );
			if (
				is_admin() &&
				$option->get( $this->_activated_option )
			) {
				$db_version_variable = 'ai1ec_' . $this->get_machine_name() .
					'_db_version';
				$schema              = self::$_schema;
				$version             = sha1( $schema['schema'] );
				if (
					! empty( $schema['schema'] ) &&
					$option->get( $db_version_variable ) !== $version
				) {
					if (
						$registry->get( 'database.helper' )->apply_delta(
							$schema['schema']
						)
					) {
						$option->set( $db_version_variable, $version );
					} else {
						throw new Ai1ec_Database_Update_Exception(
							'Database upgrade for ' . $this->get_name() .
							' failed'
						);
					}
				}
				$this->show_settings();
				$option->delete( $this->_activated_option );
			}
			$this->_register_actions( $registry->get( 'event.dispatcher' ) );
			$this->_add_settings( $registry->get( 'model.settings' ) );
			if ( method_exists( $this, 'initialize_licence_actions' ) ) {
				$this->initialize_licence_actions();
			}
		}

		/**
		 * Adds an option to the db to perform activation after the redirect
		 * 
		 */
		public function on_activation() {
			if ( ! current_user_can( 'activate_plugins' ) ) {
				return;
			}
			// there is a redirect after this call
			add_option( $this->_activated_option, true );
		}

		/**
		 * Hides settings on deactivation.
		 */
		public function on_deactivation() {
			if ( ! current_user_can( 'activate_plugins' ) ) {
				return;
			}
			$plugin = isset( $_REQUEST['plugin'] ) ? $_REQUEST['plugin'] : '';
			check_admin_referer( "deactivate-plugin_{$plugin}" );

			$settings = $this->_registry->get( 'model.settings' );
			foreach ( $this->_settings as $name => $params ) {
				$settings->hide_option( $name );
			}
		}

		/**
		 * Show the settings
		 */
		public function show_settings() {
			$settings = $this->_registry->get( 'model.settings' );
			foreach ( $this->_settings as $name => $params ) {
				$settings->show_option( $name, $params['renderer'] );
			}
			$settings->set( 'allow_statistics', true );
			$settings->hide_option( 'allow_statistics' );
		}

		/**
		 * If extensions need to add tables, they will need to override the function to add a schema.
		 *
		 * @param string $prefix Database prefix to use for table names.
		 *
		 * @return array an array with two keys, schema and tables which are used 
		 *               for installing and dropping the table
		 */
		protected static function _get_schema( $prefix ) {
			return array(
				'tables' => array(),
				'schema' => '',
			);
		}

		/**
		 * Since the call the to the uninstall hook it's static, if a different behaviour
		 * is needed also this call must be overridden.
		 */
		protected function _register_uninstall_hook() {
			register_uninstall_hook(
				$this->get_file(),
				array( get_class( $this ), 'on_uninstall' )
			);
		}

		/**
		 * Adds extension settings
		 *
		 * @param Ai1ec_Settings $settings
		 */
		protected function _add_settings( Ai1ec_Settings $settings ) {
			foreach ( $this->_settings as $name => $params ) {
				$renderer = null;
				if ( isset( $params['renderer'] ) ) {
					$renderer = $params['renderer'];
				}
				$settings->register(
					$name,
					$params['value'],
					$params['type'],
					$renderer,
					$this->get_version()
				);
			}
		}
	}

}