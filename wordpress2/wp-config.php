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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'dQJnR zMS<=/9m?OAf]v^&_*5z4J=|K_-yMi`W+!Hu/#DE&(5mUpE%kl]|aI`Fd)' );
define( 'SECURE_AUTH_KEY',  '4B[4jZ2,1H%aKZI#?/dLAlB7LVwwa#c|s/[`ol7aa[lM};)7}2G$u<4fz_:l_R#Z' );
define( 'LOGGED_IN_KEY',    'lMpH5)}77vm,Vn:8Q*i,uHmP)(@oy3L%GhQul3t[O<pYC@(M_>Cm}pYiXx@>Q)0M' );
define( 'NONCE_KEY',        '&BQ%Sk/N4Ae4}g*#AW4w4s9_50kDs9E?9bTOvz./$yDrA&tj?IB f${>P]wlMg_X' );
define( 'AUTH_SALT',        'C?_7ub-G5su4*hp>z,`I3W~S2g&+6y2r92a);uMB@>Y_*IO+G<|^tRh+078LVt/r' );
define( 'SECURE_AUTH_SALT', 'aYHDH@;~[3dA8$?w4 L:eH{c[z]=8`dl:^Rcvpw>osa8CrGC&)A__B31{;SGulk4' );
define( 'LOGGED_IN_SALT',   'JK]}g8jqIQS^A{_VZf|gny5XVOAW;oFX;[3Y3D#0/W8M!]wtTuP@P,{VUQR)ZYZw' );
define( 'NONCE_SALT',       'BwXfjObsE@L;M8f+I@kqE;7ttiCK_VNR@yYcfX7;d.>K.]Qg7CLe;kNX~kNoMSE>' );

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
