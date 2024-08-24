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
define( 'DB_NAME', 'megasites' );

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
define( 'AUTH_KEY',         'Tr`~fn>m;?(]HP-*uIxTE)w)R}IQN0Sn_6EbsY;I^-v1?B~A=_hJF~j0J9nU.+/r' );
define( 'SECURE_AUTH_KEY',  'To|Q>h95eW%/*[wOM%6&E$Y QmI?Y3&;qs|)A/o2h(33B4YD(<@mwkg{G=o!0mTl' );
define( 'LOGGED_IN_KEY',    'sCieX#kg*7~8Z>JOpEH2KlK%)n6?h+nDii;CQhYT4FU6?#y~1(0vKh2YofTg1pG`' );
define( 'NONCE_KEY',        '%uN#bv;|0.^Z)^HJ?{McP;coCc)Y:v9F0xN*][-(2:{tx#+-eDz;~]l7BNm[0mH;' );
define( 'AUTH_SALT',        ';)tPs8_B**.JIS~gJkw635mliba5URWFKY/,%I2/l]9908WOkjz=%RdVZ2d8<fqJ' );
define( 'SECURE_AUTH_SALT', 'sMaz=5*DA{ $c*`vOl=_+ED;T^}aflLe4],}p{Vn*>3O*`2{f|%)zUD**>wXWqpo' );
define( 'LOGGED_IN_SALT',   'Z18 Kpz1RU $f~7Bje7|V5gN<{XD$jl]Oe%mw[uP?s1_xI:u>8K.p96!reMV)H:Q' );
define( 'NONCE_SALT',       'b 3_BlPp47Cnc8-#Tn;a_cESfuoRW.HV|bUoju`2u?|.ZQSy8xs:5s~z=#,zR{EC' );

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
