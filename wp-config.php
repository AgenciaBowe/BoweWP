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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '}1~XN,1(f=5dx|Tanb-I-?mS.bj9adKk%GUD0pc$ueZy4riN1ELXl*}^G?zQO&BN');
define('SECURE_AUTH_KEY',  'ih:~j&:R#~q(Ky1^2]m0Gs(N*^gEm?P9.)?E./xC uE]y>PjnP)UvR`7EX-m01pe');
define('LOGGED_IN_KEY',    'L-%|}e>e[!Q<6#>ifxElT]i{-!c0^JJ5{poG/U(o11&omwwd-OhQW,lcWJr0lKqi');
define('NONCE_KEY',        'x[bhR*/LqhRHsm&SP#s@F)[y:qB0E7(KMF-{xM,Q]R$a%K2S:>yyOJ ?0@p^$5T^');
define('AUTH_SALT',        'cUhW]i/`R@XWm?LBiJjcyTzSe4as0][:2lq0p/EkO|U47E6ggDB>c!OP&~5#gOSG');
define('SECURE_AUTH_SALT', '1AP7Y[lQ_I9ZCarndwE20MS6pscRK^J4T1!z$T:4|3!BUHaZn/*(fbVvCCsKI-,<');
define('LOGGED_IN_SALT',   '_hqn?_@6jU3c0_1!1P-Q04>c-{TWVJg5U2F|]y/5(>uGI~x|Ybblh1e&o<~Up^~Z');
define('NONCE_SALT',       'ms?iI`*BAL)Nfnsz/F9d&/s!C990mPE[9~M04 HVwr2d?HkjS&Q*5h~FHfZ}Kn,S');

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
