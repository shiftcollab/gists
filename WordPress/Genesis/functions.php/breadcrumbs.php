<?php // Don't include the opening PHP tag if you're already inside PHP tags!

/* Remove "You are here:" from breadcrumbs */
add_filter('genesis_breadcrumb_args', 'remove_breadcrumbs_yourarehere_text');
function remove_breadcrumbs_yourarehere_text( $args ) {
	$args['labels']['prefix'] = '';
	return $args;
}

/* Change breadcrumbs separator from "/" to "|" */
add_filter('genesis_breadcrumb_args', 'modify_separator_breadcrumbs');
function modify_separator_breadcrumbs($args) {
	$args['sep'] = '<span class="separator"> | </span>';
  return $args;
}

/* Add shortcode to display Genesis Breadcrumbs */
add_shortcode( 'breadcrumbs', 'breadcrumbs_shortcode' );
function breadcrumbs_shortcode() {
  ob_start();
	genesis_breadcrumb();
  return ob_get_clean();
}
add_filter( 'widget_text', 'do_shortcode' );
