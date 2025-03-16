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
define( 'AUTH_KEY',          'vlh C%`Mk6TIF%K@L3#5=3vc6k$uMWL%A&ccdSx9.V`rBMci8rbjDhZdvrRS{.({' );
define( 'SECURE_AUTH_KEY',   '`Q2v2c;Ev%?:{LaahZi>4L481#_4j(v`A_l,Qs3|D%LX6l[2`vH?+Fh&i4AuF<=Y' );
define( 'LOGGED_IN_KEY',     '_x?U0*E9#cqI%yE?QRBn%~RO[<F<1N[doVi,p++t>S0`(5hqDQ]])T]z*eOt>L6c' );
define( 'NONCE_KEY',         '@L(_g{%[<l.`-?UY)^QR53ZL%U&+^Wbjp$xC.IuBaw:<$qH+j@,G@yt(|*s[H2 3' );
define( 'AUTH_SALT',         '3&[.D5nQ=qvJQJX;,,/f!GN=n p-K0.;6m/}#hw@QA|36|0BN@wkFKTBLk!>:s?}' );
define( 'SECURE_AUTH_SALT',  'PT!.pk)Z;a,=n6]qypBx>0(nbb.{c?gXHx?-YN/8$UgJ!}-:^Vg<H!|toD[nk(1_' );
define( 'LOGGED_IN_SALT',    '<k5|j0&1o&=v;!2ZK4:@k1!4<ygR;xOg1cbUxra-Dm1&WYagKraj$</p<KTh*kfX' );
define( 'NONCE_SALT',        '+qV :9IsN4{?hr7N4NoEJn2<[WM^omM53![<a{XbauGk5H #lK{D]IngrqO_/<)g' );
define( 'WP_CACHE_KEY_SALT', '-SJ{~V=v;a56:T*64l_y@uz|&b>8PC|+x 4W~F8Db)q_+llLjfzt><~_(@b Hmxi' );


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
