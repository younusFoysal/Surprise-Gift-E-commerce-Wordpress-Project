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
define( 'DB_NAME', '********' );

/** MySQL database username */
define( 'DB_USER', '********' );

/** MySQL database password */
define( 'DB_PASSWORD', '********' );

/** MySQL hostname */
define( 'DB_HOST', '********' );

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
define( 'AUTH_KEY',         'SX:z/h;[jh16<v&5xWh/DP2@ckmKQ]:[cw!+3ocNw$fT ]X$JA:3@Zm+ECH/z+r$' );
define( 'SECURE_AUTH_KEY',  '7l?q-UAX$<s!tB/WbQqjHBG#?D=hpo,_qzuIvQX_X4I^<HatJdgs%$x@PRxI~O^h' );
define( 'LOGGED_IN_KEY',    't@i[usUtiQiTOlPGl],~!FpRA*Cl{,|/x3`)2xso#+4neh6l,4;DjmCEGWFz|1V1' );
define( 'NONCE_KEY',        'bx&5SElgbi*t|BrkSKrSEI60Dm@Ox%_+<Kcxd;g1O)V^8diPuQG]$_5u^/:4^bqC' );
define( 'AUTH_SALT',        '5O8#$Sn@ms@E3a(1$gt9(e5yD^6?DOQLYuNUtoM?es@>=bsx:b6Ozq)?Rm7a,aV$' );
define( 'SECURE_AUTH_SALT', ')nC5k8)zoASr{fm9qtOrz27Y>9=H$xTD%jMAN+0]7r%cz$[KrNvA-qRjgr;:!`Ir' );
define( 'LOGGED_IN_SALT',   'DlXHF04Z|OX<~?6/.8*8!dRjSxzE#|dA-_/SLuCFc69,1!GE91==_Gj7q{9/m1%+' );
define( 'NONCE_SALT',       '>aqIsVkl{VBVg7F52:LY@s+6[%}8iaA3_q[LnFnz~yHHZlY!BCw~9(ql!^{!2xOY' );

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
