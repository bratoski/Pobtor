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
define( 'DB_NAME', 'dbpobtor' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Br@toski727' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'nxE;1[};cxhscU#2]lw{bLrnRu x~RVy$s3IsS67^%5{8}3LnjJZF,A`J<BPs(aE' );
define( 'SECURE_AUTH_KEY',  ',D&aXSZ?UP:N1jBKMAwM$BiIq(F!H2A#15qd4;fOP+KVID+(g!Ix8Vp(>zIfE{xY' );
define( 'LOGGED_IN_KEY',    'd&!j 3KUo4MA:+Ix8lgV]){ei,>!-laR,=nVaTY$1tLhq(R7,E5K#D-]G<gN@m3r' );
define( 'NONCE_KEY',        'c+OQFjL%LLB]X/J##pf:.E<{2#zA0qnDuT0)MR^32f|.3|qX4B})[OJ8kYQE.Mrr' );
define( 'AUTH_SALT',        'zG4iiSDZ^ NJTO/}dj%0>cXMy>i%$bXt7 B!nGk<HDDE5mx`#`v/,,??N7-LBE<c' );
define( 'SECURE_AUTH_SALT', '&1@~5bB#R,pC%&8I_gf,wr0rZIkyX.sp./X3K96HAQpEs|Ud|gWioP[h4C?;|XcX' );
define( 'LOGGED_IN_SALT',   'eTO]Lej_7TCpX;iS$$$uRFG<O73,a~oMmlRRyj1Nb1rces7j_vzLsykB(:cDlQr?' );
define( 'NONCE_SALT',       'qZy_o>oR4gD*=ZEauKk2*a3wa$q`xw=:vYs>PG(ZaWsD(%s%A:E8!v2HT!FIVp/y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
