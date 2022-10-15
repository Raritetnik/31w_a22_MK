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
define( 'DB_NAME', '31w_db' );

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
define( 'AUTH_KEY',         'l`w&=d%GH]b=j4&>cczU}*8RyO?x1[{{Cq,GiII}=PI 1c@C{t?05<FF%})<qlNu' );
define( 'SECURE_AUTH_KEY',  'qSI!&QKC%6 w&p}fU6n]:HY-~t?d$f:rpKZz.^A5wuv8zsm!FbvJg,?Je08j/!(e' );
define( 'LOGGED_IN_KEY',    '#m.4=T? Twy^x[}necRy(.EkX#294G*CrERf7fOFk1TaGl$<SK.LdzB(:g:KJZT<' );
define( 'NONCE_KEY',        ':id,V?N -pSwABc:N2Li]2Lpt^Sf1=zEpk(I1 hyD@1y[=j9kl+a,VHxWIkn~@%{' );
define( 'AUTH_SALT',        '<(GByXiO-~PLFQ84EzGC2!(7s$R=#>U 9<-t^|O5sGQX.mdDBc8`O#+l:)xM~yN ' );
define( 'SECURE_AUTH_SALT', 'K/Y^SESBuwC%m}9odMWrfPU3EK9eZ%f7m{mh.=<F-c 0k^wd e).5#.I-bR[?c64' );
define( 'LOGGED_IN_SALT',   'cS6! J$Hn^PA4[6F7LqT,-G,v?X..bV+AN0_4xQjuo:O$g3J,~^c:0@msj1c1,|F' );
define( 'NONCE_SALT',       '(T{1eUf(Oy^TBS3h1M2W^!1DI~@yxnvNBeEdTW3TQzKs.jmi#cer<p5]`mDA[k8+' );

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
