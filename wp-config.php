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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'milan_baza1' );

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
define( 'AUTH_KEY',         'AO_%=WEbr!NOk4`jA`f36Xs(6gi8+hn2dzx<%p4<x1N3ti#wn+(E5R^m6a~ykB}N' );
define( 'SECURE_AUTH_KEY',  '.>98h xW}i:-Ve%xVJZkJ{)iad r^1eg#dVS@;)Jf?{[DS</N}HMJ[+[,^i@2EL(' );
define( 'LOGGED_IN_KEY',    '#Na2V4&5x9Ra1,v=8S?lF*f|Fm]AX.egAfaZ.uXU9O+X.6Hy[|4_^2]S_XHMhp|Z' );
define( 'NONCE_KEY',        ' 6G;6J8`BH+Lr*B,A{LKkiOTqabS{D?1Ts.]DEjyi91M#0#%`JB>80Zs1?.c#,_C' );
define( 'AUTH_SALT',        'B);KR}}5?0^S9<AW8~.GLQ)Cor|z`@jY=Zosp/6 ]$<Y2.Y(~XpH[>~hSL]~ifQA' );
define( 'SECURE_AUTH_SALT', '<$sU2,uHQv]k1zUki~{^$Bzf<fbK cX~-BRG.7^p{y8v/mp{TrL:4B}I;^7D^vq*' );
define( 'LOGGED_IN_SALT',   '$pe,5f:HwH%}wJT=65PM,;C |Ww/$yL_p`j[qNgWw-G`Ap2Bq<{-:?,wX:Er41q=' );
define( 'NONCE_SALT',       '?uV W@F)X/ynub<S1@9Z5r*&_]G2b0hcYN]hCxCv(mu`_:RhBs!25EApGN.uE9<0' );

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
