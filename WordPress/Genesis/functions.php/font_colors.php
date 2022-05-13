<?php
/**
 * custom_define_colors
 * ---------------------------------
 * Integrate brand colorscheme with Genesis and Gutenberg
 */
add_action( 'after_setup_theme', 'custom_define_colors' );
function custom_define_colors() {
  // Disable Custom Colors
  add_theme_support( 'disable-custom-colors' );
  // Editor Color Palette
  add_theme_support( 'editor-color-palette', array(
    /* Brand Colors -------------------------- */
    array(
      'name'  => __( 'CAI Dark Blue', 'genesis' ),
      'slug'  => 'cai-dark-blue',
      'color' => '#033e79',
    ),
    array(
      'name'  => __( 'CAI Bright Blue', 'genesis' ),
      'slug'  => 'cai-bright-blue',
      'color' => '#2a6cf8',
    ),
    array(
      'name'  => __( 'CAI Light Blue', 'genesis' ),
      'slug'  => 'cai-light-blue',
      'color' => '#acdff1',
    ),
    array(
      'name'  => __( 'CAI Yellow', 'genesis' ),
      'slug'  => 'cai-gold',
      'color' => '#ffc400',
    ),
    array(
      'name'  => __( 'CAI Gold', 'genesis' ),
      'slug'  => 'cai-hover-gold',
      'color' => '#ffa700',
    ),
    array(
      'name'  => __( 'CAI Light Gray', 'genesis' ),
      'slug'  => 'cai-light-gray',
      'color' => '#f5f5f5',
    ),
    array(
      'name'  => __( 'CAI Black', 'genesis' ),
      'slug'  => 'cai-black',
      'color' => '#000000',
    ),
    array(
      'name'  => __( 'CAI White', 'genesis' ),
      'slug'  => 'cai-white',
      'color' => '#ffffff',
    ),
  ) );
}

/* NOTE: For additional details, see the Knowledge Base entry...
 * https://kb.shiftcollaborative.com/index.php/Genesis_Setup#Gutenberg_Integration
 * ------------------------------------
 *
 * **IMPORTANT**
 * In your theme's `styles.css` file, you will need to add the following for each color class using the same slug defined in the above `functions.php` snippet:
 *
 * :root {
 *   --cai-black: #000 !important;
 *   --cai-white: #fff !important;
 * }
 * .has-cai-black-background-color {
 *   background-color: var(--cai-black) !important;
 * }
 * .has-cai-black-color {
 *   color: var(--cai-black) !important;
 * }
 * .has-cai-white-background-color {
 *   background-color: var(--cai-white) !important;
 * }
 * .has-cai-white-color {
 *   color: var(--cai-white) !important;
 * }
 *
 */
