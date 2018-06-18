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
define('DB_NAME', 'goodlab.local');

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
define('AUTH_KEY',         '08R7c~yp7FNi[qvQUN~Y%.4W@7VtqEe*8H X F1G1E#lh_}<r;Obar9NI+vh(W^K');
define('SECURE_AUTH_KEY',  '!VA{Bv)3#Lf?fYB7]8{CHvbYT[9zhH+!{RtHk2>&M!2VF?[ibBtTAcAGYn(|QWA%');
define('LOGGED_IN_KEY',    '[jXVnp[r)4@Oy?3`!vB$auu#p(|G:|[b|K({gfc[q[~CKb0ZMNjTrgR6HUV1=#NW');
define('NONCE_KEY',        ',;M4#%V0T27!Tp_XNK()r*Ro@0fk@+n^vnE*_-?_ :j|&uIAmvHz,R}^dc}CiWLk');
define('AUTH_SALT',        '4}A-eP7N!}iLkw?(.{y|HU{uMvY,q|oi]g|yg//w}lG,Zk)k8?TR%<m2Fv]A~0$|');
define('SECURE_AUTH_SALT', 'B;rc6+//JR@!InjXfKx/|cGVeoFyQTW`,zUURS#+|J-Th[)e.h~k76Kb BTcxo B');
define('LOGGED_IN_SALT',   '>K,xDz,MQTx=>f]HU#hJ|&j*v<yi?1YmcNba -:2pcB E`zuK7, ~``RE$=-*;9>');
define('NONCE_SALT',       'm1I ,QX >qbLPL<It, #s_ {C`0t[}9wFlr,vu avX^7LE*mE07yQnwq@nQyZ3fK');

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
