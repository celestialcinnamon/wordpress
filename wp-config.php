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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'xZ%77qmOv!d rQ^EV}~%6>YPh=8|Ac*J>J+K|c73CXAQrzsU)^z Kflu0[pW7Hyu');
define('SECURE_AUTH_KEY',  'G< jak#_aC#t*)WMBUeuN;{]!O~aj66^Z&dwpaGc~zw#D3d44c:nc1{C}_6yvOZ`');
define('LOGGED_IN_KEY',    '>$1qIG>bT{XnbLB%3tekvU}M%T;%hs)=%DjJ_fR16o(5s_;ODx/%rBLTF>cz7k ?');
define('NONCE_KEY',        'g[8j!a*l:lP:$#-Wy!Y6BNw>g7kxrc~zzPa1o:v,?AS/4Pv?*91`;@@5TK8qNI*F');
define('AUTH_SALT',        'L.l<R4cr8bK-KCP Xm$0}_V7#:+=BKz,s`Qql&1,,O?x:VLl/bKy-9hwxT=8G`GK');
define('SECURE_AUTH_SALT', 'f8iFnFiwZ7K+15E~M:,OFrdMbgxHok6_d*BbFJ%`Nw?XI/Tx;Gwt3gMEhdkjj2Y;');
define('LOGGED_IN_SALT',   'D`c:?m|5nO)giXQ]% ]qeOwi+axo3TK~ce]6ZljKYG=@R]nj9Xj oN_;kLdo6mP-');
define('NONCE_SALT',       'pjQxptXf|RpdDS!+INA#2xww q]%3/Aj9aL]:q;Bn6ri*kuVyLr%Me5/-_$u[TZ&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
