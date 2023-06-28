<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ourbuy' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',PR9`EH[NO,6/d-UMbJj@!d@7}t/rSSmJNcg*5_OYiO=%)kx&Qd/<}qoJ.{9yZ }' );
define( 'SECURE_AUTH_KEY',  'GC.^cy$ib=/4D|3:p:q`mR0n#;jw_}e44D!w}N;]Rm!sWqFKgJ`Q4)(alk;Q5K)#' );
define( 'LOGGED_IN_KEY',    'nPU.%duxA/-Q?^BJ-{GD|WtopVg{ Y)uI+3iwcP0-9iX3[>fntEH,KZ8oO,g,r&Z' );
define( 'NONCE_KEY',        'Gz,8g,i5W+(&OBB<Vs4Zh.Kn!W)Q/ct65/RxnOTeLXsgRsKJL~:{5p?jiEH/}P6+' );
define( 'AUTH_SALT',        'n)oywVRam=6J+k)4=pZT=.NsVz-RI;[rYHG~LlCHRh&N^3&:bv/1Bl&0(iW<~pC/' );
define( 'SECURE_AUTH_SALT', 'GC<:!%P&FP_ZK}f)|x#p!i{ ^k_lf=|[v()Lx^a).$a*1>0W/X:[$D;miWv+{Zj)' );
define( 'LOGGED_IN_SALT',   'DOM1EwWi{=`b~M<W!|F2).9_i&rxB%At2^MnO_LeWQX6y%V;;rY4)<:hj,dDqQnY' );
define( 'NONCE_SALT',       'I;L[e!{=+6fBJ#|q_.08g(H5]W7]4|T!UB;e+2,|mJT><6,#?2LA7/q+NQl#4Am.' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
