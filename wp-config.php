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
define('DB_NAME', 'scrapboard');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'lFBcd.+.-#eNL-RS6Oq$c,auyR.0<f]1[oji,(~lYU^~TI-kY|eD=d`Sh|Em%oCh');
define('SECURE_AUTH_KEY',  'HN>LEans<^4NH`}S$5OZS7D.:(1ov]lgi(+GIE~x Bus.0#:`S3--xiz<?|SV>~Q');
define('LOGGED_IN_KEY',    '}T^Lt?9Qe{+3PA!3& tXx0yJy-:HYcvkx(*Gu]|FTv!-|JkKEO>OlEH`,CM!+3y5');
define('NONCE_KEY',        'm-$wF[U>7wM1u4M%=!jG$l){eM&|2!bcSR}5,mg*?uN,+osY[x.pgmc}z5YU0Yd-');
define('AUTH_SALT',        'aY@=8iiqR7659:/N@-^E!>#Ef~^uE*m`,>BEKVNN&z*1VuX|o4K#kb)agMc$+3>V');
define('SECURE_AUTH_SALT', ';qo?9rXy yje?ODczX|l/>Nw&}uyqLMv-)jB#&lJ9=&$s[wyo2*#%]nrzU-r8E*_');
define('LOGGED_IN_SALT',   'qY:O6ur@O:gz:^5:!E%Z?zv5u!vD[`C.=n{IP0TCx7A?R>c-QHeyzyB--9Qrk])T');
define('NONCE_SALT',       '!aFx/H5p}qN.N,.Vn*qMg2R 3hq|SOr8tUN22Yje&FV;N3Sf8 KMz@B$k/W=qAIo');

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
