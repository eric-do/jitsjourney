<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/erido/jitsjourney.com/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'jitsjourney_com');

/** MySQL database username */
define('DB_USER', 'jitsjourneycom');

/** MySQL database password */
define('DB_PASSWORD', '4CXusub^');

/** MySQL hostname */
define('DB_HOST', 'mysql.jitsjourney.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'ivpqyEfQv@|$aEoCAG0JNt&@4X#Wn4Fx`%7zH+aUpTTFldb%a5:d"~QFC+_r1L+a');
define('SECURE_AUTH_KEY',  'FbTV^^2E5rcI8rMkkqrpkh7JYzSQ&jr42:@Jj~|koJ1Z7MX2R87:Gyxdy;WBV4o5');
define('LOGGED_IN_KEY',    'C&xkV1c~g?tuT7396v%XR3RdXhq+4T~8vUaATH/yd5X2+ahNE?YK%!xrQ:_fG&?N');
define('NONCE_KEY',        ')%fCEsru5w!qvRa_t8f?@6HGQM3ijorf+h7StZH*nLbN6&hNCn9b+%y&^Ps?9f_X');
define('AUTH_SALT',        '?1N3YS0^B#`UFHvB`r10o!QFlmbnIPRD(z:12b")f+l$G@yyWK6ayRoX2Obm*tpM');
define('SECURE_AUTH_SALT', 'I@+C$mOUr:$MvXg*dJ6b3V*Uerl4emlKU1(gB3*QqB5x~M2u&4s7@nrN8^2IAWpX');
define('LOGGED_IN_SALT',   'h"((GbtsTw1EoY!4o~Er&z2Leu^``:+lO7Pi&&X?Z^!&mKiTNs)4dBIHh#xy_#?4');
define('NONCE_SALT',       '2RITBCnVf+p7i&M~V1i&3BA5fYG#&6rhy"_nlgW/YK_ctBLJ*~7tdH00!vYKDa%/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ienbtc_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

