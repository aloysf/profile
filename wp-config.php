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
define( 'AUTH_KEY',          '}|nI>aRmb+R*5MOz-DJa3|_S*lT`z(fmmEs>gC6yI=`R6m&:41O:MU;dl[< {/9[' );
define( 'SECURE_AUTH_KEY',   'i2qlg%8nbOEek(DgG<~- Se4Y<`Mo-+;}en;[.gC9ux.]l#_Py,fZbl_*KGb4ONF' );
define( 'LOGGED_IN_KEY',     'bZ4iBvm}EIe?l?+~h`%n<J5,;y_5c%ImIU]7N^fg-(g,7K:Ibt$Ar-9L6m=Eyn6O' );
define( 'NONCE_KEY',         'P>pt;IEjVQF<f=sxwak_aO+sz!T-dH2^*wJ4[|eAp.@3e4&Ntbv4R2%(Q].CDs}E' );
define( 'AUTH_SALT',         '(WJ&fY_6!S~R*AP[CCWf38KDrg][tR@pF0[O6PWOg)KSs{::]N;FC96j!qu|MEHx' );
define( 'SECURE_AUTH_SALT',  'Hyk]<U0K;FKUVpY=W6_*wVX(`f5^s)WQ6s#NP}w.4Sa:*;jFG?+-8.=(nml!>RUG' );
define( 'LOGGED_IN_SALT',    ']Dn8Y+SC](F1{|H@_.p+^(0koW?!$<S|E;nbR6PAPZ}4)IF#gNj4h2/nc^CSu7({' );
define( 'NONCE_SALT',        '+T}>?LfIr2_#OMY=S&&Y1E]nho]KWv-,K7cLVJ}9QbSLX290@Oq.n8|wdo!$58#`' );
define( 'WP_CACHE_KEY_SALT', '(DD~(oXW%_6G^(9+e%?Ri;6aJ(zJko1,KqP.%??nVD!=z!UYwQfI([eGA0|]d}wx' );


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
