<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
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
 define('AUTH_KEY',         'FHH|,krK[*3;-pk9$?H>&aSb~izKpdW{/xDKQ |7?$H **E||Bjv|42Hw9{52*i)');
 define('SECURE_AUTH_KEY',  'kd T|-r.R|u,LrlB-J5sTLSk[+3wEhh?|{BX1_8Gybz&ibvBcv>{UO+s/l$rU+_P');
 define('LOGGED_IN_KEY',    'HM-tlF0|>o|mJ`cJ@fb*=M-zz=ZLgCOJnXk.N0>R> zFla[QNkkC:|/aH7xu|Y!V');
 define('NONCE_KEY',        'm6>hCSb2SS%X&jtEfC$WLY_E]g&QPfLr>;/+t>FD|znb4=F-5.B/H[(S<iqG^ofW');
 define('AUTH_SALT',        'id<ybB9;QrEMf{FXzzTWl{0U2;b~0:KTmmn7DB[p;GY7;DOpkUuis{y7O9%XE)V@');
 define('SECURE_AUTH_SALT', 'B#q{B;=|G|1fqPg9I8in,-=^@m`B}ijg%~{[|Yl[d[-6f_0KOeOFrwS~7_78$-Fg');
 define('LOGGED_IN_SALT',   '*ISUTC`H-<T:_9A,Zh7ye6LS/]Fw$Q1dD .?r7w<RWnRVbP5!u`l- KsR[01}}x8');
 define('NONCE_SALT',       'O!6^VS!Gq($s:3zlK~;0]&~hcDq~Ywp<[3Yt_+>|9QZVCOTM*CN+~z=C!dj^06LZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://localhost/wp_project/wp-content' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
