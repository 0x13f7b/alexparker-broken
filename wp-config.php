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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b4a15f9f0be0a804c0a08df094ede38db17a0ce63a6a238d' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'u)8+sS_ #vK*fJ=k2rJF=fs5AJo|~3DmYvY`DIjks9HI*d.I)Fr?wV+ X W|EGz`' );
define( 'SECURE_AUTH_KEY',  'G;fy^Ap<NO:&-B#)z60ou2DQ0DAF%v1~bg5Fh>SMwA6,kfr[5[!Is6#`[_2*$|:p' );
define( 'LOGGED_IN_KEY',    '$+QI<HdAgDltJH&.<=#RDt)]YE_{6<]{6^(6C9HMrd3N$;_59yq:um*s!B.m`iG~' );
define( 'NONCE_KEY',        '5O7&Ua63Vyhy(dQG%{9rUjaRB+}$YS+xH Pi- jepEf$|An.3Z!4so3ZV)qM_i}&' );
define( 'AUTH_SALT',        ')ONg|X2v;81DyDV|bkXfSs3)EI>TJ=1UPG_<!6%/]) #B;r2lMP4;,TcM~01F my' );
define( 'SECURE_AUTH_SALT', '[5<jWU7s=%?x1,!]`D1`zvZ{+7qD6Y/8E/S:0 Q!+ Rw9xGTbts!qxlP}&UB>|ZM' );
define( 'LOGGED_IN_SALT',   'c~*rqY}BR0]z{eqMu@}e)hiUX7qWoenr_M$Z+4bkS?;viT^j]8((W-5j <Yhopm:' );
define( 'NONCE_SALT',       '#z__[hME{:`T*`{&qHl|r/vDexzeBmH_;SBE;ac^r*)ZS:V_-Ln8D!`:/PC7 >>Q' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
