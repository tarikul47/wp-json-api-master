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
define('AUTH_KEY',         'fTFPUpTi4SDynAFeiR58KaVrIda87bUCwdXYjlxWaOppLPX7tR21xGutv3nZR+x2WLTop0NaR5sEgDY+0qdnzA==');
define('SECURE_AUTH_KEY',  '+62De5ExXj7bUqZJ0Jj6ZdRX6C+HS0jCqd8OodIvkW/JoCaddQhcvsWp4qRlwXCgEGao1u01lfogJDrNa4PNDg==');
define('LOGGED_IN_KEY',    'eDlb2ITUBNM6G58bbUg6nxsCZmJao+EqEKaUF10MEvkwWxqcVtn46vAAHgbaPTgwWz/IZCP9ZbhlfxWWihJLbA==');
define('NONCE_KEY',        'oCpERgGVOvXpSf/vRKaI6SWUpBtKqykM/ZDURDw/Qg4uCTH+X+fFEDXONSiE21ccVR3q8M435Hkhl8+IoODLZQ==');
define('AUTH_SALT',        'Ug69tHYaxj3xdcfMxJxdEPka44pY0MeXREBzCqIAhGdPjHHZ7cIo6pJl+BjVTBXIAQRYkEN0AYWSMRdMATIGiQ==');
define('SECURE_AUTH_SALT', 'b31KxONpnAE6oeB2ckvmcRe8U3c/S80k8IzUWmi32EDdTRGDZVbDSFb8TP7+Z7RyNpoPLfgBUQzlGxSVFGQWKg==');
define('LOGGED_IN_SALT',   'E99kYMrW2VaHDvcqcMW60GANjmlO62lYmg6n//J39lstaC7vX/zIHGLVZInjkPHJNQbTigXcpkehqHwgGhRYMA==');
define('NONCE_SALT',       'Lq4QsIv8ioGXE0ppN+UGhnE0haOVIqCYhNdxHdv5C7iKGF91JsjREHnhSRcKHYGgQIeM6LKdonV+dETHazhVKw==');

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
