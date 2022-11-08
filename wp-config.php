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
define( 'DB_NAME', 'local_wordpress_db' );

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
define( 'AUTH_KEY',         '^$*7QzKgt=z$kEBk@w9(dtN2E;{|/Qaj]GjZjIq7.NruERy>[2y3D&[-Q[qkTg,t' );
define( 'SECURE_AUTH_KEY',  '=7kRf 1gKFRGi6zv1^}IY6#/<K4,yH=|b{<bopt%fIfxn[[9|mAm)tK}^e?fs{!X' );
define( 'LOGGED_IN_KEY',    'F,BuY^2fj0|A3X<%PD5n`vu| (u.Mkz>?3[xt[a*$Ga*bpNSLk{QkXD8S*-5ZkR2' );
define( 'NONCE_KEY',        '<XKldg*M_<BU{<R><&[_bD,5AU-&0?Xh:+*f}HqKqf4}j@`4g^Q;_`bnQ!j4zV*6' );
define( 'AUTH_SALT',        '_qC1E%iw@~!rtwYGn]hY{F;vG4Uh0<oDYgaJH/,vI_H,vJR}SjNy#uG*#qwUAbY4' );
define( 'SECURE_AUTH_SALT', '^SbdGN^FZ$Cq#XL}]q7-}6&AH5dEg=weK8MDg:(/JD/ub,EM~(:w@kFv3=v!Mhq@' );
define( 'LOGGED_IN_SALT',   ':jfO7g&d8F-_gEuUtiT*/%X:Dy*JNIJBuOG&+ZyWbN&>:e9Lq!:b$l+BL 5Vj[(=' );
define( 'NONCE_SALT',       '1-1d<2@H/IL$9@sw)UR!c{pc^+de-!6FMJ+bELac:2j;<,iK9mu8M3gz~9=O+|:%' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
