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
define( 'DB_NAME', 'alamgir' );

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
define( 'AUTH_KEY',         '6O@PB)+h)5|@}`?}^rl7+1?wcrn$:6M9|:|z(kksW=/ 6?r+O@OqclIXn(B:M(TC' );
define( 'SECURE_AUTH_KEY',  'm#6bg><LE9DM`dZF#K6|)BEfR-hY-VX6<SYfh`:]|a-je 3AS;,[hV+X;7hNB~=u' );
define( 'LOGGED_IN_KEY',    '~Vx3x-Nr,u.-/PC:-O[WPlo1O&3X_Bd)]e]k@`]OU}Iy8^SV-6*P] !agkpRBY55' );
define( 'NONCE_KEY',        'yG#xNgu~3{M(xMy~|PLjLd?|99$,G+1r=.D#kV6mR2.`)G@e1m~!l=q~J&Z!)58Q' );
define( 'AUTH_SALT',        '4M7[9[__V,NLwBT^~R8076UN{ xP`SpDR`@V9@[5IAAY4,Vzc4amK~%1PPcCBkFu' );
define( 'SECURE_AUTH_SALT', 'P-hrUlnf);;o.*UTKd7HR$MyOCWJjcE3tv`%UYR0_}Pa`];]#8=2-x]W:A|x$2W+' );
define( 'LOGGED_IN_SALT',   '%mP:_DE>1V!@KMU;*5c;(?.@2_uP8%w.PF2T=?m|0NA1q^b_7[I?wtyMd&!~LKL8' );
define( 'NONCE_SALT',       'dxPi^c72d]oyW*Neb_ E._Ts3+gHa=52iD0bZy^qM6TcgIU.ED[Np&O;Bk=9M^bv' );

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
