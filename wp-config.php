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
define( 'DB_NAME', 'MyHotel' );

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
define( 'AUTH_KEY',         'tEavLj02QsU;VG+{XSKtBoZlBC*$>(;xtTYv_Q~<ZKVT4&s`mGvW+&szp`J|?hMH' );
define( 'SECURE_AUTH_KEY',  'cfSd[.FxDP:/BcX32tte&K)d[2IJa|N6/kTv@7jg{T[>/A>Us_%${BxhbHkREAOO' );
define( 'LOGGED_IN_KEY',    'Qk[]I_HUUVS+gj/,n*{5LY#L[nK~ZXp8~F}U>,][]`eXk0UmaNmlm|]$JAD:s0N&' );
define( 'NONCE_KEY',        ' *!(9_,D5{W}vW(&Qpbm{N*P5c;Li5do`[$SM11V0jPL;s>bWt{j{Gm`-4j1tUw4' );
define( 'AUTH_SALT',        '<nv[Qe<2edu+(`r4559H@$BmPL,IC%Q~S|v6noZ9Yp(nm/}Fe||<?90b8Tf=NQ7X' );
define( 'SECURE_AUTH_SALT', '*k<uQb|dGLOfm`q9mtoyOLOoV=R})Wuvp$!0nP%$Bu3+;+]LY`F[.Wt! 5=Pv.eC' );
define( 'LOGGED_IN_SALT',   'p6&+Tn~(230A1O-)qD)bWzZSX1Xg?CNe#/v4lU>xHY+KRKYM-r<;U~m>eAzV J}2' );
define( 'NONCE_SALT',       '^0] K&-X*+xZ16VzMLgbsjoKI!u?Vi*7TAs|kD+Y.I+UT)U/iH7.6dXQ15KA8u56' );

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
