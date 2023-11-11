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
define( 'DB_NAME', 'loop-studios' );

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
define( 'AUTH_KEY',         'x9>uoBrZV?< wOao}EMICv%C~Iud>1I&tOdD DH-JV4$=x6hi5@NFBU<%0dU-TZM' );
define( 'SECURE_AUTH_KEY',  'UkFEKsq?p}fMz+rBQV=H!3+64}?zK!P]ghwr@B]QO$kM&WI@sK`jIp8OejeZf)x$' );
define( 'LOGGED_IN_KEY',    '+.iv;=>|hWiaVJm)`itpdksB+k|<k&W_!josQ#|f09&Y<ZV1HNWdoNTss#d9n16>' );
define( 'NONCE_KEY',        'G@^oi~bvXVjxXn@sb&1 [2C:N.Fi/80[!nna;faK+^IvZpOID/h~JfY67CG}^oR_' );
define( 'AUTH_SALT',        'TyB<7.>h(|=t1$ R|LtjMOlC+uZ<)g^?Zp{dm5I:Bs@MBQ`w*ML_~(fOe0MbP}5H' );
define( 'SECURE_AUTH_SALT', 'C}[~&UvV>>YY@ADGn>edO|_Qi wA(&e!w%Y77n63Hi6IjlvZ9A9Q(XY*37kRC^}M' );
define( 'LOGGED_IN_SALT',   'Lk!>YBg$][.NQ,^W?-IICp=`>_>GqrVbU+^(OR=5fJi]z16u8,SNitpF]/&#IBl7' );
define( 'NONCE_SALT',       'E4hI,qolxtDy>)-*s?9R&N1>:Y-|}-18L?[u`YKH$PBvFzrm`V]pIzKLOH=c)nrH' );

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
