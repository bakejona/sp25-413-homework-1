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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'u8i{N[29uLTDgW##{je Mc20 ]%-I&j-*)nM%h~I:cqmtDKe<8_oO>d4-,}YycH*' );
define( 'SECURE_AUTH_KEY',   'f#V3)tqFv7e{_k0:Z`%)s5=(.`!No!4Sw]MEuGv<~-1&s7]7eSgL{.>0^w%g{K_m' );
define( 'LOGGED_IN_KEY',     '1gC.Ba-)vak&J.H%;&?4{W[EgTNa=r>UPfHsjTHob{w$Q`D;|PV)L|O^wC40xS<(' );
define( 'NONCE_KEY',         'i?;FP-.zl7Gy`-ujErWvoQ1yT*|J(lVwOg(mX]:l~oPFt(TB3>xKgavbnS>`.h52' );
define( 'AUTH_SALT',         '(?#=UmJtFjQ=y@M|JD5`DhBvzz./1){{3Hqf+a.=tkBIQEFREqw-I:FE|UM>w^81' );
define( 'SECURE_AUTH_SALT',  '_a}6>H a}Mp7cw0.oMw5*[,G7FwCvhO=T>KrF$UAb,YFSlGP2%6}z~tVx`zAx`_`' );
define( 'LOGGED_IN_SALT',    'Ax0C/{m<$i8VJLr*ehhSLo.Un[.Ru0v3sM>}cUJH U<YUlAQJB# >zp9S$#W^1eU' );
define( 'NONCE_SALT',        '`qi=CE8n9FV_24e@N[Di%OKh8.D}pERzO9lLxvrl(*2WM<9I-WQ}p*}:|u!$! dq' );
define( 'WP_CACHE_KEY_SALT', 'yP7 VcNxqB/m#j?gVzpR!Y#>Pn:(*P3xR e:fcWGkz_i}8X|.-5N)r{uQb)_8Psn' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
