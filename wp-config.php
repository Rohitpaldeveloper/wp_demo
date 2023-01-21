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
define( 'DB_NAME', 'wpdemo' );

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
define( 'AUTH_KEY',         '*y<!y9|$=Qy;FR?)Ix@IJ5PCW#0>:;<Sc-(;+kc]cGjZQqeV0w8STB3,.CQ~/foj' );
define( 'SECURE_AUTH_KEY',  'nQY*jh?]k7A .I+-q7UvXNP>He#*~SYl<]^I;bSA}Hq5A0NI$/!NRD)G6Cy 5iDb' );
define( 'LOGGED_IN_KEY',    'X+Gma,i!*y4t-]y.0||U}i(/W.cF8}ZtSVai%ZCg!F`pFcjwzVd_tz+/Sf1Cf&6y' );
define( 'NONCE_KEY',        'WG&:<rIi?G.y^SKp*kjT, D}W<!`6>Y~3{jwI--4 F``T$}}j^xyDG[0)bh4j3.r' );
define( 'AUTH_SALT',        'x*2sKIRxg[ Xpeyz9z<e(548k({e1=Q :CB/_1{E azGvHkDqgoPxr8MK0]N}G8U' );
define( 'SECURE_AUTH_SALT', ',A&(rI/B_?/CgMW3_4F@3lmy4{_)9hH/wUxmn[tD`{qRrw(:sfDErFehIe>h]z-(' );
define( 'LOGGED_IN_SALT',   'FXaIPP3UgyHz o;aERPAw/rQgUBhZ.B&fc22kf_KI;dg.eeMYzEPx}Atm6$A~Q=Q' );
define( 'NONCE_SALT',       '~ ZTx[Iu!~d}$i^!-ZYlkxrQQP;0Z@pG/R[z<<xS2rdhr=j!h>>Z@ THYX>6K%3L' );

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
