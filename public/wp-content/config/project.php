<?php

/***********************************************************************
 * Project-wide specific Configurations for wp-config.php
 *
 *    If you need something for local-only, please use /project/config/local.php
 *
 *    @TODO Merge this file into wp-config.php during build process for non-docker setups
 */
// Enqueue local.php if available.
if (file_exists(__DIR__ . '../wp-config-local.php')) {
    require_once __DIR__ . '../wp-config-local.php';
}

if (!defined('DISALLOW_FILE_EDIT')) {
    // We never want File Editing accessible via the WP Admin.
    define('DISALLOW_FILE_EDIT', true);
}
