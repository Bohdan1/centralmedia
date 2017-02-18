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


/** Contact Form 7 Removing BR tags */
define("WPCF7_AUTOP",false);


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'centralmedia');

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
define('AUTH_KEY',         'N3UBci3LP9POC3&S^?fdBuNe6)LCQ+X0zfVX`emNT;kTuAk|Ayw`v2**I$~(pye8');
define('SECURE_AUTH_KEY',  'y!%uSQoqlP7hVkb)E%.;%AGA2([e45E9YHMMU<pI|C{U1VMM^Sf~:8UlI{~w}PPi');
define('LOGGED_IN_KEY',    'f]SX.E<wTytGV|z7cS(H|j!gh?EOt2g1z;8sB5/l/el]K?53_3p+z$Di}l3xV7][');
define('NONCE_KEY',        '#.QOxU~YOPt[ WccunlEHc*.N1A _ Wa%_u`]2u0nV%cX!a[@3u+B|-S.|H/H|=V');
define('AUTH_SALT',        'UH{5L~{TO3*}(x0Ev~U+kfH*q${`hKt^M:YZw- wY.%L>f[:QDnAjD]*E)wOMJV+');
define('SECURE_AUTH_SALT', '#=uuBm{$2>(^~qAxbGbB--9s|uUy~A^a8#K!pQ8cB`+*{xl4U9kB/g!zMaz.z{1=');
define('LOGGED_IN_SALT',   '@J 1Z0@5r,SrB~(( ]BK9_g;e,)x7,LDy-{u+3uNYNtDalp]*niK?5#)v>!rnfvQ');
define('NONCE_SALT',       'AWTkPU|!@|5=P.%8pgb7VnTvMc(hHbT !{>*P(:g$Jb)jm,JzzqkuI_`$:aB7`>Z');

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
