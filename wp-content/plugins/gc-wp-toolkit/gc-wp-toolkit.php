<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              goldencomm.com
 * @since             1.0.0
 * @package           GC_Toolkit
 *
 * @wordpress-plugin
 * Plugin Name:       GC WP Toolkit
 * Plugin URI:        goldencomm.com
 * Description:       This plugin adds developer-friendly functionality for WordPress Customizer, metaboxes, custom post types, and more.
 * Version:           1.2.9
 * Author:            Matthew R
 * Author URI:        goldencomm.com
 * Requires PHP:      5.6
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gc-wp-toolkit
 * Domain Path:       /languages
 * Bitbucket Plugin URI: https://bitbucket.org/goldencomm/gc-wp-toolkit
 * Bitbucket Branch: master
 */

spl_autoload_register(function($class) {
	$prefix = 'GoldenComm\\Toolkit\\';

	$len = strlen($prefix);
	if (strncmp($prefix, $class, $len) !== 0)
		return;

	$d = DIRECTORY_SEPARATOR;
	$base = __DIR__ . "{$d}lib{$d}";
	$relative_class = substr($class, $len);
	$file = $base . str_replace('\\', $d, $relative_class) . '.php';

	if (file_exists($file)) {
		require $file;
	}

	return;
});

/**
 * This plugin requires at least 5.6
 */
if(!version_compare('5.6', phpversion(), '<=')) {
    GoldenComm\Toolkit\Plugin::stop(
        sprintf(__( 'You must be using PHP 5.6 or greater, currently running %s' ), phpversion()),
        __('Invalid PHP Version', 'gc-wp-toolkit')
    );
}


/**
 * Returns an instance of this plugin
 * @param null|string $name
 * @param null|string|callable $value
 * @return \GoldenComm\Toolkit\Plugin|mixed
 */
function gc_toolkit( $name = null, $value = null ) {
    $instance = \GoldenComm\Toolkit\Plugin::getInstance();
    $container = $instance->container();

    if( !empty($value) )
        return $container->set($name, $value);

    if( !empty($name) ) {
        return $container->get($name);
    }

    return $instance;
}

/**
 * Starts the plugin
 */
function gc_toolkit_start() {
    GoldenComm\Toolkit\Plugin::start();
}

add_action('plugins_loaded', 'gc_toolkit_start');
