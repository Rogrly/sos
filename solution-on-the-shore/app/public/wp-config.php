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
define('AUTH_KEY',         '4KEkr5rGmgFH/Bn4Ri3CZ6VFwOifg90TUET22tn5kqNHNuZFZMaA1ldVjO7Qezun13QheqUbuk5eqgsAusvZyw==');
define('SECURE_AUTH_KEY',  'dfz9dr+sVxQ3HltEfzYQ5K8MP5HCb5t3v+TbHURKDYcHWW0e2S5rKik/to8YLfpis01iQ9iPyMRmkH/yq21VLQ==');
define('LOGGED_IN_KEY',    'Ul8O5O30t3mYR94x4KVVPYoufO1a50AnFHxdijUtoKLee6fDyP0t+A9hjpEd5u3hA8L1yWTmP09SSDrzJDgX+w==');
define('NONCE_KEY',        'Zz0RhsQKq7aF103ES/8yTc7UB17SDeCAPSB9E2xti5X4SjHFNu8sJhOBuqI8//xgxfB5gR77V1MqJ5nLvfQeqQ==');
define('AUTH_SALT',        'zKhc5xFpPcBmgHD/GJ573B+j85Us+Ve+Ia3PBLoCLdRw3qLboMOkDtqU+Ad84+RYq4bFAabDGUn8OVIKS+1dcw==');
define('SECURE_AUTH_SALT', 'TD6O9CShgRd3ddKiiGsG+DliD7plYew0wf7uN94Xrrw1wydcgzffr51EouioYFEca37oVi1E6AtRWOxqwbJdEg==');
define('LOGGED_IN_SALT',   'xjz7jBvUoEvU34KFrfiiSfh9DvSCduBvwv/BMNK7Bf2T5iLtcsZuBuDmWrrqGuOn6iakNPEhH1rQmQGrkEndvg==');
define('NONCE_SALT',       '36qlKMmzs56mEBcS7cCzqvvHNncdAJRohEi1ngFC428iZ2vcR8+XdUwMlQCOiWRIm5JJc6gDtmZCistQQHOhDQ==');

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
