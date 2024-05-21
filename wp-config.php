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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '****************' );

/** Database username */
define( 'DB_USER', '****************' );

/** Database password */
define( 'DB_PASSWORD', '**********' );

/** Database hostname */
define( 'DB_HOST', '********.mysql.tools' );

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
define( 'AUTH_KEY',         '#QnQes%,OB9@6~Z]uM`|15:<dR [#d;xbXmi&{w+6uuYy;J0O:}AE]OAinf{VWWX' );
define( 'SECURE_AUTH_KEY',  'A:&S{jfZlz<)SB)8_zw:$#-a8#%OH~h)Egm-,9nZ:<`.;%9FK}Hz!01qByp4g=s=' );
define( 'LOGGED_IN_KEY',    '<!sL&:oTK_Uz^/*0T!<WjoX9QXY~q7aZ,n^d3)J|NXaf fsWV*9g2oY038aueL?z' );
define( 'NONCE_KEY',        'x|gOZGwL.acm&_>[EvrB25PMK7V>/uCi$jMJrS:r/ZZwrYE8-F()wYc7>mSFCmk&' );
define( 'AUTH_SALT',        'H A$/~_#72#l~QYfUpWISB BhmdshhMK=W]_i^w#^AVu@~2=OuE_Y*Fq/NhKr>p9' );
define( 'SECURE_AUTH_SALT', 'G}q>Q*=-[y$?0fyOT wi7Jl_t5a$gW../4c/YA]2bhysETOgj=p2)824wO]>%2QI' );
define( 'LOGGED_IN_SALT',   '[c(54{yD%|-G+I`n7XfN=/yDj-, ZtOtZ*nYr v$g4ZZoqxIV(hYUJ9%!?I?(9DH' );
define( 'NONCE_SALT',       'KhO<!,0cY$u|W/C>f4X#_zla-O/W3#LB>z8!c=AW|*c9Dn%F0bM=8t;)]QKXc}yO' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
