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
define( 'DB_NAME', 'headlesswordpress' );

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
define( 'AUTH_KEY',         '%j8wJqBGd[6@6>=q$&mVU[zFpbeUhwN4I..5I+@6@eN0[GFQ;(FGGxiT]L@zg3W~' );
define( 'SECURE_AUTH_KEY',  '0Yu:JAq80Ll-vHvF^`<uL,@!WpGB}&xm|gon<U]/9Bx@STol8#KaoV-#|]>W*8 n' );
define( 'LOGGED_IN_KEY',    'L(iElE$oUrfp|vex;Bg39fB-9o@CDMS*ptx71=nZ_iA%i(0zjwtP, bZ,+pkPX/;' );
define( 'NONCE_KEY',        'U6XSiq/1l(I7akO&1.;)[o?>,&+pw7Mm!m T1K)KX*qD{nbL07c&z]Xz3*JQ2E`x' );
define( 'AUTH_SALT',        'OGGwjr}1amTs!;6D4r`ilR|1G6C9f!Qd<G~r;V?ff-yqeejo_z@;*}^QI8[Q#TVA' );
define( 'SECURE_AUTH_SALT', '}KNkUXDloPVHVFVc}:$<Y2f;gTzdd3nvj*[_4&T8i-c{ I5AF.14oog&mpVg5>LE' );
define( 'LOGGED_IN_SALT',   'b#[=t]![tIH[-BxcXmop}7A%da>x 68a|bl7X2N9jC28!wn<V4bFo2]4Boucv_hf' );
define( 'NONCE_SALT',       'R{]{8MApjN$ek<GTd#MH2G>A|X=ykUzr0Gn:kc:QeDV^a}~25g5,PW/r)rDVDm[q' );

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
