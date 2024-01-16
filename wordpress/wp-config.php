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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '6Y:U,RID8>f`F#{+*|zAk.` Q[$E5OmGi!+@Hw6pc-o}4cZkW(9{wSnkXeQ$d~o^' );
define( 'SECURE_AUTH_KEY',  'U{j>tS$Dz<Bd1h,Dd=SDIOz/eTd[fa)xq3;EzXb2fyFpO.1aT=%E.f$A7](lnVt5' );
define( 'LOGGED_IN_KEY',    '5?mL&Td*~k2WjP,,N(e$>a.{Tjhz(>`uq#s*E@rc)](5:,@|0@*~243W*v=_;xWo' );
define( 'NONCE_KEY',        'S_;/-[4UjTu}Wuf6 ]aKQFG&keJh9msrzIF)W}o~4r:*EDL<?%sp!PL9,B<0%^9=' );
define( 'AUTH_SALT',        '_Z7IHW>j4Z#dF a;3y=D_3Gt(#=()7)+P0cZbLe+t`)<}EitJh?]I>E[o*K[r2v<' );
define( 'SECURE_AUTH_SALT', 'N/9JeYP;~ki5a;qI[GsnzP]<j?hu&5OT7UGG^#NV2j,LB.I^?SRl&J%/v9*BO5n+' );
define( 'LOGGED_IN_SALT',   'VHf:x(@>8-mUS3LphA5u;K@,hY u^9I+~A:|3f@p^Sscqh<Hm+a.SiS7AFMTbibh' );
define( 'NONCE_SALT',       ':NHg<R6!q~J4U IluQ*>94QU=9>|B?r_ukK.;/;Cb-@ ZNLN0%<9T0Q9E/x9G%E{' );

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
