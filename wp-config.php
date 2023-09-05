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
define( 'DB_NAME', 'david_oyelowo' );

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
define( 'AUTH_KEY',         'kZ%B^K<&,f+sceS,q#|l?bNYh7p^pxL F0?`^1@<-j4tS7`EhI 2fB0t)tL*#1Jh' );
define( 'SECURE_AUTH_KEY',  '{4{?]FONCWx]!uMv?x.2/T#<*1M/jcS]_`a?lpa7pm}R`F>Dp66ou/yUCL4V>fWL' );
define( 'LOGGED_IN_KEY',    '4FQx%]{7qfAvBbNc886BvYrOA4G%YhFp!,KI(8U{i:(uea+0`-(*(f27q6%%g@Ez' );
define( 'NONCE_KEY',        '~1.T[aY%0zwe%c~a+>Fcc?(W)%+v 02;).^HQOZE6Gkjc}1jhk1FCi+C3/_b5]y&' );
define( 'AUTH_SALT',        'fSHGSq!+1kT+([br,^[UV%C0%prh3RsuU?VW7p#dp+|.lABRXq$TpReY4bPo`/#!' );
define( 'SECURE_AUTH_SALT', 'gn;+wkpoK<3@J2>!/,4D0S&=yz[Mqq3Hlt)|5^>*}APSbaC~%Dxr=&b.^g363A^m' );
define( 'LOGGED_IN_SALT',   'Glj?w-,`0t)#32TFMgEU.nS)6VFc}J3vRhRp9]bW[jpX/Y>mM5 hI^4XInH0hlu{' );
define( 'NONCE_SALT',       '3R$cH&<T@`1&FL;m~;0{fy$^}(+2}({ndk3OC/Hpn2+yP/L.O)l=K]L6bRM/M^6y' );

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
