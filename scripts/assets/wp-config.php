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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'vagrant');

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
define('AUTH_KEY',         'FgYE|~Iv@1c[7_-XNL(.PzPC0 6L&H&K!|VNhJ,`o$)cGyf6/5UI+6:/Bk|K$}Qe');
define('SECURE_AUTH_KEY',  '<b{~1rY+3pao2Q(V5E{>}R*~yu_D{[K{20VR~uGQn$*reAM1uGi5L!0Gg[VyPEgC');
define('LOGGED_IN_KEY',    '%E!6<[${RQm[p56//QzHdO XLrO9&|Z-:3cT:1(nuFEeaCc|)kFzm<@i~L-$.O f');
define('NONCE_KEY',        '~f%30c{Tw<xCcJcwCe+wfK#jFVmw~3CXPVq-k cp1rJS8RzEVaO3!n0N`)o$EPSn');
define('AUTH_SALT',        'zMoXOG=u+r7x6JnUQnvu65EUrh+GHVa-JmqVfX|^X5PICH5TWC.gmKeT4pb-pt:?');
define('SECURE_AUTH_SALT', 'OP*<N#rlmdtXea`>rJ#b18G*?3JV|;a#l-d)&<P:,OdBGp7?(=z% adCB{y&(6+0');
define('LOGGED_IN_SALT',   'Fm]1<L-zGy-5z>(.1bj+5p=,/sq0$2?>gR7628]SA!&ppuV^-X>%:/sK>Uu.t^3d');
define('NONCE_SALT',       '/#xT71Z>WT=x<g=Ql5.ZVSXbhH }rO+A42qK]}xcxg(KFYOHZJ(s3EF,9@!EkDT@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
