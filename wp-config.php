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
define( 'DB_NAME', 'madias' );

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
define( 'AUTH_KEY',         '=V$[$HJ|p9wOYNjN:~^#L~[f%9(*K/|(dq+1WNX3{3wvxD)];]n92iaru?Xg?~X_' );
define( 'SECURE_AUTH_KEY',  'ZVHu!Mj*00pXiC-fv>B-zi>=mR]yKU,yWV#J/&bZ_ibCjvH,n~CiXixeZ(W+rR?$' );
define( 'LOGGED_IN_KEY',    '^9jg*}<&1i-.UMujEi<ARGV!}R*-3tg6sxB7,IY?68u}B5}6G/%eLd0N!.D)LS[T' );
define( 'NONCE_KEY',        '0Vh )1#-9F9PPQ9o5*ED{H2@MnM>LNy(cUB;xY~WkI[gv/`F3>x~u},UMW)K1V_S' );
define( 'AUTH_SALT',        'hfr>T:GBdo/YZ2kZ(-WvEy7|B4Ue#vLdrsea~`_g7c?3@.G_S4cqYe%FQH |&po^' );
define( 'SECURE_AUTH_SALT', '/Cz/YF[BZd!G`I`A2M:#>16Rz{2i}B7=,h6)*%M$lzJx3eosSSlu+nC$Z,P+)~~_' );
define( 'LOGGED_IN_SALT',   '(F-_V5k9Gvf>lgG@!L#d$k}dz=9q271vUT6.)}pUD&^NII/PNAT013-6dt5!`e04' );
define( 'NONCE_SALT',       '+CCg;h.TQF*l}-1UVJ=g$vk=^=3m$rhc9JY4Sj{S4#i+VeJ2Pt5HuR4A?B&jb}Q,' );

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
define('WP_ENVIRONMENT_TYPE', 'local');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
