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
define('DB_NAME', 'wordpress-films');

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
define('AUTH_KEY',         '}#gr+faBC)4#PzTrlpDT02/j13 |?S0@%t*/naV1d8$mlT)qm{TcA[A#3}7x8zn)');
define('SECURE_AUTH_KEY',  'Q}eJ39o{d3Rr68v;u8y!X/vx]xlc,SLh8}_SyydSx/D/AzJCQmyTpveGIYzBM@hs');
define('LOGGED_IN_KEY',    '-5l[&Aq;y7ya|4$GQy?@=J~>Jq1pSIBja]xDk n7<|Wz>=DId.p;^fxyfQ{ kpZM');
define('NONCE_KEY',        '*?6s_%E}^$&InWU.iAIo1X)1*D=W<Z$Xa>#N7wbGPVl~TOr_Q/)#XVg-q#Nxx#uH');
define('AUTH_SALT',        'w/Q}4@FLc[`p.iPl^N_THNz`[{*{Oon:~X:lg?3TTt%(V3HrPJMlx0e8|,R:6Hl[');
define('SECURE_AUTH_SALT', 'VUi-d/zUYr!Z) NT2%fnZ_3L6SMj,(q})jy9c%} Oe=VEF-wo`V =LRX5_?5G$1d');
define('LOGGED_IN_SALT',   'N+%$g#;5hcq7fJJ89Up/o8GP5znX-he}!|Ksa:{y_*2hb5[F nWkBSjKR&Uq`xn:');
define('NONCE_SALT',       '-~V`T3AJ$<cAc^w1`|)WMZClKIR@^<( (.mr~n$wXSX423@>0&kieldlnI4 _2*Y');

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
