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
define('DB_NAME', 'exotica_exoticaworks');

/** MySQL database username */
define('DB_USER', 'exotica_admin_ew');

/** MySQL database password */
define('DB_PASSWORD', '4qf2M8');

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
define('AUTH_KEY',         ')u8u%fHG+<x=6*(x0_C6#iZlT)Pxa5D+SsIX%b*qyX0aT.`mU3<hxA=yCeY|]l]m');
define('SECURE_AUTH_KEY',  '2+m07`{t.)].2-o4J ]qVUKY5h=F2,g--!i:eh-FJhf)^U9uo~Ys=hj{Gf-B?s%8');
define('LOGGED_IN_KEY',    ':UM(80!Y)lkomFc#w0|zj}h@osiZ(H[2r.BNOh[ry{!hvriVGogMG._I)L|cbK*&');
define('NONCE_KEY',        'w=b?G9wW`.%+#ok>sk]G[+oU+G>I]R2cLdH,lF4;:&R8}Ozl+MIRj{B@+]oyS&*@');
define('AUTH_SALT',        '8#8i.$uGMqCNqkSx?Ci=2d!DoL|NJ8t=gzT1gZY^&Wk:Hu-2#cB!l~0}|fa#!.E[');
define('SECURE_AUTH_SALT', '8`8Q9}Q;sSe~wL#*qjHE)%6-{bR?FLrrc-d=u++=Wn&VDpC5!ohF6(i;~`-k6>ap');
define('LOGGED_IN_SALT',   'yT|]fCj$Y6MzgZ<[izm {%v;+SR1vgWrB;f39T!IaS,bXC$|;K]8@VIO/%7nv_H`');
define('NONCE_SALT',       '8U%KKFnF;R<y-|GcF(,].QAs4=:,t&yN^b~}|Zd2}?W*2[FQ5y35mS3MQtC$jSV1');

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
