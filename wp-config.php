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
define( 'DB_NAME', 'syl_db' );

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
define( 'AUTH_KEY',         '*h_;0FtV3bW:9y#+gLcOPv{aqJ{K{z{^.F7b.&$|}Wr*q0dy5?,4C&<=dn|-6. L' );
define( 'SECURE_AUTH_KEY',  '`J@ ySueiDCtFGnE}QGlmY!_xcgY(U=&ifIl|hYhwd9~J(0?,F0}%#A>Ae^1mTgG' );
define( 'LOGGED_IN_KEY',    'al%D0d_8BP#jNF-BzRrHo-b[tpFObvdI*Pq3-d2{i@Gfmq(9`2>0PZ/Iv}*I$hBN' );
define( 'NONCE_KEY',        'YbZ?zCt%g cVl]jyBMSins_w;aOV,|N.,:r=&/lFaVGYmP-a/+(n|3Al7/vdny; ' );
define( 'AUTH_SALT',        'oMu5gp*73&ny0bMS(w[pGl=aRZUf5/^g%Oz*nb{oSjK-XS*nI.,xJxh}?}M`~g>J' );
define( 'SECURE_AUTH_SALT', 'h/~ruwKC?p1_FC`9~NBpY2PQ[lI4{;X~|}2Cnis8R.wS30`pzTbqs8ngGVeb<WE%' );
define( 'LOGGED_IN_SALT',   '&-|l7M%NsgqOJ14[Sc`8s(lh&dk{?o>FU5{y8bF+gzET8~0E.$GK! ;m>*V|xF2F' );
define( 'NONCE_SALT',       'HHK}<qM1}q{!ZWcENnPEw-.0.qnIvS3>`ETd>W}1v~OM,>o-wOh;oG~ymg>-xQ%Y' );

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
