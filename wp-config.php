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
define( 'DB_NAME', 'chalets-et-caviar' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'lCWs dl@U>-d?olyuNT~YI_|d>yYqq:9=*iKzrs0{%Y{Gr4@}|| c#kJciTX)NiP' );
define( 'SECURE_AUTH_KEY',  'm9x4<~>SC+@TAm|%4Iv:)(-rqmAdLV]_Y%64&EG>lVXx;DA3xb/Hg+#xk2nXwee:' );
define( 'LOGGED_IN_KEY',    '%!`x!hda3*Q$zM_OF&)~i. {x;UKjPm/+8U4UdF?>$Kp51>42^>6Ugxc>dW:a<@t' );
define( 'NONCE_KEY',        'YRzgPTxv/BYhay5A@2]4}(]*!fPBB2V1,1ucD^OD<g6:Cv9rKrl<tLQ)$6rE5=o=' );
define( 'AUTH_SALT',        '.J. )>?e,XG?k54idpe^04&h.&cr&sb7>HmfQ%A-=(U3Q=y9.yTUR0;(/PGh_oCu' );
define( 'SECURE_AUTH_SALT', '58BxIAwT [=)a1,1.zE5#XV-&&?7(n%b*y@g3&qHz=;~F$U%>r;Du-7[vsaB7= f' );
define( 'LOGGED_IN_SALT',   'WLc3TMgs)VP*dg/H+p^T.eFo|{g:2vR<K947A3nKadN8loartKhwAwOakY=XNH:C' );
define( 'NONCE_SALT',       '5z b`p8p=b1p=VvU_oe+&d!xYI_wq5!gvrraP|r2Ni={`Dj?7+>gF0MP)Fz@Bm5z' );

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
