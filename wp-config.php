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
define('DB_NAME', 'wp_portfolio');

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
define('AUTH_KEY',         '6L&=3^NI2LNBM}~]Qd#Qh2j|o|8p@Q1$?S}%:*a$l?>7$u =w,iu#eV8%zn>nbY~');
define('SECURE_AUTH_KEY',  'o?ilbG6)*>?#%c2BMM^Dj-zZ{w[5MO0N-h%z>b^1+Gik#-DV#.^(QgnzQ-gSb&WR');
define('LOGGED_IN_KEY',    'R=VQuobfz7OOyJY^J:}DbT{`XWuI/eA{t@6&iIT,3oj6^d/2;nc.FrC Cfpq;=-M');
define('NONCE_KEY',        'f_=?r!Ntv9:O#&`+0&:E{7q]&IK,SFZ`PNJdY;P%2A)L)=LY);1|0gh<Q@u|:}Yi');
define('AUTH_SALT',        '9;vqa?fH;@:s0X*X|q^:g^9twZ+|i?jhw.JaG{*6w4ZNBLJ{F9hulbiVD0{j^|nG');
define('SECURE_AUTH_SALT', 'RP0@Q82fDU&S_%-ob24d Wenghv>df9pGam?;KiyuA.s@+J_*~H3Ta{4WU_R1q&5');
define('LOGGED_IN_SALT',   'XijdgS?dDPLeT~8-Sfsy7ov>~Dsq[}jq@N!<Q9I?dN,SxQhm+9Ex9%/fO9Mf*|I}');
define('NONCE_SALT',       'KsHhF,P0wKlZ|IZV1#FAD@A5lIVW<87sil|T27gO}~+p}i:f.e&eI[G@js<HgY/L');

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
