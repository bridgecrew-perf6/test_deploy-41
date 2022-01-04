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
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'wordpress1' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '$J]?gcIE>9DuN|%ADw ^nYFV!PD#qv<(p`Emh5LuhSQG{C$q_Nni-4t5I&9dh{=|' );
define( 'SECURE_AUTH_KEY',  'a6x8oqc>|J@dN!Uf`L!7#O`s!h@Me>W)6Id5bWbO!,-ot.pgD)r2K*YUL2<TzhAF' );
define( 'LOGGED_IN_KEY',    '<lCJhE.bh|NF}R@w.LNgaS;#9$RXv)k!+t6m[e`X4*ts(vg1r,Nv)q*VX1A~y6=a' );
define( 'NONCE_KEY',        'aRFEAk-K*62^Rd>CD|@[j0]oPlS4%hi~*F E{Z@gHHTW P|~{~qER00E5cn)!ys#' );
define( 'AUTH_SALT',        '9DCO/?8-;FLR%:R.CM52+eXfur~bqV|K1*6OGA=ogv0A@[@d2JD*tXT(FeyYzI7x' );
define( 'SECURE_AUTH_SALT', 'I,k_ej)>:$rIyfrT~h7ks>rfZbv$oC<M=JUldJ2/37IE1orP+6BD[[7U#x .1%Ct' );
define( 'LOGGED_IN_SALT',   'fKw`ZLpevbHIpNN.y:_/<zbkS2%/:G#}w&P00qe#R1>);t6m-@ ,saCV=,cd&MxC' );
define( 'NONCE_SALT',       'dzeCep:MGy!Oc.J)&V<M#}{F >ha}5 $Sp[A6[r Co9`RSp4OYH2Kk5q2WwFwM=i' );

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
