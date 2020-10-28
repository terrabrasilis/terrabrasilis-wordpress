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
define('DB_NAME', 'terrabrasilis_wordpress');

/** MySQL database username */
define('DB_USER', 'user');

/** MySQL database password */
define('DB_PASSWORD', 'passwd');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**Método direto de acesso aos plugins sem pricisar do serviço de FTP */
define('FS_METHOD', 'direct');

/** do not allow automatically updates */
define ('AUTOMATIC_UPDATER_DISABLED', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b4jFFxg!{A-W^,o(v&8BZ:Z)(=mgq+x%FkuYls8#+qf*kTeC4[Dt*p!5]>~:pej6');
define('SECURE_AUTH_KEY',  'QfZ),K1k! ERK>N@AqKK?+wL,1PDjld-[F,6ldakyiIYGb]oF8HTcy*/ K82)XbI');
define('LOGGED_IN_KEY',    '5J~yX)N-wWSaZ&i{%k1zyHNrG5NsQEk7M|KceP;4]@^DzPMtSC&., U2hQW2_&{f');
define('NONCE_KEY',        'jp(L^EC>ctE8?`ls.^kmWCh`k`**S&cmX,+J3@$[gTV/1_rVE I)vzRitYMNsVs:');
define('AUTH_SALT',        'cB-G[Vg.1P/N 4cy*pmzXPf91-^52[jgc)Ej.ax[5}q`f-CcNz!Dd!kWh$M|Ru&S');
define('SECURE_AUTH_SALT', '#D{[p+-j+@Y,(pTog@?UhC+.U8[.x3j&HZvaXVlHU7NXN$7_DRt_-kwIqCMdUs),');
define('LOGGED_IN_SALT',   ';SQViIDf7*j.[d6)>Z^h@MzkRR.<~#.vJ>c3$M9#$(62P^5Y$ry?IP%=t``XBZwH');
define('NONCE_SALT',       'T=4xWsFQ8cLpz-NIc:?EPrd6(~i80p7mPh[U&&*,zRIB)%h.oI |ii%_p<*V9QNa');

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
