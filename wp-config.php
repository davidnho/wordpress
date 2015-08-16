<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
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
define('AUTH_KEY',         '3gi-xj`gUb}Tqjn|}D04}G~Us=oHOtBBqy6$X-p,Y9ooFPotynDKQ-GM = ~mq[Q');
define('SECURE_AUTH_KEY',  'hs#|}NvpwBck)2.mU3un~_zq$ 0|JOa/N;2I$wWF/-1qLrizd3//zB7F1jlik2aH');
define('LOGGED_IN_KEY',    '_:2{.V.UNLt|}{#l@C&2*j`YZ+K/ssG&-z9vG7+D(;-lr,(m%dm<E$z=ku#R,#+{');
define('NONCE_KEY',        '9`MplzIV:?6c-{A%kq1&SWX{1=Bk6.A|H?]p;*_G 0mu]2,D=x|dagfSX%GZ_tCC');
define('AUTH_SALT',        'v3q[$,adF3Y1/X)6;qq@<p;6HECaY=0YJ^WhDr+sdcP.5g$c`,Ea-_yCjowOh=#j');
define('SECURE_AUTH_SALT', 'B$6R*h39*[|o6C { lt4-{XMd0ES9?1 b=yySsWT~sXy$GP@w[`n|qtSv;YaUl|T');
define('LOGGED_IN_SALT',   'd(y2Ryf;P53O[o?Lr8pRAU~On5V3<{_QU*3bU@v,dx8v1v]/OBG*ECq`,+<TobWI');
define('NONCE_SALT',       '[:rP^:^1b*t`KUU/Sk|[0D#OPlMh<#+pPa4V;=5L`Z|QXx*IDeHlaR:Ed-*~$-y<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
