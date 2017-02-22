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
define('DB_USER', 'wpadmin');

/** MySQL database password */
define('DB_PASSWORD', 'wppass');

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
define('AUTH_KEY',         '7RHpPUQQkzo?;q^a|9MOW~($A<uZJ5WG?o(qz{8~~JOV5J).C.#2qw+z#~zCv-y:');
define('SECURE_AUTH_KEY',  'juE-WJKM^~a~EP# G`Fe04[yx`N=gJG{ORhIc}l|EY`T[nhWOZW/:N|JeHxFb[tD');
define('LOGGED_IN_KEY',    'l~Br#%]VYc^gSi#Ep{w#&0,>SmsW1@!p9VjV(bFeB:&pcq[`yRMN3><|JqO,{YC?');
define('NONCE_KEY',        'H5>=)]zq=g,$H4i{O.1-z^FfjhU!IfWU20z 3`lLwxNr7l}IvNv|zkNIyBVc*G;Z');
define('AUTH_SALT',        's`>m^I1JLDfPt_nz`edkrf0 RvTR66+qy)_oBJOLF]@p,8W1!B2&D#!>LO z^n!1');
define('SECURE_AUTH_SALT', 'b<gzN0eKr >pH]XTUHRwh:[U#x+ dea[q}1>AR]n| yy?rDQv%^[UN_+&si)}7uU');
define('LOGGED_IN_SALT',   '}+ ]P4L%#d>~z#Q[?*utf+MLjim4NWtn!%@U5hlu<?1z|%By2VHq-V3w`4?v9^83');
define('NONCE_SALT',       'Fh:OUWVLyyMFmDJmkw~t,9:]M|,9*80yL*Smo~zt:VlkORX+H;RpqsxT[g%(=ho^');

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
