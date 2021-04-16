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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bookinglivingpixels' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1`^IFH L*nw19QL+*1mMg8{v8UeD%Mr3dkxEC_tiV1+U@()SjV@(~pdmz2XhL1{?' );
define( 'SECURE_AUTH_KEY',  '3pW*qcy^z3pCME&.{1l9u;yA`Xwu<Z~]($v%sXc4:UPhW(wK{X)&` -AB4~D68W1' );
define( 'LOGGED_IN_KEY',    '?#cG4x]/ ekl;in(jX}6`>st{Y$c()NH;]U0lA1HaW hGH[5XJfj>Iv:+XHQOa)?' );
define( 'NONCE_KEY',        'h+N+_7iH/9kE*1ZJzAl@o2<d8ouA5` B<suPfM3ha(,deCUHyNPbZB;3T8P`]^|s' );
define( 'AUTH_SALT',        '5jrU ~ul1NJ6|,Oa_&`UmbS&@PhYJ=D6sPwS?TDwpexKSYx{v^#TWK4r],1Yvd*s' );
define( 'SECURE_AUTH_SALT', '#E0,(}Zl,oD.z:t0TuOE yl>! ~qv@h%V/uLB.x9ApYBF`L{NP0a8Q/Y/WIphWP-' );
define( 'LOGGED_IN_SALT',   '>~-ZE+0tD>W7=HSQ)0D3x3zLC3.:`=lSrUOv3!ULFj :I$pa+Pzpt<;,j0Q]U{(E' );
define( 'NONCE_SALT',       'FA793q{u_!^qb;tKn[w8B%#(#x>[n?MjjI7@EP2:F,r+Y`1q_w2,GzSrT+&x3uO<' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
