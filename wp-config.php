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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'zA+96[PO.Q8[eV6^=XjcI>F^Zm~E!{XJ+8UON&sHQ?0@O}Xer,Sl4caC`pufZS)}' );
define( 'SECURE_AUTH_KEY',  '1UclKxFDBtZC b|aSjIznymDy~Sx2!dWtCB9M3 QKaM@j:.-?nG~wvD!-+/dxM&A' );
define( 'LOGGED_IN_KEY',    'QqgtP[TokD_s{hYM,:_+L9^I1xI%trr/xt&m3jR)[zCVjfwz-X9uUq><_UiA3hgQ' );
define( 'NONCE_KEY',        '6&9YW=<]DZxe;O2{cV+!D/]wON<|Mr,g!Jt=Uy**nv`#0f{)(L7o#r<MgQvh<bY>' );
define( 'AUTH_SALT',        '(&)Kp14o$&#=*s1ZN^~C5P$0E|l ^fL|y6{WY`?Zm]9d@j3Y-}>2:4`Hsn|75kpk' );
define( 'SECURE_AUTH_SALT', 'gjz{l&_0[($zjO70H<[b:`(q8g{gC,(N7{9KrItlbtHlRs6xc{I{=z;cuuG&!<[v' );
define( 'LOGGED_IN_SALT',   'p=.4i-?Y&b`}tOoqk~.(t5xn.Wq-G%_;ka@gfBm} ;r.uP;:pJpJj;`HLc.!zzu>' );
define( 'NONCE_SALT',       '|&?p)&FVS~1bVx3+w(an0!`5XZW-NVEd3d)# IHvN<qxviwT$T966=Xig($bk<au' );

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
