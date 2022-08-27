<?php
/**
 * Sample_Ajax class.
 *
 * @package WPRS
 */

namespace WPRS\Ajax;

use WPRS\Traits\Singleton;

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load sample ajax functionality inside this class.
 */
class Sample_Ajax {

	use Singleton;

	/**
	 * Constructor of Bootstrap class.
	 */
	private function __construct() {
		add_action( 'wp_ajax_sample_action', array( $this, 'sample_action' ) );
		add_action( 'wp_ajax_nopriv_sample_action', array( $this, 'sample_action' ) );
	}

	/**
	 * Run a sample action.
	 */
	public function sample_action() {
		echo 'This is a sample action.';

		wp_die();
	}
}
