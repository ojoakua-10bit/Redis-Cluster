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
define('AUTH_KEY',         't+6Y|p8GeJa^vW|95R+s=+&B>&HfJfpJ8cq].A*sQm7Yn#v dDZmW1TGOMV]&|Gs');
define('SECURE_AUTH_KEY',  '?qIdM@a L>2!3@V[vCJ+-nn$g/5%7/(BV.m5V0M]npMxLU^[2L%2!v~x&8+rS{u^');
define('LOGGED_IN_KEY',    '<. -VQ:r&&mo/!;Uxt*S0_qcq?A.wvkCn4wg$mO.8lg!xI-X9=C$FgNxqb{*uI;w');
define('NONCE_KEY',        '7+w{bTN-H0TD/5+ZNcu5}j?pTRYux$|_y_wj5{l/^ZMrp:3uBANkY}tvi@_e--1!');
define('AUTH_SALT',        '!Ifd9+TjBSmbEiKFH|,Dv_8U9cMJMth[F#0^rGvg<Zf.SL/!_Us+:o$MuD?FeL}w');
define('SECURE_AUTH_SALT', '9gmXX-Ix;KVEair3s(.m1f{S;rqD&z8i/5OXJO!}58X]YG1rPX|v8AnVcg|8^M%S');
define('LOGGED_IN_SALT',   '*.F0ghc[}JcfA<]g :IHLO8dTJ{Y Y+A4#vp9vL-{B]uBf^D+QOw2i^u6+1K)0U)');
define('NONCE_SALT',       'tJ$+#WSCI2n#+3wz$0z.%$RH@lJ*q_V}bc_c4hkrl=_THYgLWo:HMs+$<gmQ`#f1');
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
