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
define( 'DB_NAME', 'sebingkainarasi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'A/H%AH(s[`M3QQ.% ``VOFE.! )QKoR@-{*=lX(s+>R16rN2RBsp;#g@3I8TK7#>' );
define( 'SECURE_AUTH_KEY',  '`~DS?]0GZK9NhZ!i<J4KS&dXcA^9E%ww%^l0Jh/2VI(%S#Nw=C|KI<-A2m!DE80t' );
define( 'LOGGED_IN_KEY',    'xx9:$oD;+H%EIxu^,bb$dGV$J@NtXCm(=+C>%,Zu;pnmw<9f&IS_5-O8C*Geb<bv' );
define( 'NONCE_KEY',        'd9o+L=OB%UL(f#]]z>[0v`;CBLfDnq&&pDWc>V4^5><[ge^%rxZ}nkc?x%P~FQhz' );
define( 'AUTH_SALT',        '77_FD;UU^Rf>)28_wibKc@Eqi2?0h<kF=!<wemaZKd|KGWj*;tpK4jjrJVP/:i@g' );
define( 'SECURE_AUTH_SALT', 'fv&gxjrM3q9%xLk5%,KMXrVHjznvmK&eZARjaG zL<J}^(qG]o/)UZb>mHR:w$&i' );
define( 'LOGGED_IN_SALT',   '`{`qAvo/`%;grWg-K*S^[ DP<0pe17Fj,#9Bivd`jv ][~^y:vXl[W%FW^>1A1H_' );
define( 'NONCE_SALT',       '`e^(>?tgd<Z?dx&>aG?,KZ2!]8_W=V5<ondM)y<be)l>z-Q[QJ_/vP&ajXC7<QZr' );

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
