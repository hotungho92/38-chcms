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
define( 'DB_NAME', 'giaitri' );

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
define( 'AUTH_KEY',         '@*YVdy=i7L=.7.abCQI$ZYKJC>J#;lO3Tz!Z3{DE&ur?.#z0bu3xjkh(e 6)&jhs' );
define( 'SECURE_AUTH_KEY',  '#DeFnw2sm8+`xS%E=!=e), i+z0N&|9hWjo:K<38)A]FpwMeIZerl9~w|J:n!b!}' );
define( 'LOGGED_IN_KEY',    'zL@r>WYPh~Iewc+wNVG<=uG{-XW&wq[~B?8EbSpb^=%i=$W+)!0$JMbDR^:V!fa?' );
define( 'NONCE_KEY',        'W)}@<}-w1ZuzqwbMr`FbgEIud2i~*&zHug#:@V{8MpAAwcS@*=3b&]3fDi #$WML' );
define( 'AUTH_SALT',        'qALWB|w(X%J][y*/!m|[be@#NXVxCijzw-*ZdRh8FLYVCLmG)`)u[PvH]{DV~cSY' );
define( 'SECURE_AUTH_SALT', 'R_u!D;s./%5hIC[!izhghy[?oB9M?ISMi(Vx#v(yamTE9kHrrs3+2rF;5KLzW|rQ' );
define( 'LOGGED_IN_SALT',   'Ev;Hc0R#Z!P!*]mz_DwYKj<bOCw~SU<E5:M<E,UZwmwol+8A);kBvrp[+[S#H/<n' );
define( 'NONCE_SALT',       '{FEJ q_iE9.yW`ZaS?7[LW7!J0j^K(dTqxvVc0A-J77[J/FENsUC1*Qq2DJs*DDN' );

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
