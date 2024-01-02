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
define( 'DB_NAME', 'db1' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pwd' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+DH)s+gLt>Q&,JLwg%B :BT+G*&_ T~[r]Vp@25x!zOd?v++2I-NLx]|&D>/ks6~');
define('SECURE_AUTH_KEY',  '+bNUXf) ;8x#ngYFLw,^zJ9?2 1gs317=a+ET#1.k3<`<{qj!=Aoz>Xgdo(f22zq');
define('LOGGED_IN_KEY',    ';|e.@-YGT>7FPVGUlVPVec*E;;8%xN__D~S]t>4#d}xtp6[,<|]AjX7gR<0Q |ss');
define('NONCE_KEY',        '|wo-Lw0f-C#]w~7%VqANrZQd|d|,5Nox?Fnl:t/p-F1<KW#)47 5Y5R]Z~w.D#i-');
define('AUTH_SALT',        'BwTy&l>&0|&:TzYHyR~^>[D5`wPj$i,UVt/d0PQ`/I*IIO(mw456?WX8_A$.A7O%');
define('SECURE_AUTH_SALT', '>3]g#C[!(Z?jshdslL/6?@nP(e_aGt(;otbRL,+.SLwp+;X+Oim|%-|:@;kIWv _');
define('LOGGED_IN_SALT',   'fg,VCJ(r`Ic-TU1oK-3@di2:IlG-/LPu#x=QDLG|7I{C.tWl#WzR :5kTA]?i!EJ');
define('NONCE_SALT',       '%4 u+2X.YC=cgTAX4SP-+Z+/a=u=T4,R+*x%U[-fHOY?Pz}ZQxfOMbUW-4:Wl+Se');

define('WP_CACHE', true);

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>