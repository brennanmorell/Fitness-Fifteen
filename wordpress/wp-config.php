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
define('DB_USER', 'brennanmorell');

/** MySQL database password */
define('DB_PASSWORD', 'Sn00pD0gg');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'R;UiJPqv&r<|<A$%XI8I[=9GD3fc][[P[3+&Uc6ZN+bD /TcvV).,zu**%HEh>Bu');
define('SECURE_AUTH_KEY',  '>={qf.lX0lb_o53;Bt/?QY{&h`v{>]OfLuhKME`mh&h5^:j5UXQVBsVQcL|hUjz:');
define('LOGGED_IN_KEY',    '1v5dycULf0IskgUycEC?S*GZQNVyO_#N.kR$V&j.sO3k}<*;r48->dYn0(aQ>qs0');
define('NONCE_KEY',        's)c%!IV<(=ltPa.il8EFSn&<6Rj/~==1BoSI`9t1*1Sp;yEFI^/66rc7;e@j>JH]');
define('AUTH_SALT',        't7I]F;%0W#Z.qU(M3;}H<b4(OwoNIjsGGT^EX1Rg=]?$3C3[Ec@ 6G@ofVL[>KcL');
define('SECURE_AUTH_SALT', 'cB)a4=,~?Tg}6:vF_MH=uBO$J4z$o?_XUf(!|oqHJf{&&Jd|cm@[`L~EEEZ]6*Uk');
define('LOGGED_IN_SALT',   ']JDC0y,vqA|.7j.(tyzuLN3SG^%%OmP/TJL|lJ5g!w^v7aP,rs^mA0ieY* i&D9h');
define('NONCE_SALT',       '}u/Xt0*A.[c;IlOP#ZlC2GA?H{,8xNRbZ3q!]5R&]zP33>yd1`N5ef@6z6};*^h|');

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

