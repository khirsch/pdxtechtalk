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
define('DB_NAME', 'pdxtechtalk');

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
define('AUTH_KEY',         '][cf/FQKrP?fk*_c)P])q,r]Ur-gtag5#a_Qi$*m_e_n:4T9?*|UTnxO#o-R:FQ$');
define('SECURE_AUTH_KEY',  'I:-k$m$J=;+Av5ks9OR`0Y9d}Q#wUYzo+d+0gz-<YO4;#C;vjPp}+[N}=VDT9U&c');
define('LOGGED_IN_KEY',    ' Zsl4E=_X!)J[HY^`c*E<2{dHb]/6F8fNkZy4cGrXYZj>CDlx:d[y&:|,D3YJ;O[');
define('NONCE_KEY',        '/&,x~A@Z99Xd#?i*oR.5CxwrpNQ/D?Ze.K/&*27vD3~l,vONu:/[g}LE>@Qb_pga');
define('AUTH_SALT',        'EeK@[qsC.[m{2P?DB@Pb r,{!}dav7]6<gzpTm88^!}QRW%<YtyKvRVrP!wzx$2m');
define('SECURE_AUTH_SALT', '2$IoiFzn$,!l+AgJe -_%$|P9@tA`*Y0D~{6{AAkNN[2`1P+gJ:wJVz8mU4s/ %>');
define('LOGGED_IN_SALT',   'gFJ7B /wkZqf_>9sI-/W?h4OHiZ~Q^ )(4k?Q]6Pnl(3e,sSkU5.>W!=3iI*4Lg|');
define('NONCE_SALT',       '_wsu[<S1v&c#WIdK[8fMzBJL<TW&.iL}{:^=q`H`ozKLDMs+xA@xg1!tz`B|1eD}');

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
