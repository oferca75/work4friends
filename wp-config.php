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
define('DB_NAME', 'work4friends');

/** MySQL database username */
define('DB_USER', 'work4friends');

/** MySQL database password */
define('DB_PASSWORD', 'work4friends');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/*
 *
 *
 *
 */
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'nY1a2vj/:eg-#(|?,-:U(rc-2W|w|6s,^3?u|HN0!G,w>j%N6(J{(m2BAF@#8pB{');
define('SECURE_AUTH_KEY', 'ED;,-u5mvKI=I6;WJTc!e)%z,]+QlG2FVly#xxAEy|p!/6*-m~y{)9I~o(<0i4GL');
define('LOGGED_IN_KEY', 'I<vTqUL%-)(k!*yXB_f=K7*#cjlliZ/bC/A@<K)N+uaR={i_H#(;7Ba:l+`bZ8e5');
define('NONCE_KEY', 'lYmaLF]:l8VkUc4XvPGw  6|@|yjbgWyYti.^@E*1cECD~,LP`ldH7.-zXL8OA3A');
define('AUTH_SALT', 'KM XNf3UGxi$+e|nmd|T%>{WJ]L;V<4F(uO?~X`kF~DOLu>MEpDTI0Lpgz+[obBw');
define('SECURE_AUTH_SALT', 'yzULq},)(?0>}jIb]J|c9J HC2.<Dmxfnwi2x2|V(~a,.*Yvv8/f|?[KKc 1=?}H');
define('LOGGED_IN_SALT', 'E1#T?bbmMdXbQY}/vx(i7inZ>@Y(0-dl/.xN-8v3g+GfHL$euV>P_qctWqEp5 GN');
define('NONCE_SALT', 'j?BVOoQQ|cc1F+3i1p~IgbFM{zd6:Bw4Jon$Qj4@5qQ7G+EcPDsx!m[xw}PcUeh=');

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
define('WP_DEBUG', false);
//
///* Multisite */
//define( 'WP_ALLOW_MULTISITE', true );
//
//define('MULTISITE', true);
//define('SUBDOMAIN_INSTALL', false);
//define('DOMAIN_CURRENT_SITE', 'localhost');
//define('PATH_CURRENT_SITE', '/work4friends/');
//define('SITE_ID_CURRENT_SITE', 1);
//define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
 
