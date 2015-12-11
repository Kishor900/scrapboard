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
define('AUTH_KEY',         'uJ(CJsP?[-X#r<6||]G(&mvu`CC!04(iV2X|r=j5Rq),$(rRq!$7.wz+Vk&NNjmy');
define('SECURE_AUTH_KEY',  'Y<|2Yn>yV;}uPc&Y?LP.<qe0V|?gEcvfs>rO-!1{x-=)z|.pEES-mAr!=LrL#l+|');
define('LOGGED_IN_KEY',    's%]e._`Mk{D`%Q^#_+eo2r;:! kh.caB-[$HZ^xISamgW0AiJN5DH4jwgx8QFR$%');
define('NONCE_KEY',        '0;niM24|r,12HDZ|,m?Am1f/WvL>b7NB:.(J)t/H>Ux|bRsx<>gr:P~5))[#*NdF');
define('AUTH_SALT',        'N8X*f,WFI &n3# 4.llF|!nVZ&VNtaLk1[ATaWR1-6;s|-5+FPuAm)?K2Q-=Wz87');
define('SECURE_AUTH_SALT', 'PQ<9oRND.E4F}~;EQS06}|(ZQwW2|. `zuO``7!rO|mbV*0-9_3z{},j#B?N6958');
define('LOGGED_IN_SALT',   ']iXC=tagia0jv__t%m:OXK=St:1sES(-0~gaDd6}v*e~$SM|p6U*HN+o^x^pgVI`');
define('NONCE_SALT',       '$AN[Y?8a{[/-%s{xUfdrg$_k>*r q*:|Yi5=`4ziu+i#xIs?1l)=:m{&xI+vdnT.');

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
