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

define('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'feelingsurfdb');

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
define('AUTH_KEY',         '|@)0)wf-BlKybya^n[OBU16) Y)vJ_qZ-Yrqb:@#MT%<i:R2m/P3{.gF-d$50~1#');
define('SECURE_AUTH_KEY',  'v?A(q4T3n>>q+,1ReI$%P?1xEPgLZz0OZe2WgwCS(PsDP9r^Y+usIJw+Nq44`NJ{');
define('LOGGED_IN_KEY',    'x3757pHQVwZTzfpYRN/va&oVy1=<xAG1-`s^,nK-6#j( 8*77R9!?t$^4 |=`!54');
define('NONCE_KEY',        'u56rLe*D`5B~a$q43jA.^aP@GB%Xl<kJ*)guEKny-UJpqjy (z>F?/z=(v,G9=HT');
define('AUTH_SALT',        ']^bx*]Sf/=JiIA}sc/R*C<`;G&Qb!rVVZ;r+R7+/::O`8iXMJ|7?L;r*F!T)W{^s');
define('SECURE_AUTH_SALT', '<*mUySG=&q[F&T+da$bEncb7}ql/ccFFD/`T><RE=$!h>2%Y+|[U+ci!O.~a+O~U');
define('LOGGED_IN_SALT',   '%On)^xJ=_AgjaWmO&~SW_cT6&D.Gd-pD1T7eg#0q1r~Dc}cv`-</f!IbCh=2+w*`');
define('NONCE_SALT',       'lNOfK]2Xn|? |w<^a~|1]&/5~)E`53`o%walYE}Y~?gw&k>v[->`,`{#&k/+bB.#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fs_';

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
