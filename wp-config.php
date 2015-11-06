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
define('DB_NAME', 'macca');

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
define('AUTH_KEY',         '=R>un2c:[Y{|ht~a~g!hvF/p-iU0t0b?)7+fZm,eo&,v:>7`+|Pjkl8[%gdF0?Og');
define('SECURE_AUTH_KEY',  'xyA9-2=pS1R3rRc>3|jgG[_7>1j#vpNlc&bUi01thNpST >?k+|i[7H1`S{`yY 3');
define('LOGGED_IN_KEY',    '{+9!el1GbC> Tb}3SF7&WNOU7i`a|-FJ3!6,E#aZ@W3?:i;) =-/0QRWtB$8Z0>.');
define('NONCE_KEY',        '[e}y(t-5_28v{!3(!8uDW<U3Vp=2@V}fQ8~*b-=d141fNNhbsM~0]~uN8i@Om=yN');
define('AUTH_SALT',        'q*St?NF;7jNCA}F1t+Q#@id[)m#h}{vcK%`3o^7,P3j^@|JpfyAJVzI6MaMuzC4]');
define('SECURE_AUTH_SALT', '2G(W-XZ}9BD/nqv}00PWyETQiuH$R$Hl%GMdzQW=k!?[.m<Y2nR.cF>U~hiURtb4');
define('LOGGED_IN_SALT',   '!$^q=h:c,4?XQ;qk^EKqS`f>Ir >*<``IrQU-G{9{V/7IL*f,j4qRj<n%@|,|9Zy');
define('NONCE_SALT',       'rj (vKD6,kW/~.+kt/M1c[|97f<fF7l|SkTa^HOJUJXz|4W(v|o^ZR2h|U(&-/j*');

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
