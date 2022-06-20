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
define( 'DB_NAME', 'wordpress_p4' );

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
define( 'AUTH_KEY',         'cHJTia3uM^ra:;zN]K?a*+4tGacGz2~rG~Vuks!QN=3QVD6KE|+`P1u a$2gL?U5' );
define( 'SECURE_AUTH_KEY',  'z;J<%@:$(0+|8q$45-LLS(mhtzw][rc{pG4x>*p]5J5#$tlX&.8~Rd9tI.z@m9Ka' );
define( 'LOGGED_IN_KEY',    'oNZ6`p>f/ofZ]d8Ov3HtGtd*7w84xAz }w:u4.`jE|6F#`U`)I0E=W^LqNpg8Ywy' );
define( 'NONCE_KEY',        '=~Htp`X2*TrTaV>reKu2{l||zL,gs$N-vadA;qpp{Sw?&D($ibaqb.8UOx5h3li9' );
define( 'AUTH_SALT',        '_njoU)yr_>*evH=TcNw;|f`-ehG`~!mlL62ZUjO-B=8M?HRQzC]z^Er)Tti|IT`R' );
define( 'SECURE_AUTH_SALT', 'HSh`R.9%:j2}oO_&e>BMY/1]q<dzIyEWaz:ZD,*()0!~9{*-*.q/$Li>NA ~8;BZ' );
define( 'LOGGED_IN_SALT',   '8~2e.<keKL)3M+Y$,$9!2^s?o+p0sj8!6Hu);arz0wW(U;0,BAmKUnUU$6d:*8gE' );
define( 'NONCE_SALT',       'UEX7{EGTr.#)1 iRDo8+.7U~0I*_?V<#&Je^G=eJ#3)J*95!?vE`4S.4]d!2Zp.,' );

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
