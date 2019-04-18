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
define( 'DB_NAME', 'erozgaar61' );

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
define( 'AUTH_KEY',         'S$<N]1h|NI[Ddh;|!Eu ^YH=ipCYj.5BE5rm5ij3 ^Uq.a]}t7T^/i0^`p]6W5Hn' );
define( 'SECURE_AUTH_KEY',  'hZ,#n--{EdCaQ9.<49ce{^~K6.#Hr:V_0KhG@MPN&GH,a~WBO|P1~^^ZO.a$u%FG' );
define( 'LOGGED_IN_KEY',    'Ua407O%|~M-b32,|ii b?%p~9xx=Rvz_8IK?dcXd#.mU]G,:#?bJepR3IM.2rLRk' );
define( 'NONCE_KEY',        '%5;iPfw,&1P^=st071C;&r)0Gez/r La7CtTp:G<j! jpi5C~0nYn*sIZ9a:t9/C' );
define( 'AUTH_SALT',        'c6`e9q.F5dnaPwB,jyuZ7_n_Cs(%DA|IWAVE2V``a+*` FqXT*f@pP%]&0y{.E}.' );
define( 'SECURE_AUTH_SALT', '#.VY,;;NyOy9p:V>CI]~](Z{?U@Ief$C6LR#+|.g8HxO*CNpCpws0:9dz18S?NHL' );
define( 'LOGGED_IN_SALT',   'e8Zn$=uY&CeZ!yEPKBU(#fnRc@o^EAg#eE~yJf3k11TAVdEHAvF9IQJQ5S6ebg&m' );
define( 'NONCE_SALT',       'Z&9ze&T`!uudzn:p! 372Q5!iI!7Ij^UWDqo[GtM#ZIdZsPcqLJg][z5$hhVP~A1' );

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
define('FS_METHOD','direct');
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
