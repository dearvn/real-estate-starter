<?php
/**
 * Enqueue class.
 *
 * @package WPRS
 */

namespace WPRS;

use WPRS\Traits\Singleton;

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add styles of scripts files inside this class.
 */
class Enqueue {

	use Singleton;

	/**
	 * Constructor of Bootstrap class.
	 */
	private function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
	}

	/**
	 * Add JS scripts.
	 */
	public function enqueue_scripts() {
		// wp_enqueue_script();
	}

	/**
	 * Add CSS files.
	 */
	public function enqueue_styles() {
		// wp_enqueue_style();
	}
}
