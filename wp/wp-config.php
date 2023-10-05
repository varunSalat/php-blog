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
define( 'DB_NAME', 'scholarwithtech' );

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
define( 'AUTH_KEY',         'sD_<,$>T91U/8-4+F62;sIFgI ><0`N501>8Vw30UyBEjJSSD`1c,+54r6`#tKLu' );
define( 'SECURE_AUTH_KEY',  'H7|@ln+S==vff@IEp(g<4=@5KnmAUxT%8,iXT:CWAsht&-y .yz]|8yxRE!f{J[.' );
define( 'LOGGED_IN_KEY',    'yQ5)wIkxu>LA%Eyy(GE^V<TVlqpxzB;)>.:B);NUt}OC8.@*dSpla.P>YqV*~GhY' );
define( 'NONCE_KEY',        '%7$JbJCERDYeq6Q&Z+wYC=r0!St2n~9XhKiDGPSd/*Ekv<32>R@p[ynl!+$irFdt' );
define( 'AUTH_SALT',        '?=l&q,(7:1rpHq%QFywH(,oj$1|+I$nWDj[tclRYi%/qZr(RmvA^bXznq<~i)*b:' );
define( 'SECURE_AUTH_SALT', '3Sh.*5GPT)3vr(XGQRfyFp^/-|T N*:+/|p>&3{h{on|E;uV@]w=7m(7}CvR}@`j' );
define( 'LOGGED_IN_SALT',   ' So`-+T-T/z>:iFP90?cd=h_%9~X{OTJY8h{K(wm8|g=egx_zIBp7o%  n#lqnlh' );
define( 'NONCE_SALT',       '>pA<a[>#4O><?_QI_9xc7aQ#q:(<$,:B<KCnl%LY:Yv~#>Eim={@Ucc;|;`ITTod' );

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
