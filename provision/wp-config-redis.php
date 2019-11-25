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
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpresspassword' );

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
define('AUTH_KEY',         'PP>x]G_*9%B5cIF}z[%v~+v4lvcG:@e*}_(fR+|_Boq%kH!?pTia<7-G1d~|~j@7');
define('SECURE_AUTH_KEY',  'dvWT(PQc ^AOEz+)0{&?=mt;kE{/n;pkK7:?-L*J!DCHVK8$uZ 2f|D>$pH`lUu+');
define('LOGGED_IN_KEY',    '-Fi)W<[<+,|gK:Q``Zn+iI0<q2Rr9k}`l@F&{RBIh[*a1t+zv pCmL|z1flgf-kE');
define('NONCE_KEY',        '*|5,0>XuG4y%2bkR++Ms&|6F|*BRy$<PE6||sz_p_Lg5U]BcIJ?9x-<Nl<<9|Ny>');
define('AUTH_SALT',        '+u}*S2n(@!Z|~uT)5db1@j%#6)%n%tX2AL`Uj YnQsf@//+`(N!rn3Dd#R<D9cGc');
define('SECURE_AUTH_SALT', '_1[@5/T.hUR`|6DnRb*Z!l=K&H<b-@L4k=BC%SyWhAnh.z_--.Y`CO1o(/28-5G}');
define('LOGGED_IN_SALT',   'Dy5jR:?Dwk}|zJPVFP;v/y{L9kSazC=~Ec7AK8Q)F7rt%Z:ty?@^hEtJ3X0rUS]R');
define('NONCE_SALT',       'v C&$7f=S{egbR7T-/U!7rXEkuS?SE6E|$(sU?>TwHyxsL-1/kw=WWQ>UE7[rNbr');
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


define( 'WP_REDIS_CLIENT', 'predis' );
define( 'WP_REDIS_HOST', '192.168.16.71' );
#define( 'WP_REDIS_SENTINEL', 'mymaster' );
#define( 'WP_REDIS_SERVERS', [
#    'tcp://192.168.16.71:6379',
#    'tcp://192.168.16.72:6379',
#    'tcp://192.168.16.73:6379',
#] );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
