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
define( 'DB_NAME', 'ciem_zamine3' );

/** MySQL database username */
define( 'DB_USER', 'ciem' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Masciem0107' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql.ciem-demo6.com' );

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
define( 'AUTH_KEY',         '?%9Tr/&q60UOKm<-c$5/;bK&}maU dQhZR {NJ;BH2Cay@Dc @=J0zG{F~cZOF-5' );
define( 'SECURE_AUTH_KEY',  '+QP^.Y-G)uJq@~VNgZ?2>7(C+y6VyIqFpLV!{5R:^x0jNg4h]Vw^D!mbh%3LEW-)' );
define( 'LOGGED_IN_KEY',    '{u:!m4NFk=NX)WSTrzH8?ZL7;Y?>[m&/D5qa<-)|QA27eC)*h~^%j*@P|uav3J4;' );
define( 'NONCE_KEY',        'yU,Z & +[buxhUWqi7Rjr r#%8Zvp bUFNfYZT=rA}<Alu$x~oLnH>>odd-9LE9H' );
define( 'AUTH_SALT',        '~Zt p^A{?5r!d79~*Lr#oI7xh5TylNxY5V9wBY/rGS0V-Hkz(l-%e|s-4%oHPd+q' );
define( 'SECURE_AUTH_SALT', 'w)6uCm=^2WE1(A1fdYyf%BECvBdghgdsZo<j(fU<yUuHEBS>cav~N`nX27c~[;rX' );
define( 'LOGGED_IN_SALT',   'tk@w%:w/TFnr6rj<;MgK 7]EFYFY?}yXB0J4rhkydfqg[_P:_@*[*#_J7.ixbHFl' );
define( 'NONCE_SALT',       'GrpEF9^hlc}@&%i-j,v`C!czA~ ]r)#>ep 4iN2jB|}@OvOUQ|<Sf/&}}b4<[1+-' );

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
