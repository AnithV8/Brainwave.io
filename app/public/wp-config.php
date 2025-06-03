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
define( 'AUTH_KEY',          'XNIu4BG_TX&{hQ38mcP8!z^(10He}7JGwp1n@.Hg.CHq67g]Kk H#|-qI0AOC3nt' );
define( 'SECURE_AUTH_KEY',   'ro)f*R *D|lanY6aK{3{TtwRw<H|(S*)g|kDd ;;Dv?t&S/5~E4sN7(Q6Z!`E^.B' );
define( 'LOGGED_IN_KEY',     'X7CxKQ8UJ&fgqc5(XS>FVzXG,.<$K~E~Pr~X Pv=BmQz9<_/JU;XyU}C,>*_VV.r' );
define( 'NONCE_KEY',         'OJ<#@ 0=wMhSvFp,SZj`(4^kV-cH}MtNjgE,i.>u7|ne`j{bm(0.7c}HZk<}T**:' );
define( 'AUTH_SALT',         'K;k3a%Bv9bWp1]vpD33~A}[QMt[/9ZUky/RtATB6tJxVbZ&oAf:uN/Pm|<]RRyNz' );
define( 'SECURE_AUTH_SALT',  '-!kcexe9V){|H7%+C!=A`epB@?9dEd~t$EuO(~gV<A4evJrL?krMks80`/~h<:Xh' );
define( 'LOGGED_IN_SALT',    'U7ENU]Q@C0vqrkk#<c;f#QM1^v&xh~hjbOjbLsHT*5eFgnrE|^{cc>9r:RUpE3D.' );
define( 'NONCE_SALT',        'z8>,;WgFsFvMe&i~._e^ ?>reOHk-OW<}e{LXyGB$aCIl1),A0~-QkM]-}rS;R$Z' );
define( 'WP_CACHE_KEY_SALT', '=(Z60Jzlz ]W}sUO#.(wv#lV]`X*qKn:T8>|U66_ibiiUhj4l+4A4W,ycp&C.T->' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('WP_HOME', 'http://brainwaveio.local');
define('WP_SITEURL', 'http://brainwaveio.local');


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
