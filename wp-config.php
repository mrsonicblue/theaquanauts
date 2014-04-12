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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '2Ra76HPAuV23RhAj');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Settings for individual development servers */
include_once(ABSPATH . 'user-settings.php');

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
define('AUTH_KEY',         'u*TmhC_77>NUNB3Dt!%Qx4=@-rxN&MCHV@;]:ARkrK;}ZjD,,$T>A2)iJ|p9_-CK');
define('SECURE_AUTH_KEY',  'Rd.D<&G!^#r~X;|])}b72sCUGVjC;N*qH7tgU$Aafov|,7b*^3TE+-L]pAg>=07x');
define('LOGGED_IN_KEY',    'Cy4xR5-+hEDIgW#v7Wh&EWG9-yay(jroyn`N>8!qT`%f=6pXB^RT~9kSaTYp{,-b');
define('NONCE_KEY',        '5wx5Df<[gwaa0;Z-Od6TCV#e2aA12JrR5BanGfez`hKb.T16H+{wqRY,2||@q_X|');
define('AUTH_SALT',        ')+U~S#pq32u<4D5 rZPuS4.-BOAjL2t`MvP5/Kag/5yW<K.[X)34g|-a@WQim|R`');
define('SECURE_AUTH_SALT', '5(qn}}TbHOW-mK|G(#fB?<z.C>jY(O8qttU+&wz>Zzy=*Z_f3s3XYd<K| *)3Xfs');
define('LOGGED_IN_SALT',   '6ASw.?B9%%c*dH2AxirkJhFx,7#?-+i%Y,(,O{L+>dRz$@9vpu]- >i8>!fS>KXb');
define('NONCE_SALT',       '}#<7H,SqyR|F$Rrq_n:|$=0[)H}h;>?1TeKY?|#Qo|idclk<lQ~X0y]@O`>#>g%.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

