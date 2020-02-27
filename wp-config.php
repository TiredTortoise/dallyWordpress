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
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'N4|XXtb$bWPogHVR)N7FvG3P#GD7l57:>YnUSnZK= EIChl3lg,hv(+ir%D;Xdyb' );
define( 'SECURE_AUTH_KEY',  'Td3OH/%p4V<)Yn4/sad!]a@utUhRf131||XgxT2:z28X3@g0_k1u]w}ZB=5p<{S,' );
define( 'LOGGED_IN_KEY',    '@$Z56IWZiNR8%u>(kMf(=SS{(V@robUSQ/s=mK4C;~d*6_M4a+No|5`1U}kNd7G]' );
define( 'NONCE_KEY',        'C^Dh:G-Q.vnS9[J^`8;SJoqX3Xa#jc`/porO0_,8HW,f:dS~uyP&(H&`z@>&)9L&' );
define( 'AUTH_SALT',        'v6(Ai#[fV<f|VI5D`bPl1kwb$I]KoD<pjRBSobz>k>ViEx3,Yexjo:M9.gP.kL~i' );
define( 'SECURE_AUTH_SALT', 'R{gza{+1j7B]Y jAa,C_U/rqMtmPAAp@:(Js{~$H!5XC{z>jJsuHM`=B#hj/9I.k' );
define( 'LOGGED_IN_SALT',   'EMK%/ x7Zbp|CLn2}/8j!NSoH.F:!RGLRdaaI]Mwj3bIgAES`:thI}tMhA(|]|>I' );
define( 'NONCE_SALT',       'B!Vuv-!C]x9p.>tY!Fh&Uow;)meyiIK@Yh:@SrqCUgWbJ)WEuFaa!S^W5}MclO<g' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dt_';

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
