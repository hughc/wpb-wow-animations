<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://wepushbuttons.com.au/
 * @since      1.0.0
 *
 * @package    Wpb_Wow_Animations
 * @subpackage Wpb_Wow_Animations/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wpb_Wow_Animations
 * @subpackage Wpb_Wow_Animations/includes
 * @author     Hugh Campbell <hugh@wepushbuttons.com.au>
 */
class Wpb_Wow_Animations_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wpb-wow-animations',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
