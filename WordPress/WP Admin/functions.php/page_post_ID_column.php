<?php
 /* Add custom column 'ID' to WP Admin */
 // Post
 add_filter('manage_posts_columns', 'posts_columns_id', 5);
 add_action('manage_posts_custom_column', 'posts_custom_id_columns', 5, 2);
 // Pages
 add_filter('manage_pages_columns', 'posts_columns_id', 5);
 add_action('manage_pages_custom_column', 'posts_custom_id_columns', 5, 2);

 /**
  * posts_columns_id
  *
  * @param mixed $defaults
  */
 function posts_columns_id ( $defaults ) {
   $defaults['wps_post_id'] = __('ID');
   return $defaults;
 }

 /**
  * posts_custom_id_columns
  *
  * @param mixed $column_name
  * @param mixed $id
  */
 function posts_custom_id_columns( $column_name, $id ) {
   if ( $column_name === 'wps_post_id' ) {
     echo $id;
   }
 }

