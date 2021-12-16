<?php
// Check Server PHP Version
if (version_compare('7.4', phpversion(), '>')) {
    die('You must be using PHP 7.4 or greater.');
}

// Check WP Version
if (version_compare($GLOBALS['wp_version'], '5.4.2', '<')) {
    die('WP theme only works in WordPress 5.4.2 or later. Please upgrade your WP site');
}

if (!class_exists('ACF')) {
    add_action(
        'admin_notices',
        function () {
          echo '<div class="error"><p>ACF not activated. Make sure you activatate it</p></div>';
      }
    );
    return;
}
