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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'Es.fEt=}6!Q2$Qj9bH1joB5U,=S=xKTZX~4B[mJ;Bt2q_93&Uy]`?Ga2:`J8C^q>' );
define( 'SECURE_AUTH_KEY',  'FizK5J~:-HxE1N+v=.lWCMM6VD;as;(cem<<rNU2iar{gB90`gJHj_o$VnCO{x_K' );
define( 'LOGGED_IN_KEY',    '.ry%#lpSIxoVm5s3DZCF1SHd&%P#!fJ~NS)aJl)zWHwkw]5BXLAC,bt{j)%)Mv3!' );
define( 'NONCE_KEY',        '@K0qCx]>a~p6N-2X[Ta<yZ}cSLpP3[T|ynY ~mXmmtNb7/~+r49~9=+{R,vq9mrM' );
define( 'AUTH_SALT',        'F!$QG^?XoC,[O~ElTn q0s1G <3]ONOEL9{D<Esk.0*P,A):-l)n>]( Zke[M|H[' );
define( 'SECURE_AUTH_SALT', '1<q$`d#/6E[X(J,Y$[-H`7zF!cz2/R}?QI0U$7Bat@_^||$jAnmyTYO/j^O;zH*t' );
define( 'LOGGED_IN_SALT',   '}4lN_Gv(r5,z&M>c=L]uUDA;= %^,XP[,:%n7i;dlcAIJt^rEc0<k>lmL6ahM_H_' );
define( 'NONCE_SALT',       '}8v*zH%X/kHVL64 wuS8-JgY^E4omS1I&@hp*h~lX:_1sV--I[YSpx/^y.}4mM<8' );

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
