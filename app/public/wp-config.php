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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'd2PHgc567UWdbu+fSIlgZJftm7n2QSHia8ndg3ycOaZhEJbQfuDKfJO1Yioc+HIp2DzrDuRmCGK3e1C+XKAbWw==');
define('SECURE_AUTH_KEY',  'qFmfIm66K6caBlvou8S9XtpbJZ8I4UXva2gp3/xDoecXbGQ5/JQ7sOpp+hOBc7JVt1S1aWZb7FcWOD/bm3MARA==');
define('LOGGED_IN_KEY',    '/yjmYpWjE5B3NjeUcS9rut4su0DBm+Dti4EeyTmolf8Veg/xdI2pW4FtEj0XbO30dgjo12FQkSt+Y/tfG94BqQ==');
define('NONCE_KEY',        'p9/dBEbEVMtZKEXhcpx/LhdZB6ps6ryMrbB3Q6rVVRR7RiOv9l//CZmHqI6YqeHTprXIviPB72gRXUCTaPPNTg==');
define('AUTH_SALT',        'qKCNDoDoZKcI3Ew3XEYphNB9EbG4qpj86cYg9ymt2zIlRMQCHDXQABJCZTMXaVmfN5YvIKPTXaK6ynMo0A6PrQ==');
define('SECURE_AUTH_SALT', 'RafQrGXVxsz7e7JhDDvC45rMcWiY75sEVg6NtDQwCHljKamclnlk8ViL5ZTAQ5QWM9bscewxCMpwuS6uiemWeA==');
define('LOGGED_IN_SALT',   'zMR9SZoS/xOEV/HzhoTEhidBbo7lnRdpUVJt5pUxcVJ37lgSYrUIMuwZZJkD+NVSHWmLFX8jwTprSpBiwXWZgw==');
define('NONCE_SALT',       'pJVMKEgXnxr9SLc19ai5bnhjRnr1GSWeecrspobGNNx9EvRjKGqhz03YRH/S8O145aCGLC4LFvfnTYAfN3a8Aw==');

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
