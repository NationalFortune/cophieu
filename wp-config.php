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
define( 'DB_NAME', 'nat81658_cophieu' );

/** MySQL database username */
define( 'DB_USER', 'nat81658_cophieu' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rVg?0d05' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'VR@RV6xi{fkMhM=Mc#K-_D!#fc)d|_eZ4)>U{#J]$FPF]2sC[f{a=t!`{D8d0rt>' );
define( 'SECURE_AUTH_KEY',  'w[cfNA%.s1,-D [V  !P@h~[cwk#MMkM]z.ht378U[5#iC{ePs? RGj F)BfQ/Xp' );
define( 'LOGGED_IN_KEY',    'nXz~K_;%LUM{Xa~pPbbN6JN<k,W(Uaz98yL)~@MU{ZI>nX^KxM(NLiBTIab,JgO(' );
define( 'NONCE_KEY',        '5fCp4W:(1p{Fa5u^&@{X 6E=c4Xl _#4W,!|E Q(kGLGj]uJx+w685({ rDi/OOc' );
define( 'AUTH_SALT',        '(jq{W5(gD0]WT!^PW$3l+AgE#nd.,JccI@%K.xIj*w)w@tFojn>8v~^O]0mYegFI' );
define( 'SECURE_AUTH_SALT', '?2PFO,9!9Zc^z0NRdy{,E9&r?B/($?xe.!9<?`4;9dHiup_WB1wW%.YxMw$f}o,%' );
define( 'LOGGED_IN_SALT',   'Mc:F{GSL]iRK#J7z3E,{}$+pCH`.sfHhPbjeyp3qCDn.zQohxS)x{0AV(?[LDg2m' );
define( 'NONCE_SALT',       '4I@zWD}51_`EWR_?FWV_S6RR:vze.n,8);vzmneB:,*|ej x{7`/JJ1/VUM/4Gp}' );

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
