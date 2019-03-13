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
define('DB_NAME', 'clean_blog');

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
define('AUTH_KEY',         '^5U7 5Bb>)DJ/3})^=P=yFOmGG)E#KBYeTC<J,QB(mDC/60#znU=6UOKe:1D;1x]');
define('SECURE_AUTH_KEY',  '$O,=p?br&?V6_r.8?[qo|LEA^+:NsGK&0,H+yM|AhXc$f!V[/F~GR.xbqh]52urO');
define('LOGGED_IN_KEY',    'FCz(*>.S,khA/Bbl^q9BB]ULY`-zZ`*.ZW_V7aA!J4N Pz+[;H[xnkpm Jyje1+q');
define('NONCE_KEY',        '<ik$#F9C9@-J:k?+-],F|4r}]y],jQLRtG3i~&VCRhuJ;^FL<t0Dhd+X>zm?@|*#');
define('AUTH_SALT',        'B&;1/txC Pm`fYi3EU6Q1}ft`tc8(l6__QH#|-`72$h%? dk!LAo50XF0kC)(YD^');
define('SECURE_AUTH_SALT', 'X:*:8KuC^:dMF<kS2uGHcc!eP9FB<ch0zT]!br,[d#5dIY3z,F}=T4 cL+^yusb=');
define('LOGGED_IN_SALT',   'kd4|f]Dgi;ZKby?(FX w< <;`{eCa0!zy>+Q_xN:tzuAeBNxRIm(H7IO~YxA)zRo');
define('NONCE_SALT',       '6/}%^gTV09>_/=r$jtgp>[Lm^q[v1mm#bIW*X</1,-Dlk+jO]&<Nmt7HfPIS{-`W');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
