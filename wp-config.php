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
define('DB_NAME', 'Okomo_Wordpress');

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
define('AUTH_KEY',         'N[/]ph:B?o#yv$pm/K)&n5IX8q>C[$,lBJ3*%xZ6F4tSAD!ZHh(,<130z&0U3|%]');
define('SECURE_AUTH_KEY',  'O3~XM4$U),NejG,_{UA}Y{2)_>?j<N2G10o78z7JeV8<0~NjjOJH.*Hs%~$4KoJ(');
define('LOGGED_IN_KEY',    'd-li8uq]LzlK|cU% x^i-Ac/{_FAnp(Cx~bSjD*/NDv!^phSz,O~=&9}C4MT,l?9');
define('NONCE_KEY',        '#O +UXcB/X3XH9RMP,.qW][#;+[r3q =;>/P;O7J0X5vhC[XE&Gc&Qq]>W+:,>qQ');
define('AUTH_SALT',        'rLFR:Upn?~x)%Qq+~03n*v0aQHCJRg81lqhUnhvRkyc35B>#O<NlA[GviHtr~ EF');
define('SECURE_AUTH_SALT', '89cV3oNd Nx-LV6h[f3uZK.c@?|C^x9|C;nKR>Kta4c$$C `CP Os)@L5~kyp3a`');
define('LOGGED_IN_SALT',   '=+wje,)?6pke[(iYgkgn1R(X`WbFF}*$U9Tyen|Gp~<.}`z)J,KjyVqzydLI=-B5');
define('NONCE_SALT',       '4 7xA>?1&5WMK0-IT~C|}?bP(Hs(U]=2[9q67/qi:bv7zn|%.ig{2)I, >m>PZH]');

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
