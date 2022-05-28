<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'auctionappdb');

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
define('AUTH_KEY',         'nya%)Ux{IR8S@=qj9*rR.A.X+(JT?*=Py+*y+>y*Yb!rJ:A,1tn.q>5?PC(NV-]h');
define('SECURE_AUTH_KEY',  'Adb G-#$-!2+f.].5QR2`KH>doSBHN~OC^-_8^0`If/Jci{p-~z+cbwuh8Qftz+d');
define('LOGGED_IN_KEY',    'X-m+5MYsmYn5fCNKrCk:Vqr4cT5P3A^yL471CE|A{5(2B=W<tqcpLWPv)%4R0_?H');
define('NONCE_KEY',        'J[|U,`4.g%7X:Vi10|,@dA6 Wf%BRh0qiu27MvRG~zH:*:QKfkpB-,Y<mc$!7imu');
define('AUTH_SALT',        '[@6Yg^=]ie?=}|>~OIU+a5a<b4]|WL5;-p[`/3QZ}~p`C[F`t{MvnJAp.{%J+YM,');
define('SECURE_AUTH_SALT', 'oA9jdY=h*84Q^nUCf}L<cO)e,dwq0DGmWiZ.Gqd[m88=v[o|nqh K]1i[Ub&-<08');
define('LOGGED_IN_SALT',   'P_`+<i9ze=L+w}mF4Wwzyv|GT+,HO(MY{T)Vo_VK`)jpaW(`ikl!1@<nnf.s-]F:');
define('NONCE_SALT',       '_FmjCB-r.5Ot@[K>!@6r1{r9/yhJv~&<|G8|IF% < [Y$[&q}f|gpA@&{P@-v>RF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'au_';

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
