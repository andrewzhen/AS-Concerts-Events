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

define('WP_HOME', 'http://asce.ucsd.edu/');
define('WP_SITEURL', 'http://asce.ucsd.edu/');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'asce');

/** MySQL database username */
define('DB_USER', 'asce');

/** MySQL database password */
define('DB_PASSWORD', 'Y5d8jtp8F%bE%ptz');

/** MySQL hostname */
define('DB_HOST', 'sa-cuba.ucsd.edu');

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
define('AUTH_KEY',         'WgCLxvNWihbD"wiG)"QS6MPp~zjYb~XjJ)r+p:q)!!4Sh9QJ+HB8xvk~AI5A_PZr');
define('SECURE_AUTH_KEY',  'fMrG1"/qSu@lVt?~?hN"k4ljq0f|aUMROV8J:W~D@Cy*Jvw!:zF!pkZD$LG0zC$_');
define('LOGGED_IN_KEY',    '/?h/X3$v9l;L8hIM)4^dyV+(~q#NH9:C0tDaPK7reZcN#^Hjv6FWNGJN?*(r%A$"');
define('NONCE_KEY',        'Vz$N:*!t)*l;GM0F;GR*ZhgRks+4pSTr1F`qo8y4X&(`cBBoeBXxJ3aR9wzM4uOL');
define('AUTH_SALT',        'Q|@sNGuwJWV|HiyNdHF5YMSTDxe2)?6BhtDX!#azsNri#!zq3@)3vn1KRF|cLP:6');
define('SECURE_AUTH_SALT', 'Fqr?"UDWgY2KF)Eh$oRatY5g"_(Js"ZfeLws&gtXA9K5J~zz9aGJ*jg#`hNA!e(;');
define('LOGGED_IN_SALT',   'ma3b"U62aMvqyv@g!9U19:xVX*7!h#^mOknAIiJCK"AaZcxsb3$k#i$e13&rOBve');
define('NONCE_SALT',       'vZ9bnRiV$|i5Y6)S5cb5$OKC)IS|MFvb5+#*2UhMK3?+a@)fMm50PcKAL~WGUSNO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ps4qey_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

// SMTP
define( 'SMTP_HOST', 'sa-mail.ucsd.edu' );  // A2 Hosting server name. For example, "a2ss10.a2hosting.com"
define( 'SMTP_AUTH', true );
define( 'SMTP_PORT', '465' );
define( 'SMTP_SECURE', 'ssl' );
define( 'SMTP_USERNAME', 'user@example.com' );  // Username for SMTP authentication
define( 'SMTP_PASSWORD', 'password' );          // Password for SMTP authentication
define( 'SMTP_FROM',     'user@example.com' );  // SMTP From address
define( 'SMTP_FROMNAME', 'Kelly Koe' );         // SMTP From name