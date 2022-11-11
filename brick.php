<?php
/**
 * Plugin Name: 1815 - Brick
 * Plugin URI: https://www.1815.nl
 * Description: WordPress starter plugin
 * Version: 0.0.1
 * Author: 1815
 * Author URI: https://www.1815.nl
 *
 * @package AchttienVijftien\Plugin\Brick
 **/

if ( file_exists( plugin_dir_path( __FILE__ ) . 'vendor/autoload.php' ) ) {
	require plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';
}

\AchttienVijftien\Plugin\Brick\Bootstrap::get_instance()->init();
