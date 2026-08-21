<?php

/** WP 2FA plugin data encryption key. For more information please visit melapress.com */
define( 'WP2FA_ENCRYPT_KEY', 'Ey1r3p6fhMWQYMy2f9ISWw==' );





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
define( 'DB_NAME', 'saihealt_wp704' );
/** Database username */
define( 'DB_USER', 'saihealt_wp704' );
/** Database password */
define( 'DB_PASSWORD', '13Jp9S[B)9' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
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
define( 'AUTH_KEY',         'm9fjwrklizufflvuifmso8f7towktzqhwn2rmwux93nza4bwdd2bd4cjadzds56c' );
define( 'SECURE_AUTH_KEY',  'wykwdphutk1lj49qmzflnshtglgkc1cv9tyqpxj2zlzwzwrl5vktofbv3d7gp54r' );
define( 'LOGGED_IN_KEY',    'c4rptfuigsewrqhs3milrnkls044jrlyaf0o7wo942dctfcombxlnwydad2j8zue' );
define( 'NONCE_KEY',        'osjbune64p3dxtuppoqu6okzwyac6hdcq7lzkucpgg8h89izc17i7gk4aov6pf4l' );
define( 'AUTH_SALT',        'aqzgzvwysdidfajwzu8uwpyr9imde3lucghtqwti01emimnf8f45qj0wtovvxvi1' );
define( 'SECURE_AUTH_SALT', 'ixijnkjxrrepyoazfumig496daqp33czjwixkxlo6uqqm5lgtsfrp5tqzlb5qafb' );
define( 'LOGGED_IN_SALT',   '4blk4qafiurignkyeohob3d9mnblrnvhm9o4om3aad0vimcejxjuoglxjq18y6ob' );
define( 'NONCE_SALT',       'keomzjd9fusqvmxvybzbbzsyylokfcbxcpih91j7t2hxqq0erkg5clkkya4fxgzs' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpn6_';
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