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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_demo' );

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
define( 'AUTH_KEY',         'hHVd3C^vz`!RzAi/63IRO 7u%62-d!.gqsA1^(*42.34Z<>?_[Y@d.Sbf.E&< e6' );
define( 'SECURE_AUTH_KEY',  'hEB)_o:0)e4?ywM<71kn}Slh)+xmZo&KVc))kf (QC..MbRV63xqu)<2Qw&!%e]9' );
define( 'LOGGED_IN_KEY',    'W6?gvW-KlDNuc9%LK}ITKLTcu!eTHfyCya{-LZamcavgwjZ3%^o#1]xn5jRS9d5L' );
define( 'NONCE_KEY',        'ryf9kuD-WTZRjJ;uik)~^KIrc0QCG?F~PlD2a_V/WaVUcgPwdu>cu/p=5VxGmUix' );
define( 'AUTH_SALT',        '%|dOi2`q]kl3FKy=4T$CsX9rhOi<!|Ewoq%v@T.`1@ji{DF?1b.JD:f>tA-oyV~d' );
define( 'SECURE_AUTH_SALT', '1~UwOK#qWZk].j w,oY il6h|$gPtqs6h~B<m~X S#lt1jNc6d0s,-GOVz~3;fsT' );
define( 'LOGGED_IN_SALT',   '*X0,@#s7Yk?/7W`*owK%P*n2@(zH]:G0@i+R33)p&W VEqOfnt&XOPe8@9| Gech' );
define( 'NONCE_SALT',       'LB,r(P`/LbORDYG`!;#xG:g6&WX},`<xfgLq3A~&}9!td8/iuI.IJ(~dZkk:mel2' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
