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
define( 'DB_NAME', 'targetwebtest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ')X9>*&@yq.ZrD]T:#5r;<U=LecS+UxQw@v4D`,_YJLz&9Znq8ppP1##Gw}(`{?RZ' );
define( 'SECURE_AUTH_KEY',  'lhAsMoMp~COmCw/RM+%RN~?Mmq)KUCL3R[Ad(dz;=QMSSpSm3CsEdsD{^l/f-QNt' );
define( 'LOGGED_IN_KEY',    '=,]{wB~vJJC@QAJ-0yo4>gSK:FnU{iW28Yd.kx1zSr[T3FWgq2P%*cBOzCy<A0C`' );
define( 'NONCE_KEY',        'R#{Fdp%`phv/in!*WID`{;Jx8Y-YA:RjN11[ONa5~]mMfErIW]ci a&3H754]}bA' );
define( 'AUTH_SALT',        'eud/:]%%R1jRjDz^IF/VQTMq%o1Wi6Q)N0f~W<yEX<AD#R2F;r]fIo usw$z-^=+' );
define( 'SECURE_AUTH_SALT', '+wl+!CMU:LR&[@[!1cEOj5z!!dakFi`q-O+32r9l_8pp7,dDB[.A0NC;t~N@G1{.' );
define( 'LOGGED_IN_SALT',   'TSAh1gueE~VBPmXLZ`&D>7X{j4/dd,y}~FaGI{Fm.dTYiLMoe8SoU*Y,EP]jd!#j' );
define( 'NONCE_SALT',       'jRy)q9ujY;IPPsR~n%X;CEWc`-Q(kdK)/W1{AXIg5IYQ{DBPVQbA{$_D;Q;c9=4G' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpz2ev1_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
