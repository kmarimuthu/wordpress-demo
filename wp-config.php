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
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress@123');

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
define('AUTH_KEY',         'I#pK6U.WLahws=Wg8mHTaC:#h?/m@jzy!?#2mjYW&9<0-$CD>9ux#MPSD<e}d(kh');
define('SECURE_AUTH_KEY',  'B,Ji0rb6[%EWe{~2nmL-5U&n6gQzn1Ac-[Jm/D@A#~}^E{2j2H_v3HS5cc[fx7X:');
define('LOGGED_IN_KEY',    'n2([!/B1u4-f?%Y{5+Vm3YY8Y/RAbtm)ys!H{lA=#R*^nkLRbi|xk@Gb,lY{@TMS');
define('NONCE_KEY',        '|mJnE,8L@&}hnq n8A`iUa_N%4iz:hA4_m0yJKD0?._OjtG6]>1!OWY-Uxxrt1UP');
define('AUTH_SALT',        '$I=Re(@HU)u!%(6[bN?Rs@]RIOm%%.m|[6MX([;X/bETM?bV3hb9)a;kfvt<<-5|');
define('SECURE_AUTH_SALT', '-;X=}qA4X~*cs#YN.Tr+b5T.gTHcxN/:QBB>v,76`4A)q |qhA:/A1R61v)Io#1H');
define('LOGGED_IN_SALT',   'oq[WU0o?z%2[R@Zo#9#I3T(umWtz^G|OU2S3iV)y2VP.OK!*A{+b*81|pqw]/@>}');
define('NONCE_SALT',       '|hQzg8MA%$c  5$nXuf(ZRcM1i<ojz8oN<O|!tU>I~K1K%mDe44JZSz]8. x^_MC');

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
