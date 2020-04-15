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
define( 'DB_NAME', 'velikima_veelikimarket' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GuweVn1w0bZxxK1OE7h8ErApIciAQ693EK4uOdGCno7rmTh8aWeo4ZoGjFJDx7f5');
define('SECURE_AUTH_KEY',  'UnceyPs28j7e4o6DSMsAg5dkfKbbTnlXO00MYmn1JrsKoVIMx5I6Z5E2PqX59YKe');
define('LOGGED_IN_KEY',    'OPL7wM2zLZ3y0kz37abdqJ3IwhdHdd0P4HbNBQljv5yz33Bl1M0TbBoXuBUCEgdd');
define('NONCE_KEY',        'j0ob2okHofCfyTkTqBP3CzpDvqn5EjVMj7zLnTbOFZbyQhOXu3f6Q3dyKLsnhPKA');
define('AUTH_SALT',        '7qXrsW35r83qdjfG5se4g7rgWo5CMSHbbMQdw146c5UNukdzMMVnRMObRnyzdnfT');
define('SECURE_AUTH_SALT', 'FE0x7cfxH8GAfozXxAMUvuxw7JX6XpCMin1TPeuyZySfoI1LGkdmPyK2iG3A6M3q');
define('LOGGED_IN_SALT',   'dz5X11DrTq3sWRh77tqspMdRjvCTTIr4QqoJ6hGk2fXfoxBuZQaONVmGsHp7gGgL');
define('NONCE_SALT',       'CoQy1B5tcghQBtDT3KyVOh8bzzyB3wMts4OAVBtgWrEuehB5GSwt9NUQRgYj1sfn');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'velikima_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
