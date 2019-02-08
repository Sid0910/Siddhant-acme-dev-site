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
define('DB_NAME', 'sites');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '^DZDa^gP7! Ea2P<L?u&|hEu}`B]US{78W?/@gh4{K/-&f5`AyA2`&<CtKmjqfx)');
define('SECURE_AUTH_KEY',  ' ZfMo1AW5&JS<<{=lrg2XP>lt%2]_gZ ,NU]k;#O0g:X{dxw|s:~5_=2movLpC*E');
define('LOGGED_IN_KEY',    'aw~cQTt*?(dE<m/ ^cgDdCCVEt uK$ZZ&]A6},HqTzz<}?CN^qfOuqT2- XVg|wd');
define('NONCE_KEY',        'o~<kADvYx(~c<6ORm`8Zv, >J3N-I)R]Dz~l1lV(.6K+ ;::{Gr5pCZ2rPh&#oVc');
define('AUTH_SALT',        'aQ$UB~=j2;G3^J9T4-vM=[i+^RNI8FEe4f%@4~[-1Om7[$8a Ow#2]B@q7bSeMrw');
define('SECURE_AUTH_SALT', '#[/!CS2a>d_7Rv28T0t:@$8Thk=3vw@[~^qvL&O]P&ZJ57SG>1MHs8Zcz^#r%@w|');
define('LOGGED_IN_SALT',   '3R!XovJ>vuBKXx;82jcu6z;E2Pjpw.]u>-&R41?1{f|ovOg@]a!y.mr9*qSz/w]R');
define('NONCE_SALT',       '*-pOsyc;Zgs}(s?}WmZ;T?X6(JDUT?U6M!l.!$IHz0c8JIRid<5U.uQbR@S(u#/k');

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
