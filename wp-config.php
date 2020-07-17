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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ven-test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '|Qe(qOn9tNVo87H :!%HO  JP7.6qj8;U>{8ySM|uyNDQG7yqjhXxET)zY8o$L$;');
define('SECURE_AUTH_KEY',  'wKbJ}ANz+_`:@S6Q[Kk{jZtPL=~-!>ofy-P8E%r{~&=f:=Cm%7=B5`_k40OL9^RP');
define('LOGGED_IN_KEY',    ' kv1xmN_sZWHw}|CM3T@l#W,YTQD`Z>N[UABTNTp|0=l{1zQZ{@0/z$${!`p3A1-');
define('NONCE_KEY',        'jSMp~`m1Wn1LF%03]pBQD0<KRjP59X-^M)FyASfexJ85L,`Or8tUa+Knfc.jP<*D');
define('AUTH_SALT',        'f+zc}gHw.lFSbd|+>]v++H<8+K*OR^]R[<MV-ve6`O_%um{h)}r<Hgx68x[J=1!+');
define('SECURE_AUTH_SALT', 'N;V1M+mjP=^rm]jbsz[(KTA[)[6{=>1dv8|[GtKAdg{^Mq@iKuaL|r /k$h5j%ob');
define('LOGGED_IN_SALT',   'n8KTo$N+TWSz3c%3BhQ*fK6,:S|q./Km.-E{iE<h Ph~MPq@iJ+[~b]oMpK->@?b');
define('NONCE_SALT',       '(f[kbbyU(6~+k_PN%=mG4^=ath O4xMNZSH,,chEvp/GA;0UD`H-khkuC7?gkKl<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ven_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
