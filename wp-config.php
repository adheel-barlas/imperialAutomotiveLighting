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
define('DB_NAME', 'imperial_automotive_lighting');

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
define('AUTH_KEY',         ';DvZ5MMPU_)(L)Fs`,^/0{v@qdc81Ksztc_rv2BsuQ1D,r,)>57{)2 DkT3)9lWy');
define('SECURE_AUTH_KEY',  '35o_Hj/%n);P{,~_%{xAqWmh/kVOCK,z3x(#,{a@,V6$NK.1.OIb/x/Y4^(T]F-F');
define('LOGGED_IN_KEY',    '4u}y4aFqAr+YzO{9nn{p+z+`8)tvg!c< ,RTvluD=N&!Df;VA/i+ 9soV%m%gjM&');
define('NONCE_KEY',        '^&BBLal}4mxId)mO0=(x%7ft]mo@YYq`r)ex7YSUEb+gYoXSS|RixcR.,8R-KLmv');
define('AUTH_SALT',        '8,hVdL?!d*:/oV3XU)(xpybVHe1&Zi{%sw.XY}WmC y-ti^lLcb0[/(/Z>QvQ$jg');
define('SECURE_AUTH_SALT', 'Vt5y/E/ e}B:7h7`9dS^@5~2pkT??DUVYvG#rJKkw5-cBS@}FZ:y|4 bW?Mk|m}P');
define('LOGGED_IN_SALT',   '78kuyYPm-,>MW<c6l<l%{ =IA[8x)+{mv)IWf=,j~W|q(|jH#^{y.}`r@T!#4N^|');
define('NONCE_SALT',       '1eBjaWUm|h^IZ#ZB/XMU++WAdx?=)pUyD+7G-CX7y1CFNgCn?AdCLG,/sBKS^c$A');

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
