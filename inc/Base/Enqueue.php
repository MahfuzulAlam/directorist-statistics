<?php 
/**
 * @package  DirectoristStatistics
 */
namespace Inc\Base;

use Inc\Base\BaseController;

/**
* 
*/
class Enqueue extends BaseController
{
	public function register() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
	}
	
	function enqueue() {
		// enqueue all our scripts
		wp_enqueue_style( 'main-style', $this->plugin_url . 'assets/css/main.css' );
		wp_enqueue_script( 'main-js', $this->plugin_url . 'assets/js/main.js' );
	}
}