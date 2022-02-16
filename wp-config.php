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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3301' );

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
define( 'AUTH_KEY',         ')ko9Iz%=rm$#]P5F(RkuR+.HW9@cwY@Z6_n]SAV5-ffegYV:HuI^_<Yq@,(}rq?t' );
define( 'SECURE_AUTH_KEY',  'lK@(9mj<u}34m1OUtLu~|0R)*t(vWHuXM`kSCH/5.,x|Ow2cM?G,rdXWu?U]|!8b' );
define( 'LOGGED_IN_KEY',    'I,(`TXk{&n`3x@+g>2WLIc3Eg3>sC 8Qk^}t2/m~A!9YR{o)mLhmH/e@vq 5J&wD' );
define( 'NONCE_KEY',        'iI-2}sLi-]C254%7mIZuY!iAX rd-qmVbbSo6U(@m#G%]05({R=wA}`#;#g8|Y|H' );
define( 'AUTH_SALT',        '_aH`ZPJ}_]G/|TWqW(k|oj.etR(NwwqWb|{41;Wm;^RV^NpcjRi]PE=:~O|1,|-{' );
define( 'SECURE_AUTH_SALT', '/DofK]CNtF/3a0aAfVVo_6-rxy~F_a^1K}GV7#2Ii{TZ{3ZX2uaa_9 b~I~;ZS>k' );
define( 'LOGGED_IN_SALT',   'RKzzXxo g;)m_i<&qGs HD-L5xDpm$z<e-qY^E<p7-P)F8h*UM:iOn7|5q*LGI]#' );
define( 'NONCE_SALT',       'pov<e[m4~K#d}}+~5ViJ(5SJej`n72<IRJn.f,qv.$sf2.xixyJ+-|IP*t85[B)D' );

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
