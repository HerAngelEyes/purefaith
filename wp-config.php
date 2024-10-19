<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bdpnfate_WP5AJ');

/** Database username */
define('DB_USER', 'bdpnfate_WP5AJ');

/** Database password */
define('DB_PASSWORD', 's.f*y4uRU&1FgJI^N');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '97c1dad7e1d479e1e76a462d8780ba3397d4dfd51428d9ff0154e2205ac3b903');
define('SECURE_AUTH_KEY', '02146ab3afd24233c16844e962dc1e7509bfe48f3089b31ae77e30c7c44a6225');
define('LOGGED_IN_KEY', '13cfbee6d517fd1f34791a1879f1e42b9d1c9dce6be10745aac9e58e10d3c507');
define('NONCE_KEY', '9bb558db6688ab932764d25ea490b2af693f1d19aa7bae8a8ef42a5d9eaca480');
define('AUTH_SALT', 'b6c32874f20dc9b6f926cf8bfa9e64ae5465de8b2dc2b0e44d115df474831221');
define('SECURE_AUTH_SALT', '899e0533cb18772aad27a35f970baff865b6de899bc8c53bd7bfdd4060844cb0');
define('LOGGED_IN_SALT', 'b6ea4b010d0a311f746fe055262e2e6bc4fef9b491bb462a73e25f88cf9d77bb');
define('NONCE_SALT', '64b8a24a8e4bd244a2b8d22c49cf41ab8923c0703ca1845ebc0b602c9f34ddce');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Ao3_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
// Enable WP_DEBUG mode
define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Disable display of errors and warnings on the frontend
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
