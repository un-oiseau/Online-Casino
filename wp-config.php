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
define( 'DB_NAME', 'pgnegeqc_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'bSR(3x2F GV<;JL<WvbA[+(Vifq>Nd.Xqq8krDjiVD[)Ai;pK#8M}6GH)0p6WYfi' );
define( 'SECURE_AUTH_KEY',  '9GQZ.{nspHZ`=|?fk$F^*8WuR_3q*</vBGk`2ABK5e`?IcZ<eAK-Cq^j_|(!ZIrr' );
define( 'LOGGED_IN_KEY',    'eKq[.@!%l-p:T|XGx<Ke.BIW<::[MUoeWA9v#7Uj,RiXZD`M%>lkT=e@4dY,6@!C' );
define( 'NONCE_KEY',        '7*+GfXc7S(Wm0q*nA[RP`,dimB^X/Sht/* 4nO{x}%s[?>|G?UA)@%W=Zl8}gvOW' );
define( 'AUTH_SALT',        '>Z&nI?_TQsP5F#5{4ghD.{Ae mTi25}{QGppEZ%E``KGN(0p#e<ZLv`h$6~ZPPN)' );
define( 'SECURE_AUTH_SALT', '%+-)y#Ej9Xk<`=nz28A:3Ij]s.Dmp(0N%U/N,}:<aJt3L$fgQcQCg&*4:] OaAK9' );
define( 'LOGGED_IN_SALT',   'xT?QFW:jzib~O/NhqAGx@Ekz?Fo:_764_bUAy[u83e]>Yek8.><XNwmQ4yU)$hvu' );
define( 'NONCE_SALT',       'CEB.Z(r31_0>@EC#E#ut,%V4IVUb0hlqN?#EiMM%q=]@@%mNdzz:1kt8%:H#LnKP' );

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
 define('FS_METHOD','direct');

define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
