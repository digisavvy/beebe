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
define('DB_NAME', 'gittestDBmjarm');

/** MySQL database username */
define('DB_USER', 'gittestDBmjarm');

/** MySQL database password */
define('DB_PASSWORD', 'ArfRJA1uld');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'g^0RcYv>,QcUv^$>JbUu^$>IUQcyv<IUQnyu^BMI8Zkhs:85GdZs:84Ggso-4NJV');
define('SECURE_AUTH_KEY',  'jm<^2PIeXyq<*6IAXPRJgczs[!8JCZRog,!70NFcUg@v}|F8cUrj^},B4UNkcz},B');
define('LOGGED_IN_KEY',    'wDSdZs:85Ghso-5{<2Tfby.*Meam<2;Abmiu6HDPq+x.DPLe*]#2Seam#$}>3Ugc');
define('NONCE_KEY',        'f{BQMYur^3QMXy.^{MXU:OZVh_:[5SOh!:[5Vhdo[C8Kkws@81Cdvs@8JGRs@z|]6');
define('AUTH_SALT',        'sKZs!1Zo_8CRg-[RLau.26Lb+]9ix#AWl+*;DSm_Kat_1HEUj${Bq^3IXbq,APy<');
define('SECURE_AUTH_SALT', 'e;D3Bcnjv0B7Jr$y,F7Ijvr$EQMXy,^{MYUm<3Abnju<!:NZVh!:[4cokw0C8V');
define('LOGGED_IN_SALT',   '7Mnhso-5GCOo-s[KCNo-w!COKc@[|0RcZk|84Fgroz4FCNSeal#2;9ami-5HDOp+');
define('NONCE_SALT',       'k@}Ncn@}BRga+]9Oap~+1GWlx#5Ks~-#GSOlwt~GROZ-|_:OZVLmyu*AMITu<.;Pb');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
