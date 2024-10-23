<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'technoly' );

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
define( 'AUTH_KEY',         'x)@mr>AYYxr{kTyk3J0{Bw/BJ7m:?D,q9vI:x<g`g`6_ zm:V.RQ5w}~;w>]rHhR' );
define( 'SECURE_AUTH_KEY',  ';P&y!f0L#5}>_f<CvS(Y^tr^v$z}W(6,Ldp6V0X,p2?_{}$) {&q;YfUcDcP>>F/' );
define( 'LOGGED_IN_KEY',    'kho>}]9Tt3b>28>Uu:)qHYUPuoPV>TO/%JZjNlC}zLg+ I2k[YhI.13.4N3Syb$2' );
define( 'NONCE_KEY',        'Ee6^>+r}$$R?|oJwA5/HKItpnTb5:D<3>#qn^3,Xd3(!+_,Rc|YB1iz9(jzS9*1~' );
define( 'AUTH_SALT',        'BmUB! b^ZfG{^u_-z*PjT ;-UNe_K56enm%y50,8>I$7*5NdHb,RJ;I:=_=i} ]4' );
define( 'SECURE_AUTH_SALT', 'MveW a@VRfY6(:yV,{vciA-~_|/DH~IC|;^Je6&9Ufvl ,s j8=KS(:9||OAi}DC' );
define( 'LOGGED_IN_SALT',   'JSB6f8t_#Ew]oJcFe?8@EmyL~A{W56P_G/R~MD@!`fRIu{l@L<5@[!C>V8S `)V!' );
define( 'NONCE_SALT',       'Gy]iMH6SPB=u{.?%`_A^Rpo#gyCEk3i`6exd}rcL$m<-8nwXcFB9BMmn|2>>J:AG' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
