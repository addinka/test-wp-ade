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
define( 'DB_NAME', 'new-test-wp' );

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
define( 'AUTH_KEY',         'HGrCm=$R=B4l?X^YzrN,27r3v2f@x<Fr.dN7}r8-tbOw463X}~mCicw8O]g<az0a' );
define( 'SECURE_AUTH_KEY',  '2|Ew{wgbtJ&vpP!{p5m$,|/Xod>b/p%0c-pp3E/0s=A3k3}]:+TaM,H0t.)c8P;1' );
define( 'LOGGED_IN_KEY',    'tAV:SbFgodg*vImN|P7hfl8A{E0(#%B5GMRX=>12IZ-Z`Cd9~A!X(^+m,w1|jDo6' );
define( 'NONCE_KEY',        'T n1G]bs +H25^lOI>F{AUZwFpy+#fabZwN`qVih6UuQ&J$7>62T]dD1E}C+[}!y' );
define( 'AUTH_SALT',        'y(:C<q//^8U!vKgu!v`>?,7lw)P!7lq2GzP#ew7{Gi>hzc!Z y]t^kn?~Vmv:ww&' );
define( 'SECURE_AUTH_SALT', '1@8pauZDPatfeJ#* nrsgu[o{z`?6ahfXAv.e_.k6G;6&q>4K:]n2@I1UoUDq^1u' );
define( 'LOGGED_IN_SALT',   'T8-Q :49?->` B]m0S4Y2l =I#8BmH]Xz zh~^rX[p0(f-8s8Wg,8rQEMi)k6%fD' );
define( 'NONCE_SALT',       '[=H>dLayF6U0?B-VN@8~aSBR48`k)VH&c]2FFTD`J=P_?tjm&lIK6:~}U1c4q,MP' );

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
