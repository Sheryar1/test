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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3mm?|#T0XEo5.[:I&kBMK@VXV1l,y(V]uQZ.ykOyd5k4tz(+XyD>^}w5`UKCT6^g');
define('SECURE_AUTH_KEY',  ')A$)Uv`*kvi<ELsDs,G?;[L.G0E2HxI`qs|kn&IJI~uksR{^`7CV#qB&TI[vj.eL');
define('LOGGED_IN_KEY',    'a`?NPWs=TgTGB~VWzK!wf x}SW=(5UM>9>5nj/j,h?h]azo.`;*=&ubx2N_/LG!z');
define('NONCE_KEY',        'P3(nrNQ5$+SKO=m8E6Zt|XnMR+c)8k:O47Qrhqi?<[d}%Ii6$}iQr5;i{hF/2:Zh');
define('AUTH_SALT',        'z3Eo>sFu$D[tRZno3/|[ M3D%x4}*gx$+d;IZ~:^`k:#0h9`{,d]?T[=]HR3R^Vk');
define('SECURE_AUTH_SALT', 'I~MSU>$?_u@K2OAX5~w!gYyBJDBqs pYZ_Y6/dGGh);@+y]Ve.Ym5n11F+g$GO,_');
define('LOGGED_IN_SALT',   'Q5^*2X}S(vIUq4!1Ql%iks=+e;ikB;<HGama1X^#<a)tz,_Cc,sC.llw uQk53SP');
define('NONCE_SALT',       '#N}d7}Jrzo0<x/ecDV(E5m}P~0qig51gjY<-nqAL<;^N=YNS6fd.kz)JGGQxh:3Q');
define( 'WP_MEMORY_LIMIT', '96M' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
