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
define( 'DB_NAME', 'dungthu' );

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
define( 'AUTH_KEY',         '0h4c%slf9H}^KzpUgOTL&i)9p8_NB%c7Q)j0%W_gtH5XT#!C0|El<_-Q8JyYP?aM' );
define( 'SECURE_AUTH_KEY',  '8<D2rYRy7jP9yL)E<OK3g]u;))wO0k}s+[5G^@@%SP=*/BtxsrO0)-4DP6Mt&u2_' );
define( 'LOGGED_IN_KEY',    '%4_o2ER7ZZ+17W?8S%9}!~bPa70r?L!q9;->l>j6|I>L^my>3[x+{Vg:;+0/Pj]u' );
define( 'NONCE_KEY',        ':Z{KQU_|3oX*,>$R56r)$%J3m0Uk_[6iBKRbVN>@TL8?vl!15E{Ih8MIw2 f(mhs' );
define( 'AUTH_SALT',        '#Z_pvCTXnyZsc3z~d5GR24Vk|.,#u]&*V:9?)=@}R,IEN!+),Y9;#/ci<&Q_Ip7P' );
define( 'SECURE_AUTH_SALT', '$P$WVOu<e4hU8I~fAGPUJ{:D=[C{&=V[[=<*(}BYF0l!-@R>(P4BLT&r:Bp/M5RN' );
define( 'LOGGED_IN_SALT',   'G226^7iDYS:Q)q2X[rVcN;#ZFMH*KI5^.0& Z6fh[3u!Th%1ka#Ki~LPw>2DGHjg' );
define( 'NONCE_SALT',       'C >JU*^GEV/y`_usr+irQzy+mrQCfO6L/$aM7o?Zi8hGF1_%xcz#JvC:V<_X}T.E' );

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
