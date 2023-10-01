<?php 
/**
 * @package  DirectoristStatistics
 */
namespace Inc\Base;

use Inc\Base\BaseController;

/**
* 
*/
class PluginsLoaded extends BaseController
{
	public function register() {
		add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );
	}
	
	public function load_textdomain()
	{
		load_plugin_textdomain('directorist-statistics', false, $this->plugin_path . '/languages');
	}
}