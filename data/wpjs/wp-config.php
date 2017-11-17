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
define('DB_NAME', 'wp_js_course');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
 define('AUTH_KEY',         ']40::wVMUF+b.9 |-==jk,:B=jL*IGTy(Hl2W_qeusc!XB4>bIv<r,Et&n|i`nR9');
 define('SECURE_AUTH_KEY',  'TFVwORGDb#5P45m*4@oOpSe;8t1KVfwmdEK%:_2:ocH=F|;~l##|{|?/CxX|5L}|');
 define('LOGGED_IN_KEY',    ';%n0e2~s~CWD-)M3XG%,~%03c+@+jX|L$-V8r5->qqikLwO;[R@) eya;3kp~8w@');
 define('NONCE_KEY',        'd<b)s!d-r]xrLa^W()]Ad^Ro^H-w)DBX%l-|HTnd+5[ICXb|-VYsWX+F=q7f#QSQ');
 define('AUTH_SALT',        'zR9$-OqEUaKDq>wI`.|Yjwy[-gYtEdqw(=&kDZPA+drS=P7Tu5%2_|>A[tjHqGdf');
 define('SECURE_AUTH_SALT', '16IX(!~Hmh FDS4/?7)Y2X-F59.E||<=m))(<A1-`=6Ju~]q;sDF8Vrynsc|7hsj');
 define('LOGGED_IN_SALT',   'M1Cz %2Wca~lQf/V-uw;a[uk|GPI3MUc%VQ>c-wZerim<=S+dQs!>^puexrQ_#$W');
 define('NONCE_SALT',       'U~iOx;3sa_}-@bWfv6V`3;t4f6`wh(:rK.JLW?.!m]:-}p6R-Ke,:f!gRN_U ^_$');

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

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://wpdev.com/wpjs' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
