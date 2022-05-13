<?php
// Font preconnect for faster font loading
// Swap out the link if using Adobe or another font service
add_action( 'genesis_after_header', function() {
  echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
} );

