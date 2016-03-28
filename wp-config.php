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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '-[qb>z-r-Aqrgg|u-m~kCkJR:8[V8=y}g-!#[e{&~vi*WW@JU._-GG00uwrk5mn+');
define('SECURE_AUTH_KEY',  '[*[7+K6PIeP3JOi kA*tY4>*{1Rh+pwSQ;!Gi}wr-k~v*0K}!KNYMR$4rGcI+%=&');
define('LOGGED_IN_KEY',    '!,=we1_5<pf;=]Tz+/+~USh8r*Pw(J8Fytz^vLg.j]ID(;2g18+|{t>)IVR&MmFb');
define('NONCE_KEY',        '~@?(=A;}|@+da~6+*T.:A`ke#1%8vt]GrxaGXz{tmN3a9oVOZp/*)M99duV>Di0<');
define('AUTH_SALT',        '?4bou{C.r-+Y[Fq{JE9:PvbKpw9m8kBMh++7~j@qZL<y+yxr*VV~=-X{rq$%1*X=');
define('SECURE_AUTH_SALT', 'xG`;x8$G1:_,knj-BM5Q+bLs7t+QVi(:~l+ c?95{cS ,#-21CmB-iB~k7vCH:{M');
define('LOGGED_IN_SALT',   'nk_Dk-L`ttJ6MW7<+7l{{~-(],hOtG/a~)~;h+QM+(mTi_eo9qY|FhDU3hlQ{*M?');
define('NONCE_SALT',       '6fN@6BWIN*@;f|k(bKXWs5X2#K+aHOfhevQqp?X nh9yc($g%OI=LRorE*C7BLeA');

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
