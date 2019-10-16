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
define( 'DB_NAME', 'wpdb' );

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
define( 'AUTH_KEY',         'd iE1RC{>Bkl~!dCk1F.#io&r)^<rm/lN^F~KyH7d7&b(}@Foe9s.Q/<%zQRPFwV' );
define( 'SECURE_AUTH_KEY',  'Xf)+yW|ry!_?_LhH hL5v.4f+Az:0#TO1_2hHx*,&IF=9j:4~B/0=wuT>YC}3q{L' );
define( 'LOGGED_IN_KEY',    '7U=KKmbwUVr[XUv+a-*)#=l4K_{VYz+3]>a!$Iiei8x1W2;,x1 -c=lQl MhE932' );
define( 'NONCE_KEY',        ':=#TIUZT29E$W4JsCuS>G|uH.2Nw-hax=13bbY;ZWpTI,%X(&l)j1Hq,[E9%iTAt' );
define( 'AUTH_SALT',        'em-=-FTcgE5x<pr=olF1ZRLb3Y=a!tSU ExlkO8s: .Pt+9sY+69/2<[_CCrlYYB' );
define( 'SECURE_AUTH_SALT', 'o919RHxux6;qSFV;pYKizvjp8TEMrJb`p]wj5q[B}_8LXbV6]M;0}zwRI4Zgkcxl' );
define( 'LOGGED_IN_SALT',   '<]},b?!@&[*(6<:9)|(S|~jV1s6,izb[M73?6tfK#d,1}55Lq NO@[?6+=#M(Fq.' );
define( 'NONCE_SALT',       'r=GsE.^Xc^hm%HjLGhJ|wFgJ=GSz%JBV*vRHj%dXIe};UA,U<x7VO.,M,M<UwLH~' );

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
