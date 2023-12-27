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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Mitrah@2023' );

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
define( 'AUTH_KEY',         'mS21mo8I JqB;C&/:1CqsQd(2WPh7xmLIB8-tlInf#4r1DROnt-+GMP:hMO;HQhh' );
define( 'SECURE_AUTH_KEY',  '3`ue(xZNqBE<kXVZV]mf)`{dKl~4qni/!k9pJ6vcZxjJPmX)9S?XWyxp^ZXcjxX0' );
define( 'LOGGED_IN_KEY',    '1cY@aD<XIR_r%z#RX:;{il>Qq:$R+hCEnv.G9-PWF/2EGvPs>7JTG!eGaR%S21CP' );
define( 'NONCE_KEY',        '`*tx)|9`1m9^un=AGzhx$m,V%vZnAQR/Eq+hqif6a+dST]]Tzt8%a_A5y6;vF*oT' );
define( 'AUTH_SALT',        'SOG}kqLZTBc5A.z]D@GadWQ}]r4r`$`l_P0.y!8=P}eFGh@jHS.tJ0^D%9>6!V)c' );
define( 'SECURE_AUTH_SALT', 'y+(x:w.6t&dk,nx:<3!Mw~ywua0h]03UQ<$17$BvgKB,GX]? AU4<q$PuXjbHnDB' );
define( 'LOGGED_IN_SALT',   'SoyP1nT[G|%qs=dZGmC@c:}|rQ#U/gz2SH,U!Thzn/| Cbctds:(<CT/}(LlGgH2' );
define( 'NONCE_SALT',       'ivf#]qHs=)Bdi~cx/3vbY2ib`9@:>D<4|PJJ6*k0{EmH1us M2psDY?.},f{v*w2' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
define('FS_METHOD', 'direct');
