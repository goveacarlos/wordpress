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
define( 'DB_USER', 'cgovea' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '{%!=7hovr]uWKtOA}<^Z]tt]/|U]fQ?i%.#&.A83j%U.%2;9(-MxK_`aN2JAX9QN' );
define( 'SECURE_AUTH_KEY',  '(W!GmcF6@9;zys1w&`YEPjJzK}C0m@,thTdm[8bvo[hN]wwC4WJq+wOsAub`/rT`' );
define( 'LOGGED_IN_KEY',    '~DS4<l)~;$*9@3 L.b@N$uWyIKB.kcnJk=U[uDF+ep6^U5yp$WSdJFr/_Ypi*rEV' );
define( 'NONCE_KEY',        'SZC$fB&zx0^_dHp7R7ms,onKW<;II%Y|xK3;;}z.D!d2 .of_LI7A0BOy`bOTM{+' );
define( 'AUTH_SALT',        'F/R!,NLatVk|#ctdLfs4kW[9i(SUDCI>vOaiP#_Gzq_vV1,vq^SVpo:Zwfiw#l}]' );
define( 'SECURE_AUTH_SALT', 'g2/}pph#_O`0:v9N}oe_Z9Qs[oYQxe8}WfQ-=wI/80R@*rm8wnnc4I~ Q6Bs]8iA' );
define( 'LOGGED_IN_SALT',   'SYl.<y+IJT+Q}VP}NcEtoo>`!a]?2ZjuQc5VeIv0)tXIfCxd?X8&I?`U31~[vEf:' );
define( 'NONCE_SALT',       '4+kW;*.,vP?)N>;hLI9x^d)7L,qN1h<ii&N]6-2z,g7Sn+7z@3w{- ;Y8K ./*E@' );

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
