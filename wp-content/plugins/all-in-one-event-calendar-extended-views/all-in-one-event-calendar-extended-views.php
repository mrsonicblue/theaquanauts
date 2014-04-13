<?php
/**
 * Plugin Name: All-in-One Event Calendar Extended Views by Time.ly
 * Plugin URI: http://time.ly/
 * Description: Posterboard and Stream views for Time.ly's All-in-One Event Calendar plugin
 * Author: Time.ly Network Inc.
 * Author URI: http://time.ly/
 * Version: 1.0.5
 * Text Domain: all-in-one-event-calendar-extended-views
 * Domain Path: /language
 */

// Define constants for extension.
$ai1ecev_base_dir = dirname( __FILE__ );
$ai1ecev_base_url = plugins_url( '', __FILE__ );
define( 'AI1ECEV_VERSION', '1.0.5' );
define( 'AI1ECEV_PLUGIN_NAME', 'all-in-one-event-calendar-extended-views' );
if ( ! defined( 'AI1ECEV_PATH' ) ) {
	define( 'AI1ECEV_PATH', $ai1ecev_base_dir );
}
if ( ! defined( 'AI1ECEV_URL' ) ) {
	define( 'AI1ECEV_URL', $ai1ecev_base_url );
}
define( 'AI1ECEV_FILE',        __FILE__ );

function ai1ec_extended_views( Ai1ec_Registry_Object $registry ) {
	$registry->extension_acknowledge( AI1ECEV_PLUGIN_NAME, AI1ECEV_PATH );
	$registry->inject_object(
		'Ai1ec_Controller_Ai1ecev',
		$GLOBALS['ai1ec_extended_views']
	);
	$GLOBALS['ai1ec_extended_views']->init( $registry );
}

require_once AI1ECEV_PATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR .
	'controller' . DIRECTORY_SEPARATOR . 'extension' . DIRECTORY_SEPARATOR . 'load.php';
require_once AI1ECEV_PATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR .
	'controller' . DIRECTORY_SEPARATOR . 'ai1ecev.php';

/* NOTE: global is used to avoid double constructor call */
$GLOBALS['ai1ec_extended_views'] = new Ai1ec_Controller_Ai1ecev();
register_activation_hook(
	__FILE__,
	array( $GLOBALS['ai1ec_extended_views'], 'on_activation' )
);

add_action( 'ai1ec_loaded', 'ai1ec_extended_views', 9 );