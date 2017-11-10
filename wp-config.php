<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '](yNsv1$O3o^+84l;-GrI88oXw}L-5NH*I)Qusj&^T;m!.ElC_;?,]t5W3Gf.^N+');
define('SECURE_AUTH_KEY',  '&/FKgwIp52ot*hP}`5d:Hes&bzG(3+/, FfJkgE08;A_2K50@q}y5]w0qv B) h-');
define('LOGGED_IN_KEY',    'wOX*sp?5D-p4%4oFs;&ouf5X2;ej+%Mb{@$>/szk2V%`-|`d<(@+Ukm22u>[IM-f');
define('NONCE_KEY',        '}_JTg|(t*xg:mhi4*v$]tl/xY}]fo3)0N:|}3C5SFY?UmDTT2+lLsqwdSD$CZI@?');
define('AUTH_SALT',        'PzhtKZiGQnmU,aQ*)Y.x;(-EMo$Wtl|!_O.-%R~V(yPGM|?9KLgtJB)9&Y/j*9JK');
define('SECURE_AUTH_SALT', 'eF|d3+&8[d0z.yn%|e<o8c>R|?u1/m0y%`}Mt#[})EUekzlI,?>+]ak_;~tH$gtT');
define('LOGGED_IN_SALT',   '$gp(l~5Ru]LCP[|<%0&QH^:1nj#|/ivr!HjPyPM<j56m`375)AzVofX0GOChVO8@');
define('NONCE_SALT',       '_U)yiBuarKw6H&.TN^|Ys,9}iF[-?c}RI`:U;~WZG5jU[es ?$}dU^( :bZd(+N0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
