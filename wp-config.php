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
define( 'DB_NAME', 'banhang' );

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
define( 'AUTH_KEY',         'Nhx_!%@n,saIw&22U53,tbJpwgFf^^-u3~5[YpIYvD<(/9}0ac(H.Rc,<Q`}f@@c' );
define( 'SECURE_AUTH_KEY',  '<8.kojJFIIq fkex3:cFC_Z+sM]?V,b41K!G-8l}NNiiJmz7R.51$p%l`^djQ}<m' );
define( 'LOGGED_IN_KEY',    '0 L01#}0)A$,ay1UnuW-=-)Jh)V8G+X2]Ec4+ZLZ`gdSt;&8LSsF>pgITogroJmt' );
define( 'NONCE_KEY',        'L @tg&BANB:If :miRZ#qwOk^u nYv&Zi:/-fSab*:5;*Ih2tj7D^M+qBCbjf?_o' );
define( 'AUTH_SALT',        '(^}+M78b[QSp*dk6D/,b[{J#1nKc(aL1;>|65N-gHO#*As6}s&~-x_hKu}R|^-+B' );
define( 'SECURE_AUTH_SALT', 'Xe_Ob&i^}~?5^W=rp@D8.evnb[EpO`3%Tn&t|J_v{I.rLzY&}s&oo,;lUO[WpA!:' );
define( 'LOGGED_IN_SALT',   'tc/L08-O/[Q|bNhVrV{^fA@tX2i3Z,qpK|Q!Ac,h@O}6u56knT?TOjp^/6*,BIcK' );
define( 'NONCE_SALT',       'k~DWht<f-7w/jRk8q>d%y4mTy9>,]Xx5<DwlL6|aRt{kKV~1fVhXo ^zY?O.5@.a' );

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
