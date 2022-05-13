<?php
  /**
   * console_log
   * Log data to the console from backend PHP
   * @param mixed $content
   */
  function console_log($content) {
    echo '<script>console.log(' . json_encode($content) . ');</script>';
  }
