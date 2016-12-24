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
define('DB_NAME', 'anrgapaa');

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
define('AUTH_KEY',         'GVPg6$qS uC}U5wQwo@h)V_#V`1ZsSq-9]2M#U{%MM<3y%R+G%@b.Lw4qFU9w:2?');
define('SECURE_AUTH_KEY',  '4S}P6G#HpbD+RqOCHk7PT4j@^P20-O#F-(REW4d6]0fDomhZzSBXr>#33RznC+S{');
define('LOGGED_IN_KEY',    'vRnaSjMTcH($&KOC~3a JH~Um`YC>uR-v@qZ389QA|OR_}W%?%~tTDj|sk4JgT0m');
define('NONCE_KEY',        'b60fb7(lRO{.>#7%xPI?uyy;zd0QFvLCxT] olA0(O#6NNK5K`f{U9B/Z0E?#[5u');
define('AUTH_SALT',        'TCTe:8)4o?]Zh>p2?[#]o|&7Xy7%uw<Y>cKNHpE]Av1xW5Vm&MX2TK=bTjq*Ur6}');
define('SECURE_AUTH_SALT', 'bh?BCuly,?pmP#=*?uiSj^V41+$0J],6LV I-vYe96cMt&Q4v;1R+ABB)xOq|-4e');
define('LOGGED_IN_SALT',   '3*N@mUTaA7+rba :%*6nOd-:D/M6}:AX->a]~emQ8?O}hUc)c?pfGz:G5e]7f80(');
define('NONCE_SALT',       'PjQYVk{-B5cM}+)e^*&J~2$-*q5XOu^bC?Dur#OSf<L#t:)kBYubDwvy5u>d#(aH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'paa_';

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
