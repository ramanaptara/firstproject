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
define('DB_NAME', 'las_wordpress');

/** MySQL database username */
define('DB_USER', 'las_user');

/** MySQL database password */
define('DB_PASSWORD', '2Be@las^6');

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
define('AUTH_KEY',         'Cg^R$n<7}5 S,tBEY8_<6n_lWcelrN`u_<*i}Uv@U5xSO:Nf5@2 {m)1>4#y*:HS');
define('SECURE_AUTH_KEY',  'OO[GW.=7QD(!59bStJl~lA<O?E1V},%`S7!&gxp/2>0k$nPiZg;=Yl=,RIl?%8pc');
define('LOGGED_IN_KEY',    'JZC$Z@0% _<{K5sQnWaKD{pk2X9K6r4XxZVQv>5{me6- +RA{xSg5QYr({g@vJqU');
define('NONCE_KEY',        'ogG =p8h*/vp/{?6J(O^oo6%NriMJF5Z6Zpw$SJKfM[y+*-)99CD]tx!8A3$v9z]');
define('AUTH_SALT',        'ru$ccj#Th}%UOOK&_[%n]o/xq9aNS:wH4*haFgqs:j`!$$X?5Ps_&OV<{e:w%JRV');
define('SECURE_AUTH_SALT', ';/[v.@FB1#>Rp.XKG,h/({f>`w`D+OSpQ1Wg|xmQ[EO+7!KCu-w~87ygo-c#F(L=');
define('LOGGED_IN_SALT',   '.OZ?k>Lpe0KgiOyJ>h/]9QnOO2N7W2A-O/2iD!r%z=m,M(4wE:i6pFXXJ#dE(uD&');
define('NONCE_SALT',       'WcCVEZy(J<XwQY(!T@yd]0!6l2]g(3M!{h/d&/ Ri<*iW>rH>n:8_4zNOb?D}/#^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'las_';

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
