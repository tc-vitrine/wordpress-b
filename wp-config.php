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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Vc$ybDvwn M+Z;yW!H!RtM#I[O0Jho.QOQw1:$K*C$8jed]Y{C_eP4tq&zYpSz[7' );
define( 'SECURE_AUTH_KEY',   'Q;TVBk?oRAe?v#NbF1q |u;%J@O{OgzA5FpR%z(iA|;UC$#khY=?yUY].otLF,42' );
define( 'LOGGED_IN_KEY',     ']m`QJ7xZSTjX&T?~L=>/tII g?,Pc{pJq:r8J=>Fe`|&x/lu3}{NIP}nh!{j3RD&' );
define( 'NONCE_KEY',         'NRtO(Mj))2hG9H(Fu|Fb8|Uwu2+yuUt0fq!Q%[^k0XjHdE)b/e$>fz-dL/J4b7xr' );
define( 'AUTH_SALT',         'k?#TNwA%uDg|t r!%=L!?YBbhJA-ZC#Ffbj,L-r_#7XRdCyHbuUd+ _R<XsC^d9#' );
define( 'SECURE_AUTH_SALT',  'fLFR3HZ91|k>4:%+{q0-!Pj ]6J,!VWO-^VXn7tZ`xa0P.Vr)hf%oz.lh*iwiKCD' );
define( 'LOGGED_IN_SALT',    'ig0,fUmTYkb7__T1V&H24)9sn,P+%m=Ec~.BZOOd`,.Cut-Ue>hI5kHtXl.<dOdi' );
define( 'NONCE_SALT',        'a9c)^ov<_~(xSnF%PU&=d<6%ibws3]i><<]b]t$Fg`,tFx.TEsXojUo/ Z`dp,k_' );
define( 'WP_CACHE_KEY_SALT', 'i~bj!%1ENSl9cH<kXNe<~%cIJxl@=dDvsrt lg|twu0(f4F<Co~97d1!=w8f^Euu' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
