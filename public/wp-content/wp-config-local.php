<?php

/***********************************************************************
 * Include any custom local environment configurations here
 */

// define("HC_LOCAL_ENV", true);

/***********************************************************************
 * Local System Requirements Below
 *
 *    Generally do not need to modify. If you modify any of this, please
 *      consider updating local.example.php
 */

// Supports the NGINX Proxy for `dock`
$_SERVER['HTTPS'] = 'on';
$_SERVER['SERVER_NAME'] = getenv('VIRTUAL_HOST');

//  make sure local always points to URL provided in VIRTUAL_HOST, regardless of database setting
define('WP_SITEURL', 'https://' . getenv('VIRTUAL_HOST'));
define('WP_HOME', 'https://' . getenv('VIRTUAL_HOST'));
