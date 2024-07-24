<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site03' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!T>*+oVyO~0D*>{f*kYMhSSclM>@s@{WpKq4GNiSAIN[m.8sbv,8*_37PS]j3_@~' );
define( 'SECURE_AUTH_KEY',  'QC@BL[|K>R~V%zPl{U7OuCfElG_*r?.r5:~9c}nH(um9]Os[,8#kFIxh.,_8>0P4' );
define( 'LOGGED_IN_KEY',    'nAx#C!?)W%M GaRo<mu!_3agg*.>;k^mP%mL@9{7f<.wMRf[M];G-/:=928HsQmi' );
define( 'NONCE_KEY',        '4iyNO}hyaC}+~KY=<$p^iz5)}<9DK)0lG (rN?zT%+2hQ.RW4?wT`tc*v:T,W2(Y' );
define( 'AUTH_SALT',        'K(1yuFFYXz9=x&lA:K]O6lxS&u2k9{xqdUKzE,J uvGw]4O|:IsiEnwX&Z2P.rC3' );
define( 'SECURE_AUTH_SALT', 'wxBi7}f^h-P%u.wGjCa|#rmsQKQx!}trw{R!S_>B=P|~PekdDTqN#]iy}aL.yzqq' );
define( 'LOGGED_IN_SALT',   'rm8_#s&zDB3`]Rd.y,FiwzLMD7%4zA.ma#C2ol:W2P#4.hI(HKEivf$iF#.4Y#vf' );
define( 'NONCE_SALT',       'UOE>B@1tH?32A>vmW){Liqp{o%=h8D03|L>Ex2Rg~.)9y`?JZ4lm-,iPpDHW;6X!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
