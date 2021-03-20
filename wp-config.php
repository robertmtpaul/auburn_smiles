<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'shefaden_db' );

/** MySQL database username */
define( 'DB_USER', 'auburnsm_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Shefa123!@#' );

/** MySQL hostname */
define( 'DB_HOST', 's03bd' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd^zgenPztoRWS#nkfYm`+D4<4Da NS(0%24#SO^z|t$nF7AmmjS]<l<YOg]}s.Hd' );
define( 'SECURE_AUTH_KEY',  'fpdb$e)Af{-ZaXEN}s~mf{nCJH}ohru^EJa[LSp^;)}erY8FH-^eal.N7^__amSp' );
define( 'LOGGED_IN_KEY',    'V2A7M34$AtiT8w`uQ|B2Xv%n^)w3g#<$6-5rMKw^jetmHg,L#H&ybZn_VXY<_)<y' );
define( 'NONCE_KEY',        'V8f7mG57GEX2n,L,y3-i1u>$me)f}E[]W,~Afr<T>fK=^r,Q^bj}i_3[*yj!U;=z' );
define( 'AUTH_SALT',        'y!}o( cKA7(mN.#a[j]uB2r;JL9D tsIY|75fW:2s(Q=>B_&pg?;_VqQl5(r;i`P' );
define( 'SECURE_AUTH_SALT', 'dM^Zd+TJR8^zGSNdeaTgOiIL;k^0E-VUL$0<^BPg6L2.#_*b!n8~b}jsCOByRsby' );
define( 'LOGGED_IN_SALT',   'GWF~~>Solu0L9sn1(^h%cLKTp [YHNN$sAsb%PGE$M@cV1{lh57igO.i-W=EbVSm' );
define( 'NONCE_SALT',       '*Hqq7>Orsq15$Qq4E]3yr0LB-I]DG4)5E:HT_V`bpK?pxv$L[[l%kyy^N}jj^&/D' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_1';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
