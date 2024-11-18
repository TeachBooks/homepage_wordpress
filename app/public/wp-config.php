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
define( 'AUTH_KEY',          '~=aYKr;vg(:#iCp<Z+bmrErwbn}E!Q<)1;_F`ydz>$pMUtZkd)}rmN0lH2lC@!3x' );
define( 'SECURE_AUTH_KEY',   '  KS_z[d=+OO;tO#7OF9a+e@tDmm4DF0SclPR-hm97W9l1VFH{icD%M?ZHhr1VB!' );
define( 'LOGGED_IN_KEY',     '+$PL |yVaP2^RM!Q f9;VoJ{H +IEA3g*]0X4z{e7;jfkyhJRD=$9goDcAK;_?zS' );
define( 'NONCE_KEY',         '_RWh&SnX_eGsHh`T|(u^mNImXzPf-e*=a/?$>;cL4NBt8?p[WwF3Yrn2#q!g=j;r' );
define( 'AUTH_SALT',         '$%a%;u4x@%p,3]m-o$F|))(xs+Q)-5jLGQkBhR=y(J`Z*%y9b5[(V*,%C~Lz@!nG' );
define( 'SECURE_AUTH_SALT',  '%uOXLQBF7RwNnpKonO!l$,Zh5.GrpMCE5.lM2gs)nAu3!f%9%F7a&G@`=W&zs/&q' );
define( 'LOGGED_IN_SALT',    'q*b.}. DZP 0$WfW9/YIH.cAGl aHU 5%JOpA=Vxa!dk$3G!fVKqqaX)j(pXIE<z' );
define( 'NONCE_SALT',        'H&XZv+CMRoTe.KA|^{g-c%6A;c}Gl,@7=Y!-aj&K},6{L1fDL|q%4`|R.3jEH2_G' );
define( 'WP_CACHE_KEY_SALT', 'ONd;Fal7!Z.k9N-[gV<~{G^Fon(~cL%XyFY#T&$gwPMM0d]zWtw`](zmD >4&?6G' );


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
