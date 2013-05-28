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
define('DB_NAME', 'db164168_attract');

/** MySQL database username */
define('DB_USER', '1clk_wp_vkFL1cJ');

/** MySQL database password */
define('DB_PASSWORD', 'qUzocfjD');

/** MySQL hostname */
define('DB_HOST', $_ENV{DATABASE_SERVER});

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
define('AUTH_KEY', 'hztAdZkr NUT8c5lv Z3ZETwiM iFLQoMsK pKp6Ytmz');
define('SECURE_AUTH_KEY', 'gEVfVpYC ITYdr5Ux mylUNygj RPvzQxNZ hNjlwLvM');
define('LOGGED_IN_KEY', 'wNjIipUa RAAsjR85 GIPxzMsv mLZg6AVU gWMH46N6');
define('NONCE_KEY', 'Psfj8LQg 7pEsmDs1 17gLpCmI jGENFZb2 anKBCvfY');
define('AUTH_SALT', 'utvNUEDF EojwJIuN LYF58ouM nRyVkkDY 4mb8NuiI');
define('SECURE_AUTH_SALT', 'kD62Bq7q Uhj35DHl fX8BuGs6 uaHwKM2Y 7trbTd7o');
define('LOGGED_IN_SALT', 'Pgvv3H5J aVNH4EYR YPg5Flkt oQnnp1XE wfo3mcbz');
define('NONCE_SALT', 'dLnDNsrg wDcBC5WU S7bpxSwx WappaTFm 6dp682CU');

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
