<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if (isset($_SERVER["DATABASE_URL"])) {
 $db = parse_url($_SERVER["DATABASE_URL"]);
 define("DB_NAME", trim($db["path"],"/"));
 define("DB_USER", $db["user"]);
 define("DB_PASSWORD", $db["pass"]);
 define("DB_HOST", $db["host"]);
}
else {
 die("Your heroku DATABASE_URL does not appear to be correctly specified.");
}

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
define('AUTH_KEY',         'c[*Vk)N-t)V(MmcHc;e^+8/*95)|BBd+U@Ze@-gxkn/YR(}nxs@}Tca+|Hoyik7-');
define('SECURE_AUTH_KEY',  'uFT]?{#RWFIdVbk6O>6$/#zs1ry;7g6_^Yj|R6TqDX;u-/!tRw!L+G:o)3UAjRk&');
define('LOGGED_IN_KEY',    '-4#N5C&#/|N:/!>-6zlQqvB^ cpd}sbD3n0noR1G[dNx]FcUJv{(p%|Gt_<xB3fr');
define('NONCE_KEY',        'pv*(G<gd8n?=7[i>B 21_Mzp>lX?SMj,5{HnHp~[FX3Pae<z~L3<vTK{Lc9%5y)M');
define('AUTH_SALT',        'htj(R02M:dP}F#|jYI`Rx98f/%[+Q$).&hJ%@aZjL=z|pw>_K{{+o7+npvO934fK');
define('SECURE_AUTH_SALT', 'p!@us6H){~#1.k#bs+W^+Eby1QLPY4yJvP$)_hm9|e>+@TH@crfj1;[2v7J.jK^:');
define('LOGGED_IN_SALT',   '3hq7)O)!ioMb xo0k-w3(0>a8Awr7:ZN&Oy7%rdoVTn;2=G!Y F:a>:+kYI1Nmlw');
define('NONCE_SALT',       'I],vC^;Wy([TA59e[sE3TH|_=1D?Ecp$pcGNhKsO~k/_i.;t8RnG7PjA|Ye@FI(e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
/* Add some deployment-awareness, so links will work locally as well as in production:*/
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] );
