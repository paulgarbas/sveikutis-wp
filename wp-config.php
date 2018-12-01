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
define('DB_NAME', 'sveikutis');

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
define('AUTH_KEY',         '4U-^]U5%{wO4Ry]-+)Wmt>6qn19lb{-Q~!R{[BIB0NrgoeCHH]wt[zhR-!0xYR)S');
define('SECURE_AUTH_KEY',  '7hz2&+EWCCH?UGuY`Ya@!HDIX8)8.n,_7uB~2l~)LG-p3 Q{ 5)xLH^q(<`C@,uZ');
define('LOGGED_IN_KEY',    '<~Gb%q_O.k[!Z1dPISB74^gkU@E5,b:$`i>[,L?gRk{bz _Zo~CNB+! A}[|zD?m');
define('NONCE_KEY',        '.;#e.[JZy[J;zzCZQ=!wm:13S-58#-e~JjD]YQ:n|r /,NtQF+iR1rn7Y?4ulXvL');
define('AUTH_SALT',        'pAm/MDN;@3tqO hkt<LG2(GtNM1 eAOMiV;|5}s}Od4drnN;/MtO.uRZB =MTz|u');
define('SECURE_AUTH_SALT', 'a>EcCl[MW($b/p-/K/)`Y)?`74_f)>>&})%gDBHkY7h9PyypLn$.pVh0_^h2gQeF');
define('LOGGED_IN_SALT',   'n9=I#azEtG@o/lxYMyRiT.]_wOLb jMS%A hnw9$N2D-)[Cpln,6):AphF-0~IG)');
define('NONCE_SALT',       '~_Rc1*8MNL0]b.V~-ttUr&P{0a_2iw`>gV?Ta)R<K7gypwu~/5qUHHH!XE/S }&T');

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
