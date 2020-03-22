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
define( 'DB_NAME', 'WD_DATABASE' );

/** MySQL database username */
define( 'DB_USER', 'mike' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Key#0521' );

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
define( 'AUTH_KEY',         '-Bw$at~e$K;Vp fwNfm@/5z%1jsxpr0vZdjLt~~u1RwpVBBb![5v51=B,q()z#K?' );
define( 'SECURE_AUTH_KEY',  '9IFJa{j-RaXor%/U9t@UvB#XV`e92A#FK#VQ]a;_~LLnIH^Za 0MaVPg;z`Q`i[:' );
define( 'LOGGED_IN_KEY',    'DtL^1/^$wdDL(?*/vHcP5*mw[k+m](tLG9)l[}ls)ev,3HUi-R<m|q!vzSrDg]Ze' );
define( 'NONCE_KEY',        'SW@TN}bIgI|7Jk@NdkCQ36UZHA|w9o$Gztl [..<2:9H@AA:IIrgJ)rmf|klzMMd' );
define( 'AUTH_SALT',        '<fpc;a<%k/:SmGVV!f#`@VoTyl&8lt@)w1i6eD&-vNNJ=O8YTU~*JQa5j*p-mvi7' );
define( 'SECURE_AUTH_SALT', '*whOEz45|Tb#R!)x^kyEfXA}`ys(hbFWYm}.50Frje-INzWbF<B&URH/Zd$iOG>l' );
define( 'LOGGED_IN_SALT',   'sfOgxXq.dj}.DeW1M|^}(jMRBmP=o4hQD9?{ZB=B^)zf0cX_S[tVLa-3!VKu.;B,' );
define( 'NONCE_SALT',       '=h,3}g!L6R9/W:~XuuV#~^o,AHJat%h{[@u6ItV~kK`N3OXhmUQg-}N]tXM}UgdM' );

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
