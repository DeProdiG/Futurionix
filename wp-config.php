<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'futurionix' );

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
define( 'AUTH_KEY',         'w(Toq1SJk)$oJ%<{U=PADNErOEaTVZsOTed3`%Z3-|# &My6UD<_X%R0?xKt[k&K' );
define( 'SECURE_AUTH_KEY',  'cr3r.ap$k0?l?,Hs?Vo[q68?PRbe+7_Tepl0l^PicV/-KGYc^Ipqm/u<gLH3tyaW' );
define( 'LOGGED_IN_KEY',    'Sv0KfrE*4m)Ef4]IK>;3NX-Ywh[B>;TEf&|s<=~/q%aE]RXwW/U[WRnAuf4yF,),' );
define( 'NONCE_KEY',        'U@^S/se3*uyP]~uI5WvW(Ly!JwtAND[9#FswcQRhcA{^RgM4iM~JHibdOGMPh}(1' );
define( 'AUTH_SALT',        '+ 7(L_?+WD g!e-L Od}IY%V^{n8` ^Y?da4()YV0w{D/L35Y%pq?l~Q+Lw.LQ$<' );
define( 'SECURE_AUTH_SALT', '9O[D1.t3=_zN{TfP}I$fqmSC3t3Gc@!c?l:e>,Aesk3n:J>cMHV*%AHm AfTknNX' );
define( 'LOGGED_IN_SALT',   '0Z]9.Ar^jx.h_R/{R8oWokP~dBA~C$9E=sE:s`<*xJo01!eg8weA$!d?V5]?^/]r' );
define( 'NONCE_SALT',       'uF4qMv_*8b2b,ObfZ!F1}23Jh|YK5.WG%xMy|!6d7t$N>eCEN8(JL:Rl`p5NpEhv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
