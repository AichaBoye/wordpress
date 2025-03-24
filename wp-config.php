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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'AoB?*g~4f(r9;e#I>R4AzVv:50=[3~ANX:&&%a<!dFY|CV^#Dnu}Ci|=i*vwb<t!' );
define( 'SECURE_AUTH_KEY',   '!OB @/=9tVQeeB:N!XQo.VQL)ipWT%>tJ.}f;ZGV/y&2vjy`?haUp`Co&19$KYaB' );
define( 'LOGGED_IN_KEY',     'z%6$Wus=CQ:M9oCIzzN~9[T`iM(/3k(1N,J5_4]r,fX!U1hN9^F^`.MAx9oCl|9(' );
define( 'NONCE_KEY',         '/V}xW]K~Kj16u5@ >4u,tWlPS)j[g8|B2i_m:BaFpE4I$x|p7Mp/4z3Mx+DHuBPO' );
define( 'AUTH_SALT',         '}Jr</d%;iWH3cWnCqps*bsgwpGofP_AX8*o&7m! KAp0]Q7d<q]YP 3y:/^|E{i?' );
define( 'SECURE_AUTH_SALT',  'l_f9r|Z4W1w-TB~iE.;Y&v--+;z[t=S/34oL7gkqU!idfCO[#Qf={Mh4z-P/>c]C' );
define( 'LOGGED_IN_SALT',    'EYa$y;E%_;0EB#Y[Oo~e4n:1iNJ!fN@fPLujVHoHi>Zk^(I]Q,19n#M0Mq_@e^^g' );
define( 'NONCE_SALT',        ',tkxAkk/Pr~$d+W0z~DSq`JM{{]h*Um7of<UzdS~HdM%E$6zr`:X6-W7#0uYIIWi' );
define( 'WP_CACHE_KEY_SALT', '9]]-J7}a9c@3bEsBd7Iw)`O<Q6|eH^b*8>{xE87#okm<<y,AbiB[t@](J ,NZ/yZ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
