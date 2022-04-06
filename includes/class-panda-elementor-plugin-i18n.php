<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://pandaaddons.com/
 * @since      1.0.0
 *
 * @package    Panda_Elementor_Plugin
 * @subpackage Panda_Elementor_Plugin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Panda_Elementor_Plugin
 * @subpackage Panda_Elementor_Plugin/includes
 * @author     Team Panda <support@pandaaddons.com>
 */
class Panda_Elementor_Plugin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'panda-elementor-plugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
