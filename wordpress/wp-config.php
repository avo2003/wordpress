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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'avo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '.X2gAh0B({jlrQ04l~B8%tMujGV1@?BTP.eAb>}/hKZNM@=yxnHGOA7f&RUeJT>{' );
define( 'SECURE_AUTH_KEY',  '|}H;za9=KSQx-w4BH^IFsfE={7!j{%p#Qw%|7_( k[)jnA&[$*d*9MKV:>%B[?iF' );
define( 'LOGGED_IN_KEY',    '6$4u({t_xg)wAN.c?:6m[eEsb2l;R1zp0,1EgK]J4UB/k`H7A>wIp0M,A:iC1TP7' );
define( 'NONCE_KEY',        '{{tOn^F~7zB_&;eY&sbyrmXZ-eq.2kH0pDX{Ul~yq .7B(*:1MK|p>/]|3f|mqVZ' );
define( 'AUTH_SALT',        '2NR17d0`xL5>@b=T+Dtxxg<jOR|(Us*[E1~(FsrP==x`}8i/{ryk$45V+_}t64#L' );
define( 'SECURE_AUTH_SALT', 'v355. /mMPys|Pt?s0f]e3_6rG)0w>?CZ:nx3&#d_S!UG?c) _[,+`jf5ADEmv;x' );
define( 'LOGGED_IN_SALT',   '8!W{IQ)qxv1=m.}Nvv`$/OOO{&F>/zFE:*0.l=]aXhILDTlKmX`dT91k>r2Qy!JF' );
define( 'NONCE_SALT',       'cy|vHJ)Q0^h]o6C>09r#=#V:.rRe4_O3T jgPGZk,AH3c&vNO+L3C83r!vA`/?9%' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
