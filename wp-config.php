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
define( 'DB_NAME', 'caio-na-memoria-viva' );

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
define( 'AUTH_KEY',         'p:e^ (C&<&3u&ykvP$]J5?qfE^zPD/z2Z(5[~pF@$f&=PzA+H9FzW>7A8vs&}eb9' );
define( 'SECURE_AUTH_KEY',  'R}Vrn_b66-B@5S5CvclVHVKM(]Sr)tKgw>.69GaG$&[;!k{.4_TV^d+XG_x,7 5W' );
define( 'LOGGED_IN_KEY',    'Fg6aOky-N({Q$A?oi8[6e,g$+c|?D-Gj(cs?=xMa{?]Du-H_[i0teEL=#6uDlb/}' );
define( 'NONCE_KEY',        'uRdjMmdAGrWzmvJpJN9NK;/QFRI=o06+H,|pH#<s-[qyXxyDu(t9;GU]WiBity1A' );
define( 'AUTH_SALT',        'fq2Wp)[z_*,vFt7wEkBIpx56Vyt]Ws,,4{bf AO$y?ea#x3r|RBIugWb-rI2p*ch' );
define( 'SECURE_AUTH_SALT', '7UxB(|0+=2`kb]8Lra3:&8:~1zvb)t)hPf=vJW+:4zZW W%.Ih3Sy1ozSToE>6Bn' );
define( 'LOGGED_IN_SALT',   'bmf~r^jntS,Vj[ yQ>3}9R$? EQt CeQ~Nza`prMpkQYS!jm/)i1yL~]<qaOJ):N' );
define( 'NONCE_SALT',       'dji=yL4fkMK06{;urGX0=h*..H5E]ZGeE(HE<Ki,jQ7(1lBh:!y;AhL903n6D.}G' );

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

define('FS_METHOD','direct');