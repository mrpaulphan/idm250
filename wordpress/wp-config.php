<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'local_idm250');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'X+o/#5pW^Uy1c 2y_:V!=(N@=9SPV;4r9NI Y_(lTe:F|EpXpH,%J;NQgh/]^r.-');
define('SECURE_AUTH_KEY', 'Y({^I(qEdZxx|020Em$Z$n$NmS_F&c4(4Yfx9+R9vN2g&WnjNjV4?FR>DORT!+Ik');
define('LOGGED_IN_KEY', 'Sc>6!}|`A$O>&32d9o)uy>0@U%bp8WSt,bDr,AvVa>,kW}L5@@|$on_2PPl+ TAx');
define('NONCE_KEY', 'uw }va$;d%fh9=TNJf!}e)Sz&Up]/bc6JbUggo%9ZX)PDm<#Kb7{[Nd)<c/F738z');
define('AUTH_SALT', 'Huj3p4BEc/wS`)Dp_m2r!dz}n87G]g7$6}&V]/z~U{H^j0rKTB?S(oM<`ej^Ze&W');
define('SECURE_AUTH_SALT', 'E$=OT?$b5H}ro#= RTIx9B!qFx{FiA]],tO~! 1Kb|zVaI;gr)/aJYlwoJs@6-W9');
define('LOGGED_IN_SALT', ' /F?7|^~Q{TKOJuEXg3V$xEK{:^2{hu2$UF/>&&hU1e,)S7**_4FNmZ(gYQnN$ML');
define('NONCE_SALT', '&Ok$Mm|+*PvK*a-[f49[ZCzpU4uI>6KU>z$pqh1K115,E99:u~`sdK!msv9nZf<G');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
