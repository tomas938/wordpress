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
define( 'DB_NAME', 'wp-test' );

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
define( 'AUTH_KEY',         'Y& +qyr*abzjNdcENps/ls*eZ88mL=sE]@S6uR/R#heQ`D52A:;^!HG6ZBcT# VV' );
define( 'SECURE_AUTH_KEY',  'zX q~.3B6qn~ZWQ)+K4F>,yTP5+|#y&~OmVcfMA:X@j{a-=HqyA0HUT2,-B(]ut}' );
define( 'LOGGED_IN_KEY',    '9$W%7cVSVP>T7,S;S)P%m:@g^g|v/-PO>}:0[{/``hS3r&Ps63z>X,[J%KamAC@9' );
define( 'NONCE_KEY',        '^.Ln0lN6UZTtR b{}ELER7kg}}t[HA8QY*2oGSE(,8Q4J$E:97FRgfu^3X|d1Zwf' );
define( 'AUTH_SALT',        ':XY7WP=s@ibp6pC|y@L*$wiB8-|`j_(RU@?qT Gd_c*mCS-d9KCFif7*;d;/IJ{z' );
define( 'SECURE_AUTH_SALT', '4Gdvz~Q]4g=|Oh;2=]Io(@>U>z8&%YZfYMjZB.,jQ-qb-x4G+T]K1^{mpYc!.j#B' );
define( 'LOGGED_IN_SALT',   '7?4r0MJw^Px;ra:q%<cE_ws==|Yq|%J+5Z;S.C4&>4)1to;$S_NX|?L|mBTUL(j?' );
define( 'NONCE_SALT',       'j$iJm7!$y9>SI{e7u%4l>ql3&doksLu,t1-[zIJen($vV*psPV;_45:q_ GU6.et' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '_prefix';

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
