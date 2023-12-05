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
define( 'AUTH_KEY',          'FIF9!C:nI/j|=4;m1;M>A)sCPg+UUp-`d 7Hu^ABY;;Q`@rs4E,f>[xPfu~f76hH' );
define( 'SECURE_AUTH_KEY',   '-VQvsHbmV)AmBRDkk?z>nb*p=-,F;VW<k;_DBHTt[;Go(mG^x@^^dwh%j6s?iZc3' );
define( 'LOGGED_IN_KEY',     'qZ2MT DaH`{Dj4=7?_D]cz}--w<v^zdD/b+9V2-c/t#6R1UKmm.O!uJ6;T$x.>bp' );
define( 'NONCE_KEY',         '0{}+Bpkg?7M-^Ttn6b_*eX]%A.AKJ1#wEnie>2fL5QyP!aV8+-$0F4&E{&U,6$W`' );
define( 'AUTH_SALT',         'xI%}b)4tftj0g:)FbcYtR_hJK!}OXDVWMP`2v.3x=OWT&rwF KL60@&>OZ}!8X@-' );
define( 'SECURE_AUTH_SALT',  '|*_6|[V![<=$^}p9e22=1)|/[FF{ G]N,O:NXEPx,FxdU)85k|.ygq#q*m6<C>%c' );
define( 'LOGGED_IN_SALT',    'RDK9SjdT1}+CcW/ UnWvNm6}_PCDXS*d?r~?m(b?^VP>PW/1Uh>XAOJ&l{u[!Ak>' );
define( 'NONCE_SALT',        'q_-I~M^Ud!s+j4E-!26R89uPyl{4,/N=,eRuV:W7FM]ChPi3RPZBl,JTS~=j@p;o' );
define( 'WP_CACHE_KEY_SALT', 'l<)R*(_NvUk5TUH=XJ]>fh?cT>K_vYP(tN1w9qzss+>)Vx9&*(4&wwrA_x/#)hpW' );


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
