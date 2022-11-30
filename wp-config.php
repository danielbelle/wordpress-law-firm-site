<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'law-firm' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(10Opu|sMxLY*e0,fyq9G8W&mnbOzI8BS*AeY<y}]PfnsT^k*?q?E}CVRgE_Kf&V' );
define( 'SECURE_AUTH_KEY',  'u$mT5oAf.T+XYH 1%,{Y;e^%:y,DsA YXK2d:2i7q?sYXhCROR?(3UNF*fhdn?-E' );
define( 'LOGGED_IN_KEY',    'U[FVbf(n(.kNR)TvRv:0XP=*s|%>6V/Cm=kn_3u$om|-mn<!A^>0y*o^i<5OK>2:' );
define( 'NONCE_KEY',        '2q~}nl}yHjL[PmLigf:#Zw~/K$[r!6_9Te$Y,B[t)^%}gJd&1=>]r#t+%h-Pwkd6' );
define( 'AUTH_SALT',        '.O1WfO!{OsG#X ayTx0{mBQ5z&5q#/>{F+6[aVd1~Hi;AUR8ut&-J4GW/%=a:|_<' );
define( 'SECURE_AUTH_SALT', 'v&=jM^E;Zg6m23C}HEd1uZp!rTv4pTN],z9%[fs]Gv^T:*jvPb3J/z-BqJ:Z2b=f' );
define( 'LOGGED_IN_SALT',   'f/M3H%l%oB+i/.Uhj#B{bW`<9jM~#[LuALYl.alVY== ^<F@; KS!*Rf}0b9)a*W' );
define( 'NONCE_SALT',       '%PlUbs3)!NM]!+m}Jzo@Jw^Zh)N?i:r1]IkGY4*EX+BA-f$P`u|e.Cmu6I6wR,/)' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
