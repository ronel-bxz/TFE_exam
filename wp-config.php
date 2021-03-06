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
define( 'DB_NAME', 'exam_database' );

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
define( 'AUTH_KEY',         '_,N+kA^i}Z{[)?p6[hW(ZHX:|NLg=3Fq&epfzlJ?U!yz[9EGbtYCA^1-wZrS-fc9' );
define( 'SECURE_AUTH_KEY',  'T;Cr:3L/j/)vuqM}`|.FND[^ht3h03Da1>[m8=6$YR2yq%x>[V#4(`#C|30vSt<1' );
define( 'LOGGED_IN_KEY',    '+ )Hh_pQ)~0_G%PUvs~b&Bu#!KXt3wI.tg4(`cGD&,;)tXwfP6*|M?P#5KR(B,Lu' );
define( 'NONCE_KEY',        '7H 0Ul02P[;8M$)6]A.XjTiH#qv*$6D;I-oXhn>l1K=:Wy/gAZJj!|xt~lW<QI73' );
define( 'AUTH_SALT',        '*( ln{/~9I:6VP|]l{Gti&pl>&t04M(v.:@!Uu|Pv;3!6Ux}Ue{5P{N.:SY.ej!x' );
define( 'SECURE_AUTH_SALT', '7zIi|h5p7qll1_Ou=iqOd lB/~My`4<tJCXl-*==p#lFVxe_6Z|T8nmUugZz^|}(' );
define( 'LOGGED_IN_SALT',   'JO#:cgo2}uQ%#1Hvk*gC?Pa~opx/|_L7R;q*{vP1]X;.(]/Yae|Zj^O`?[Y_nzAR' );
define( 'NONCE_SALT',       ';7,?3*O;7vI?0RYOw_il8Nf]33pP2LlUhnG7k}DSjKO>r/Uo|f]%zkntCt2|CS?z' );

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
