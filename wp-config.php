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
define( 'DB_NAME', 'linn_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'q+ )$ZQ+c #UQTvT#E4WfHD)LmM(?i&9%|)rvy)Q,(& BMI0[v~d1EI9K:CNV/+u' );
define( 'SECURE_AUTH_KEY',  ':YE5*XRJLBwM6fC2q(>^cC]6X}e!<:fJTQNC$3>R^w?Fq_};YRzWmcn:<IsP0G&%' );
define( 'LOGGED_IN_KEY',    'rZgu5I ;#xonk*EH;M9[AulLovkL>EMQ72aQto%o;ut5U|3OUfs: bTBYGZPBH^x' );
define( 'NONCE_KEY',        'D0Ep_h&+J8]|FR_L.AKT]CRORE:Qe{?|QcIqn*=J&iP79^%f[h6U?TNKS(A^#jL/' );
define( 'AUTH_SALT',        '<c|01w2u98Q<.Pvi#_Hk1(RuU`Wc;tf1%NyEd^}#N,**RtUOK_zx/{e;7<FcB4]D' );
define( 'SECURE_AUTH_SALT', 'Mm(+,c6HCg[,*cUk[cEfl_q|u#wRF}s:`rXo1NX)xX#ZB]#Kkt!zR :MI{U7pQ<B' );
define( 'LOGGED_IN_SALT',   'lh`U:&H_|=MyUQca9)w(BssbjCUL@OUJaG_6%0-:*XM/vC(E<)2y_X(fDS]5&R[-' );
define( 'NONCE_SALT',       '1K./&B<ka|F**`=HB(7^|Stw/( 3nn:Y/O=:o$~#mi>b.~ti.fvrWeYu=:ZnJP o' );

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
