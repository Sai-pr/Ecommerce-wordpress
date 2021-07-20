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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e00OU9yWAGImFsMq4G7Vz+OMCJygt7xZjGpXqW3IVrLTvpgYHAUmBpF5wH6+1LxqBcv9KDfh6jRFM4TXQBipnw==');
define('SECURE_AUTH_KEY',  'CT+SBIneury6h+kcyDQj653nCQcTHcN8daDb019uMQHxTrHmP+7i+Ye8jNW4IL1idDe2Y6D9JZaoPAPs3uSogg==');
define('LOGGED_IN_KEY',    'L7tttN0G6RvCqCcQenp5Z2GlhNxSSTdw8xriGhaHEC1mUDUnb1m+ogycJWC50F2OLGxSXiD1syGKN95ZYAbVsQ==');
define('NONCE_KEY',        '+lvw6pDmlouWZX0JCEGMLlbfnzV2gzLBrHvQQOYy6uGQf/V+fGqKAVJvygyFdaTUD2lSQxYkrlHSNXiAEDUS+w==');
define('AUTH_SALT',        'Fm1Whrusl3J0oLwtfLXjfL+raiDvBoyOh6cE35Q9A+D5Y2fmJyHa26Wlw6Kq8sgpUZEhOLW3EGW7Rw96xJn00g==');
define('SECURE_AUTH_SALT', 'wYwfyD3cALcUTXqo70SwgisznBp9UagRF3wIrkxI/qgfoFEmDdvV/D7qQSRSr8m1qS0XrrrHe9X/TY5GjYJG1w==');
define('LOGGED_IN_SALT',   'Pe43Uln4psCweKeYUhHMHE90IkOHvGvhEzkW1lUbTQgo41N40CtR6tQcMLPbOJfMoNpifXzYIQ2NvqdFG3a4lA==');
define('NONCE_SALT',       'AWXzKpO9IoNLrhqgEy7F3DusAF7ygGS7p1ZFjVI8FBkwj+5HLmi6pyzngoJVKchHrIpNfoSY765o/23/154Fbw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
