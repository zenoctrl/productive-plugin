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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'productive_plugin' );

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
define( 'AUTH_KEY',         '.biHM1Z0ZO.ZR.Ib8-SmKK:(ruxu1KXKayZSPoZ&nIikRPHl>(`1Zyzo@t+J1+M=' );
define( 'SECURE_AUTH_KEY',  'UVd(=u-!d|w>!c8u$M^X6,L~Z;xdhvCI|GG;4mu?x{[i!~LPYPs`rHA^kclO-%){' );
define( 'LOGGED_IN_KEY',    'bv1LiCT<{C>0;%K&r:mPZ]brJnhN>SOIJ^Dti_*u#6[/DQwbZM3$/F|&MeLJG`tW' );
define( 'NONCE_KEY',        'E`7kiO,P^KLMg:9|`ggArzk:PKu+,Ma:Ac.j3tWF2^nLvU={opH3L]G<^E2zIq{P' );
define( 'AUTH_SALT',        '`97#@}5P4AWgLK:SW^uD=(kb}zru:@@X;5oZFy.*a$mzV7UvrfgRwPc?%}h&`|[0' );
define( 'SECURE_AUTH_SALT', 'J*sL>eBhnF(R7<A}B{z79D5bqUcds=$O2-;X0Gg*)l)x%2:}l SY4nRWF,L=3w`[' );
define( 'LOGGED_IN_SALT',   'V1v]<pjRV)_P1KRGJ_RhP|)755(X1xS7a{oI,Qm7rt1E#)~3!TL=(c<iHu~2@E@F' );
define( 'NONCE_SALT',       'C9h!zG:;646-TXgX[s?@.e++X+A0zB^yBv~BRuzOtJSm.J~]dM]!bsTGC/nI@)c>' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
