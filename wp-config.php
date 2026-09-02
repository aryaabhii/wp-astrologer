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
define( 'DB_NAME', 'astrologer' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Abhijeet123' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'ZylL0+C)N7F0nV_kU,w`z}?0:>>}}l96/J[O3mZ/~IwTlXUz5Fq~scGL25{L(H2z' );
define( 'SECURE_AUTH_KEY',   '&0@QWXfxLZ*qQ/E&fx>mLjkBwE~-=OI}UjB.5RprT]VU1*I-8<pW<r5G!$_u[s0E' );
define( 'LOGGED_IN_KEY',     'w#r2@u#w=si2rp+0upRfnt;f:Fje.Vh$LQ:i0Z[`E-W+l-thNT|D#E1-1K_&v*e8' );
define( 'NONCE_KEY',         '[YQF8Uz0eiXu[((S[SSA|Tzql~-ii[s4@-C{5ErC/!*X4#WsQ;~vB}u{krZ-{-DQ' );
define( 'AUTH_SALT',         'P[Tf~lLUP7*;<>vkI V8zdBI%7+fQb[v*<9,@u}l%IxoVqjn%+[rm8iQ=|A/r%&H' );
define( 'SECURE_AUTH_SALT',  ':$:s;!Zfv*D*PB3!@`QlvPOS~fPms|-1$w4BXEA6 1AmSvB?YFK1PAmER+Q^S`cZ' );
define( 'LOGGED_IN_SALT',    '%!ZC#7w+BZfbQp}L$zFk0@Sl|*Os3 6[k)fb:t]W.@eo$@3|=6eMWQ1 xJWe*1q*' );
define( 'NONCE_SALT',        '*&nU7e:+Hv&z#5mCxks>?x}$>W7AU/Ay2Z;@@+45u58#DVp%^/U%:(2p)7)$LH-f' );
define( 'WP_CACHE_KEY_SALT', 'M@(Z#K_UdoxL&0W<Cv<`D:h*ro5C:UJ[yB>*Y/#|*_$2}jSkW)A_Xe}C@1Y-iXvh' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
