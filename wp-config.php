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
define('DB_NAME', 'forumBD');

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
define('AUTH_KEY',         'Of!gt{(~G{7I2^fAm$/O?iEqU>8Fq$+,ML$Pz}Nnwqg$g<1;}P]M/^<q:YsS#Z%!');
define('SECURE_AUTH_KEY',  '}Ms-aMECQI9.T,v&|QTy*f]Mft[,(8uAg3*1ls(4Qsuv7I=KoV,u`7i0}G73Aveu');
define('LOGGED_IN_KEY',    '^cNzT!#r&vi%~6E`4RAWv?4%H7|DB6):79mXh&j` f5u+D1Sg^4-O;C5U8@[h{D;');
define('NONCE_KEY',        '.n[@-ce qfE:Rz~}Vkjd02Dj+>rQw?&wK8H|_/O86[tciEqy.Y_>;(!^uMFm2[n1');
define('AUTH_SALT',        ';6PSgu1u%#]Q*;.KtK!XN1Rn/VHrpNf&^oRu:D;$C^pXM%Cdall*+D&W8|=&Q<QS');
define('SECURE_AUTH_SALT', 'XA@;*K+0?kmtJ|!B_AiVV7kFpi4?4kGsDw%/ffX%$iMmfB!W.LcC%kWag(H%~Sq#');
define('LOGGED_IN_SALT',   '{C[c16KnGWig(haD>-O6By19:1cgnWO#!dB^s4H-Z&/R!PM4>C2X#U7%P<$}7,Cx');
define('NONCE_SALT',       'xVgHfC$)c<g4{6Ka)K.-VZpxsXP6MBX*.I)&`m77mO-:HE^Q+_9X*?opiue?aE93');

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
