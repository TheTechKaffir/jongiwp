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
define( 'DB_NAME', 'jongipress-playground' );

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
define( 'AUTH_KEY',         '29-r]f=|GSv|-N_H5^hxJf_=r3G(xb>P)G553v`CM 8H?F1vcPDO8>#T(f#,:plm' );
define( 'SECURE_AUTH_KEY',  'tUqnF~Jo,% 1S&k!%=I.DD: _:Ku:GDl)WeI|TjJ$Y~Y::H`kERQXBl1A%:I9kE[' );
define( 'LOGGED_IN_KEY',    '[~Mw_P$?7U-X!=P!?Qb[WAgg&*bUrTEo!Y)6?)*_nrKfd?&#`+0Sw[(ddRx[]idl' );
define( 'NONCE_KEY',        '_PNZL,#i-{W0osKD/j9%7ShE?d=4&:i`L2}IEtqw)gRd4;E7v 0%`uOf(^{-Q82_' );
define( 'AUTH_SALT',        'EbTP.ADx/N$LJy<[9H[25C8EDrbXxq`pM>,_tO{<{F.&};F%qs%jCL^Nn]%D6+Qp' );
define( 'SECURE_AUTH_SALT', 'V~(?g<^B}JsHi*AO]7!bGvhK7FN>XkVsHG9h3T=BsH}T&|dm06Ox~kS{9v$.VGu:' );
define( 'LOGGED_IN_SALT',   'U,WLFLY*X;f^3FCE!_IANjqK)0pHp<l/$KFU7$!xZ;K*rQ=#u{D&F&GM&HviSK3.' );
define( 'NONCE_SALT',       '7e>`y[=@nYMUdvO1A QHWHak_Y81Q|-p+Jse6iy]QYk$Vj:I]j?hngXNxY%qsG|<' );

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
