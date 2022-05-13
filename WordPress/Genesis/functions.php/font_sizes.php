<?php
add_action( 'after_setup_theme', 'custom_define_font_sizes' );
/**
 * custom_define_font_sizes
 * --------------------------
 * Setup Gutenberg's default font sizes
 */
function custom_define_font_sizes() {
  add_theme_support(
    'editor-font-sizes',
    [
      [
        'name' => __( 'Extra Small', 'genesis' ),
        'size' => 8,
        'slug' => 'custom-extra-small',
      ],
      [
        'name' => __( 'Small', 'genesis' ),
        'size' => 10,
        'slug' => 'custom-small',
      ],
      [
        'name' => __( 'Normal', 'genesis' ),
        'size' => 14,
        'slug' => 'custom-normal',
      ],
      [
        'name' => __( 'Medium', 'genesis' ),
        'size' => 18,
        'slug' => 'custom-medium',
      ],
      [
        'name' => __( 'Medium-Large', 'genesis' ),
        'size' => 24,
        'slug' => 'custom-medium-large',
      ],
      [
        'name' => __( 'Large', 'genesis' ),
        'size' => 32,
        'slug' => 'custom-large',
      ],
      [
        'name' => __( 'Extra-Large', 'genesis' ),
        'size' => 48,
        'slug' => 'custom-extra-large',
      ],
      [
        'name' => __( 'Extra-Extra-Large', 'genesis' ),
        'size' => 72,
        'slug' => 'custom-extra-extra-large',
      ],
      [
        'name' => __( 'Huge', 'genesis' ),
        'size' => 90,
        'slug' => 'custom-huge',
      ],
    ]
  );
}

/* NOTE:
 * You will need to add the appropriate CSS definitions
 * to define each custom font size's responsive behavior.
 * --------------------------------------
 *
 * **IMPORTANT**
 * Add the following to your theme's `style.css` file
 * based on each of the defined slugs above (in your `functions.php` file).
 *
 * ...
 * .has-custom-extra-large-font-size {
 *   font-size: 2em !important;
 * }
 * .has-custom-extra-extra-large-font-size {
 *   font-size: 2.5em !important;
 * }
 * .has-custom-huge-font-size {
 *   font-size: 3em !important;
 * }
 * @media and screen (min-width: 960px) {
 *   ...
 *	 .has-custom-extra-large-font-size {
 *		 font-size: 3em !important;
 *	 }
 *	 .has-custom-extra-extra-large-font-size {
 *		 font-size: 3.5em !important;
 *	 }
 *	 .has-custom-huge-font-size {
 *		 font-size: 4em !important;
 *	 }
 * }
 *
 */
