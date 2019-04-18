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
define( 'DB_NAME', 'gtinfurn_globaltrade' );

/** MySQL database username */
define( 'DB_USER', 'gtinfurn_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Super@1885.com' );

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
define( 'AUTH_KEY',         'uIW}KUj#kNGAbqTKt#L<H{OK}x$V*k%Q5rmboZcMS_ ZFGb_DuyV}A_F:Q<DuaUq' );
define( 'SECURE_AUTH_KEY',  '*#0M+Zqt+Vo=kFn}Kue8d)dY3eoza4R-^-ufUtM}K#B@h0x64fPLSAt^y#3QeC8f' );
define( 'LOGGED_IN_KEY',    '+tmIp?Ej/,|LGfopq5bC15!d[g}#Fj6_j!imv]D^!z6wxCdseB$3.+zttr?on5=s' );
define( 'NONCE_KEY',        '~H`!/S2X&7BB<D)>8`AI_evHQqsY7gm(Z#B:*w[P9(G]ZuC(CEmHzb;3=B20OszL' );
define( 'AUTH_SALT',        '^kOG_.]jOULVZLXU>?@I:(Mp RP_TOPkI4D!0Qh&v{zn+<!y_nI^?exES!X=?9gg' );
define( 'SECURE_AUTH_SALT', '*qb180nrMs}V/RRufF9>+-@=o2gp N`Qi^<hk#,v{sf|rR3s8Nqr-l2OQ(gboBp]' );
define( 'LOGGED_IN_SALT',   'FkDrVaw,7lLiD]=AXx<i{)yK1-N0WBO0f}n,0F)r$|/^{zd^aaS?*13W&VzlxUd4' );
define( 'NONCE_SALT',       '93k4P$?:^tvoZyPu?`cG=.$u4&J7A]6UA<R]L!AdF)Z!fiBqdeY$wo;?zpZ1OLF#' );

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

define('WP_ALLOW_REPAIR', true);

