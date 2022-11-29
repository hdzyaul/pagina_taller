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
define( 'DB_NAME', 'pagina_taller' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '`Zat;>.t) 1uC:g;`%_g*M%ToSiRyBW?2a90 c3DG|2yI+Ri=O&^.sU)@uT?0%gk' );
define( 'SECURE_AUTH_KEY',  '}_EfN@+wF{W_xEnC`#d2teZLvjpu:b!Gp>!Y)ezoXAEmri<xc-AiF4`7KixGv//=' );
define( 'LOGGED_IN_KEY',    '+=I{o<[yRXkh&?gVI(d,XBX|(zwlPu:o)~_p=Cz6HTXR@X$N~u6U5`D1>d`b/A[_' );
define( 'NONCE_KEY',        'PO;R3 wq,HFRVWesbrX#V$Mt_cT/$N$jeqBSB1GhNX(e~?1#cX[w$4>,]kA.):>H' );
define( 'AUTH_SALT',        '*C>-)q}Y0~qUb!03cZ9&TgcKP$6*Lw^/2Lm+TnFQB,:oe+EzZ^QE+BixphJ7>uhV' );
define( 'SECURE_AUTH_SALT', '/B#[gVj3=g9a!mOs Ww%cy*t2Zq]^Bs~B6;M-|(M&_yBKE-pk:Nb*ChJ6V.#M}Ti' );
define( 'LOGGED_IN_SALT',   'v*FJ|D0~Uq;ZT[QfhaSs.Y@&kpCf`-y)7t&]o>P5<XYGZ7w(@nD9S~XI#Kt5}-fm' );
define( 'NONCE_SALT',       'ji&7CVYS!<^v6G%z8v25j0=Z?Cq;{<t7g;e/DAQ4P9y8.|Hyj`6!k>,|lPVr;OC5' );

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
