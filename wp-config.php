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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '8848' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U^MQt=FmGpaE+Y6,+3y9Fg*_-;_AWg0u6IjAp6&7Ae=mGPQ)@5]_#jhiqcF9NE1D' );
define( 'SECURE_AUTH_KEY',  '77eJ/)>Fo/I#2oM#9l[a5b/>Z7oUGF88bTp3x1b&;Sky|8vQMdhB!@NNQITEf/C|' );
define( 'LOGGED_IN_KEY',    'Ov,kUV:;vPY&m-lT^UfHEk@dpc-Sr{_in}*!2_jB/3VahpT3Xj<zgL/9cI:uEy9N' );
define( 'NONCE_KEY',        '(S W{t`wHa$ F5I$E8|EiA0,BO`Jm%DDc ]lt?qP]~KeQ:nylS/o5`Y|k,)t~Rq;' );
define( 'AUTH_SALT',        'pD2Z^CD*<2LWKI.#SZsN=WWuqU{KQ21wzx7=5_-WCQ}wL+gksQa7#[o(BSxR2LY<' );
define( 'SECURE_AUTH_SALT', 'VIj^Z_fd~LW:CBG&Y-O^)MmJXF`Cd2~X3BK:C3Xd%f#%}6?nfTNk,3_;2>X~ErJK' );
define( 'LOGGED_IN_SALT',   'zfyM+Kc(CTn X!eK6AYy^J>;n-i*BS[)/i9juN,NwVp9Ap;)5ddUsVTlvxqy#>QF' );
define( 'NONCE_SALT',       '#uv,-jwdm+O0G~HD>ghww%.7Q(9mZ@XiVcnhv#@/fEcD)fdyqc*#>Sf-[-2WBNT1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
define(‘CONCATENATE_SCRIPTS’, false );
require_once( ABSPATH . 'wp-settings.php' );
//添加 FTP 信息，防止每次都提示输入
define('FTP_HOST', 'www.twsa.xin');
define('FTP_USER', 'twsa');
define('FTP_PASS', '5555');
////如果你的 FTP 可以使用 SSL 连接，把下面设置为 True
define('FTP_SSL', true);
define('FS_METHOD', "direct");
