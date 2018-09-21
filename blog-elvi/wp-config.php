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
define('DB_NAME', 'blog-elvi');

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
define('AUTH_KEY',         ',#2lU`-D-z0~X}DylPme}#_eDF|(5Wmlaaml?TIgePuhRds/kNAtpoDx8 Lwdh8`');
define('SECURE_AUTH_KEY',  'UKen= Q,71HLO~gi^?ouNdLE2CZDMO Nw0,=*4pD.M-Sr4Yl1m~J8@L9+9iZ</ZO');
define('LOGGED_IN_KEY',    'H2X}i4w^493yL8/--.<Fp##^ /F,B#@VhC^f:qIPxM3GN8LdF+T+TiK1j3DAWNQg');
define('NONCE_KEY',        'h[Lg7j>uQw6 {_|f:5@|5w$YX(v#,%~!B#AB.ojX7i)1#)0t.iL=.Q=Mb#M^}UQ9');
define('AUTH_SALT',        '}[r`t60xHI^(e)=ijf3#~B4cKmGm7H;78{vvu.dQTog4cpadqf.,Hd0{70J4j<u*');
define('SECURE_AUTH_SALT', 'oZMx}fAxIhe>*0eK&*L8$#cd){292jj$tlr>(XJVOeh(KA{J+&1f$z1q6Yu75Y[2');
define('LOGGED_IN_SALT',   '!1]nNyhaOSg..j@ps4P-P=XBKDy3oX|4At|y!aQqU&=4IS:C:{BO`xG|q{b/=uLw');
define('NONCE_SALT',       '}Qv4p9DFplk&(uF4#~c?{J<z~HFi*>D<^f7M)e9ua73q*:T0wNMJoqEpm^t5Z7UO');

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
set_time_limit(10240);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
