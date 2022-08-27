<?php
/**
 * Plugin Name: Real Estate Starter
 * Description: A standardized, organized, object-oriented foundation for building high-quality WordPress Plugins.
 * Version:     1.0.0
 * Author:      donald
 * Author URI:  https://github.com/dearvn/real-estate-starter
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: plugin-name
 *
 * @package WPRS
 */

/*
Real Estate Starter is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Real Estate Starter is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Real Estate Starter. If not, see http://www.gnu.org/licenses/gpl-2.0.txt.
*/

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define plugin __FILE__
 */
if ( ! defined( 'WPRS_PLUGIN_FILE' ) ) {
	define( 'WPRS_PLUGIN_FILE', __FILE__ );
}

/**
 * Include necessary files to initial load of the plugin.
 */
if ( ! class_exists( 'WPRS\Bootstrap' ) ) {
	require_once __DIR__ . '/includes/traits/trait-singleton.php';
	require_once __DIR__ . '/includes/class-bootstrap.php';
}

/**
 * Initialize the plugin functionality.
 *
 * @since  1.0.0
 * @return WPRS\Bootstrap
 */
function real_estate_starter_plugin() {
	return WPRS\Bootstrap::instance();
}

// Call initialization function.
real_estate_starter_plugin();
