<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '5X1]EI _{yH$%<i9o f4a|*w5S_`2{M#!|Buql]Z1WGq:ofRTI~:3#wN=3O-%!s*' );
define( 'SECURE_AUTH_KEY',  'F8){Va-CjqiZ<Q>ED*sP-ET2Lc#sbcG8[|PmU!eUJMV{q}U_A=}]tJ1P[I9X[(2y' );
define( 'LOGGED_IN_KEY',    'vvDL&{[_:dEGKSEo>D?JooiuA)a^O&D8s#y145:K]ud=h.ns{~iJ F g+~n^+Yw0' );
define( 'NONCE_KEY',        'Cd/o)NT~zOTmm``b89PuMLw+2)lz3#cWO-GjI.z(nE^w!dkyJIcxfh<lqtn)qn>v' );
define( 'AUTH_SALT',        'oW&}9G^W?DV~:F7o2*h[d8H!mBF**dx~,fAFk4#iys^:5|~]dk?XCC[U9!:-)(t6' );
define( 'SECURE_AUTH_SALT', '@WZ6(me;Ws5y$50$P$4Y.mP|]H}%yh^MyRLe)0}q%XK*0L*}V=$Wf 56d][0eWc!' );
define( 'LOGGED_IN_SALT',   ')m,Sh0tGE>k^q>G!lhP##@8mI>gPV/$J>9hxxatI(vnuCY6K:u,wZg=g>5A8N6y-' );
define( 'NONCE_SALT',       'w0VH)>S-sFj?0yFLft4EHk}<3}_y}6Sh>saVS.|goH/um8tNabkTC%~h^CdZW0cg' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
