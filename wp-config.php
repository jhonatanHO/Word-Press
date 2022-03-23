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
define( 'DB_NAME', 'bestonepage' );

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
define( 'AUTH_KEY',         'wCP[ i[=o.=NL(zn85Y6|9M9LV;F%=QM@_U@M!un5qs3=Wo3&^?uYa`uJ!u)Eap#' );
define( 'SECURE_AUTH_KEY',  '4EQ3I*]E2d_!j,J1]]e]aV,%e~=B8ExjA;5;P3|)hFzz.5ow.SsF<tJJp-|]Pb64' );
define( 'LOGGED_IN_KEY',    '2B-S$6aZ3rf<#)<g15m!b!@#@U&9XSk|Bq/^>x:v#0^s;Ky|k>n8Lpw9g%%YqN%<' );
define( 'NONCE_KEY',        'tp^mQzMCj}`FhvhMZ(08`.Uwq(]Sc6U858:($ih|T3WYy%][5!SBFcTL%qD@ek_W' );
define( 'AUTH_SALT',        'd :Z},Nnyr+aiA` p8{J(QYc8x,cMqzFTQ4E]$W[`@?{_c(^E.Hq7]F:hfk/aZo~' );
define( 'SECURE_AUTH_SALT', '#ki&HGu~H1Y[9)(tniCnp1+,gOb}vD0T(5}[nSvg1[`p$RQ8&zE(E@$|Z5wx3W;r' );
define( 'LOGGED_IN_SALT',   'n;Iva^^^*Ja&m[vBaV-I:_jDhpK6APE5XO3X99ARIH9K[EK;o!2nIe!*Z1?S2Wpy' );
define( 'NONCE_SALT',       'cLmyJOC@JXoXBa-)HxW-V#Gj-&?A@BXa[Oj1Lx+%gW+xxio]V+@xsMf7 )SZ@]&Q' );

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
