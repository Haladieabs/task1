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
define( 'AUTH_KEY',         'Vv{?6-qED dd|7TaB!,ot+e*-BV`uHG*J){)qz8{*DD=K-KNR#jt;7NegHfM48S:' );
define( 'SECURE_AUTH_KEY',  '}g1_:WmvJ3W/1(gvzz:8bwg-de7dazYpbF+c83.)i)*Y@5qK,.3+I!8%{SBCi@B^' );
define( 'LOGGED_IN_KEY',    '_^^Gi9M&iKJ %#A/wJ4uSxH)@#<&NNj7pby+ZtRn)ydq2<P$Ux}p]W,9[Q0L5H|Z' );
define( 'NONCE_KEY',        'P$7oW-CChHd4ew8T^l?TS%2+ds$MeW$(U3`L#(37N<&TL;SW+F4D$fUx|wT_;H?f' );
define( 'AUTH_SALT',        '<$.z?zP)`TBG+=+]=r#:PNU`cNl((:2|SYmk1n:hM4s_a|d~45TVnr.;8lO8`,dA' );
define( 'SECURE_AUTH_SALT', 'pQVg};)~d[(7)>L-*_}bB^4>:}FqxIG0fF IIjL#11d`pwA+h{%-xt[^Ek0 7Q;2' );
define( 'LOGGED_IN_SALT',   'l~2SH;|lh)&sXp:a38S1Sy^_34>$=w0.DE*NOCK9w0+p(bWzZ>-seWku-]p=aEnh' );
define( 'NONCE_SALT',       's)IO7Dj)]>CDW8_7fh2ou3iP,AtW->cHS`CuK4:=3E7hN+s>[,}S6XFlyAQ>HzYE' );

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
