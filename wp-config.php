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
define( 'AUTH_KEY',          '=OBC_o3`|`](N[^z1t!qPs`c))pO|lInMII`(.;eSj&z|~GwTOc0;K*z-=_[m<tJ' );
define( 'SECURE_AUTH_KEY',   'MQb2]2P6:jvPT@X2]{(?WQq`nFz#:i3%yF5R67?qQ8tg(R&=%;.zoWiEP:xS7T&e' );
define( 'LOGGED_IN_KEY',     'L;@w{XzC.TO``!VMI#nyGN~?H$Rj69Z+ui]_=|;mN@Ao &p@Y|+MB^Hp03k93H*L' );
define( 'NONCE_KEY',         'L7p6e4(0u,`T,h=Jt|Z%hlj`-=H_v/T2SD+(C@&ORSEvQ{voF/Xyj`0@cw{i.%g#' );
define( 'AUTH_SALT',         'TyXbaXNH=BnWv}atO]-5;KAV~MU(-Buxp%2^nI2V1/ Ons9>X)Pr/%35(/9;0fOG' );
define( 'SECURE_AUTH_SALT',  'AU!!I^z/[-R`/%ZqIzWqW3M2WoR%t[U${&/#CqvQE?7f1p-A?/H<YQIm.#um$<8J' );
define( 'LOGGED_IN_SALT',    ']8BRk9dj(i+;[d_G;X@#{ot#o#*Ny#M0[aT~MOx~DgRZ)B}j>(K2Pp{Mk;+m_{e&' );
define( 'NONCE_SALT',        'x*j#sMi0.s~<,Ka:CRkVO 0`W20lg)c 9^U1E;-lqqFkC^*(( /[mQ)saI; 3y,Y' );
define( 'WP_CACHE_KEY_SALT', 'kxZyzJ*7<ntii|=N>,TaYx_+fMaKyA!MF-@d8fgXz 9,,1UYq[b!{|fbPd$#w~,]' );


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
