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
define('AUTH_KEY',         '5gaqQLBbM6aby2S5BM5V0WokFcf+Q/ONJ4SwLjvailCQ6jWgKjkrM/wiQv+yJF6yNHweEnIimAwwnZVzrQuPJg==');
define('SECURE_AUTH_KEY',  'rymX0wa3OTjhny5oetCs0yowgPlR9AlCvqrt/c/aLTroWT/rGFRxJGWQv9HSLZPN+TJsBhxGifQYqVV4ioNaCg==');
define('LOGGED_IN_KEY',    'gPlgIyct9zyd/oRqk2JhtvS6wX2aJKFJfqQycA0hya2w7cuw5l/jcmPr182Sq1V5uSJRb14zEX9QI5M/dis04Q==');
define('NONCE_KEY',        'wCLnFSrOjhDkWpbtKbl8MItJsVBq5mvrsFYngcXL0qE6AhOd8upD9SSiqaBNo8Dn3OYvEZguY/35UQBPDWHqvw==');
define('AUTH_SALT',        'mnSQ9iaNBNIeOaMnwMiz7AcITkp/VtRC/k8LdSO+DQcu4viYIjXx/66r7Auj/uyUpg0iXev6YYed6tW+WbVCHQ==');
define('SECURE_AUTH_SALT', '+hWsZst0BFtux2NRMEy+QxluwJLOYODQkL0LSNmDRJ3sFzhiLOYTAGwAU1fRJlglj3meeNfZP7lj0LxNJjQhEQ==');
define('LOGGED_IN_SALT',   'sv7drBWoh3ulygklL57ThS15mSLRI0d/lMBJjByA9JMqoYzujrsvW9h/P6g77UaL5j8Eyuqd0N2lIQP2ZIG5Yg==');
define('NONCE_SALT',       'yDsv2j8HjULgIKzQosrWY2BYlEB5m1mWOgTcqtBXN1JHfJSOFa6MS/GHK3LFtkp29jqCn6ZyXB2fm90QOOtA5w==');

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
