<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'customDigiMedia' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'tw3QeYtd$i7jyf tCeT{:W(An/zv1pB,#AabK0)1is .QvL,7$#3_Zv_kyS9$zbB' );
define( 'SECURE_AUTH_KEY',  'MkS<1^zT_gn$*&GI^4@6?mHT+sc=q(.D+ /o96i]:iI9J)KBV.$hrFEEoqtiBCF$' );
define( 'LOGGED_IN_KEY',    '|CP0Q9SkE!umJ#dNDRv7wt85NG(-g8]F%=Pb!INOTz&!S[Ytd;Of/e$r7wkrC9dR' );
define( 'NONCE_KEY',        'DC{ffOhiJuFxR&h*/5f2?J{0R!DmYht8CGp[|K(%I`lZOSD?*+O]^}Q>{ND^J:So' );
define( 'AUTH_SALT',        'VSwPE(Dwv@-6<B<yW$0go47x<P~Qg.Yu1`.78Oy&hKu<(D/|[yL:6pGIIM_pe kP' );
define( 'SECURE_AUTH_SALT', 'ZDNZPY9r_.{;s!_hm,F!.N]z@#ft>F=::CsinvGRkRCbO(>~Z&`J: ?Qd _^78?>' );
define( 'LOGGED_IN_SALT',   ',j9d@?-2BmO8e(db=&SS:tn}CP<>UA!YS8*-H0H^;1#bDLMn|F].1rY[bgN>UZ6Y' );
define( 'NONCE_SALT',       '@&0+TW[3<`U{k =BaC1Jf}snAMkz6sc]=:102k6rlMaJgx@yG/pl$.u ygk^(%$s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

define('FS_METHOD', 'direct');

