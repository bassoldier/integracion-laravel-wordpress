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
define( 'DB_NAME', 'wordpress' );

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

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'bs#RF!E9(uy:K?wI$GT;<){{e*%-,EM66:=U!Q}.5KHX39<hSHs(s63b7~,MF1Mx' );
define( 'SECURE_AUTH_KEY',   '@e}YX$$8qFO8$7zS%i|0>3iG#r5gX!F<V?gnF3D.-U~9U(<|h+K(VNt.4d%K}h8d' );
define( 'LOGGED_IN_KEY',     ']ph7k|nZnd%a^e+fA97 ;mUkAn9*[ }3 3{H5W N=#CJ +s0jAuZgK%mG~p+0XVR' );
define( 'NONCE_KEY',         '1~(u.s3P?~&;%.fh;Lrw*XUDylr*ccsq9+bIu3*n/mUEGpDX$W,dL.XO<mA0DQUG' );
define( 'AUTH_SALT',         ':+_LlvR77IRlY:s-@QV7RqU!b2^v]a=>a=x#yxI#B}nb|;(Z@50;C^ _o)/I&y9@' );
define( 'SECURE_AUTH_SALT',  '`g4_{2@S e*#AdrV3cJL(KD`ds!N,^dC<:P|f6Eyz^`<4qOu6>I:>? dfEP@shnk' );
define( 'LOGGED_IN_SALT',    '3:TEB!~^u>6/IrY(,YRj.tgq##OJ.O2JnJ3Z9![_=-D3gF1{+:t5?C^3Na1$P2 H' );
define( 'NONCE_SALT',        'fV:QED60JubCD}aMl!}J|p!* `ld7kFrOdL V]B-3JVlfL/`FsvA/1PP)5GBz/o&' );
define( 'WP_CACHE_KEY_SALT', ',v$jp+,Qwfy:p.$QYDfLJ?&,I6)rBF{YY3rm_(Yr61vmC3s`g}yd$w47VIySXKX7' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
