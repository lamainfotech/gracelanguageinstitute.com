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
define( 'DB_NAME', 'gli_db' );

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
define( 'AUTH_KEY',         '`5Mr|w`t1~2!jpHM7[b81bTv7A::2!&B~V{<o^s.3CUm)xIP)VhBx#+g&`@+!_{t' );
define( 'SECURE_AUTH_KEY',  'mj ag)`tO WC]9;]j.c{[nA<%:ONq`X)GjfJ(q=Jm-:(rH_IfGdx,kQ@R12?Z,~h' );
define( 'LOGGED_IN_KEY',    '4w_a8H?^t95}I3<:l&V9$d)>bbP<g!S:KT]s)1>L!Jb/AB30<asTfei03c~+jD9/' );
define( 'NONCE_KEY',        'JsKl;SWTdpmp PQ]Woe%al#jST<_97eK&iN-+-ENS2]Xjmrl5ncJrzjo7|Td5~`u' );
define( 'AUTH_SALT',        'CPwU+nn5!dkZb5XwJoYVW*I JziUQSiD}B-`Hoq1C5_o!Q0%pjF&x]u*$&35{==/' );
define( 'SECURE_AUTH_SALT', '2!x(MxrCk}2NPTAh<,Oglq]$5]*jlhvL|K@4G,733q+|&!!dye3GjPC&@{sEZynK' );
define( 'LOGGED_IN_SALT',   'PA(EVAOv?~^xje^*#$2cd}xR| >1C)luZbjeU,_Gz9uDR_XDQYbe%+I;,dQpk9~?' );
define( 'NONCE_SALT',       '=7-9k)2GBlVymU0<~XTrS?t(E_PP%+X),9kqd[A0>]hL,0r/Sp>nVt/~oNJ||~XD' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gli_';

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
