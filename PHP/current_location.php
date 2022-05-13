<?php
 /**
  * current_location
  * Returns the current URL
  */
  function current_location() {
    if ( isset( $_SERVER[ 'HTTPS' ] ) && ( $_SERVER[ 'HTTPS' ] == 'on' || $_SERVER[ 'HTTPS' ] == 1 ) || isset( $_SERVER[ 'HTTP_X_FORWARDED_PROTO' ] ) && $_SERVER[ 'HTTP_X_FORWARDED_PROTO' ] == 'https' ) {
      $protocol = 'https://';
    } else {
      $protocol = 'http://';
    }
    $url = $protocol . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'REQUEST_URI' ];
    return $url;
  }

