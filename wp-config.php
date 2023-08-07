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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '!Jx!EpI}f=/[f9+xD*DR(A8JK)d$s]YZ9b9WC4PuslqHZ#+k;-*TK.ZT?A<@$|:!' );
define( 'SECURE_AUTH_KEY',  'zzLoK_G?>}hI M}`U>CIcE&!-]d4jF0 #,[FP2U><`|U+*?pm%-<z~W@z</c[-P>' );
define( 'LOGGED_IN_KEY',    '(nO.QLjbk,K3Z H]#%O#*4+nglFvg/iG,^^Iw?mm{5DXnvhGIc,nRx%[We+LmD$x' );
define( 'NONCE_KEY',        'b^,x,*gZyb t:T*^l?7)~9F# @!W j39|hkNjm%NjfP1!J_7&iQTzt#dc@7&5W`k' );
define( 'AUTH_SALT',        '9+b`>ZDfGg+:{?#<nIa/u10GLGN#_/-li+ {mZY#{XDXEJc;[ZKxTgXUE:Oi-<[=' );
define( 'SECURE_AUTH_SALT', '(&ilN&9@=%{kQ=XE_J~3kZu*K**q1L/DXrl6niy=aSqNNzSF8MJ?-!dmL^Qxmxx#' );
define( 'LOGGED_IN_SALT',   'm#NOP#tQxy/>flPPR5ZMX,DTa60[UE{}_O1hlE88Y(#k?x8b7 !q@o<w.?0[M&[Y' );
define( 'NONCE_SALT',       'Y[O&`=xldgva*>|Kb/vn~]m^4P)9NwxXD5+W6u@v.*J/?52W3HY:pCQ^NQs0jQm/' );

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
