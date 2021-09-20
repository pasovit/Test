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
define( 'DB_NAME', 'testDBeoau9');

/** MySQL database username */
define( 'DB_USER', 'testDBeoau9');

/** MySQL database password */
define( 'DB_PASSWORD', 'xPgd7SDmhQ');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

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
define( 'AUTH_KEY', 'LqBUgrUjv^}o@}8@}7JUEQbjr$Xfry,{3}3F^>3BIUcls~[5G|4GRd5GSdpSdp-[s');
define( 'SECURE_AUTH_KEY', 'Ns9LWitSep*]it*;A*]6HPaKWht~dp~]5t~;9H#1DOa>UfEQy,Yfrz,}3y^}3BMA');
define( 'LOGGED_IN_KEY', 'i*mx.]6D_]6DLWe6HPXiqLWemx*]r$,7F,{7EMYf3JUgvUfr$>y.AMT3AITfmAM');
define( 'NONCE_KEY', '9T2DLWepxZls~#1s-|:9GO#:9HSe9GSaht-ELTfmu*biu+<6u$<7E.{6EMXfLTe');
define( 'AUTH_SALT', 'NkFQYkr@,OWhpww~[1Cw_]1DKS1DKWdlRZhs-!:oz!:4C-!:5GOZ4COVhox*]6ELX');
define( 'SECURE_AUTH_SALT', '$BM7IQbjuPbjq$<bnu$>7y,{7EMX8gszYgoz!}gsz!:4G!}4GNVBJQckr@Yjrz');
define( 'LOGGED_IN_SALT', 'LeuITbmu^<mu*<A.]6DPWeDLSemx*Xemx*{mt*<2AHnz^}3BBIUcjBJQckrQYjrz');
define( 'NONCE_SALT', '[COx*]2DLT29LSemELTemu*ait+<;-_;5DOW1DKSdltLSelx*elt~#;9EQXfr$,fq');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
