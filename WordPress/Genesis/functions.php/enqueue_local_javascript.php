<?php
	add_action( 'wp_enqueue_scripts', 'genesis_sample_enqueue_scripts_styles' );
	/**
	 * add_theme_scripts
	 * ----------------------------
	 * Enqueue local JavaScript files into the theme loop.
	 * Loads jQuery beforehand.
	 */
	function add_theme_scripts() {
		wp_enqueue_script(
				genesis_get_theme_handle() . '-script',
				get_stylesheet_directory_uri() . '/assets/js/theme.js',
				array( 'jquery' ),
				genesis_get_theme_version()
		);
	}
	/* NOTE:
	 * This example can be pasted into your functions.php file.
	 * It expects you to have a file (/wp-contents/theme/genesis-sample/assets/js/theme.js)
	 * as your JavaScript file. Rename this or change the location
	 * if you want.
	 *
	 * The boilerplate theme.js file should look like this:
	 * 	(function($) {
	 * 		'use strict';
	 * 		$(window).ready(function() {
	 * 			// Code goes here
	 * 			console.log( "TEST" );
	 * 		});
	 * 	})(jQuery);
	 *
	 * If you Inspect and see the word "TEST" in the console,
	 * then you know it's working. You can delete the `console.log( "TEST" )` line,
	 * or at least comment it out with two forward slashes--- "//".
	 */
