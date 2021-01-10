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
define( 'DB_NAME', 'pizzahunt_db' );

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
define( 'AUTH_KEY',         ']@VQLhfs!^Dz5WC<{;w*q=*#80R(aBtNw8BB%*+pgQT#lbJ.F!C69_;(NS{ZT<=1' );
define( 'SECURE_AUTH_KEY',  '{a-AvkrJx=OT4ZYQ{,$%1GWTe!;jJqUslvnh)h&lO^DeV|9+*Lu4^9T-HT]q9eN$' );
define( 'LOGGED_IN_KEY',    '@7ra!nrlp[]l=GOGyE6JFe6)qp+S3%e^0]lh7<[RdjA$mC!o;4u=*LnsrD`,h%m^' );
define( 'NONCE_KEY',        'qi/< MB~Kc;JADu,@PsIZhVwk28G.6K1G)zM=pYxjRyM/MsMseIQ(XJ41ePF<JH6' );
define( 'AUTH_SALT',        '!R?Wa&n(#f?6c~?Ghc34gmn(@=GKp8U!%;@hDz0Y[Ulk,h8%TVS-EeHT< 8W[?U)' );
define( 'SECURE_AUTH_SALT', 'DM`?au},:5HrExwm~M0(t %)xR5SGIggD@-&h@Z7R3bWZy%-n-XQ7l.-IZlSe6m_' );
define( 'LOGGED_IN_SALT',   'KTNyT=}.I*LM08>s;Y9ip8;HGRo8VRCg+^0^Mu:-jKBiix2gpAU39.@/{C6!2)%p' );
define( 'NONCE_SALT',       '|`e?B!-|VFq3|pzucl+w LWlCEso=}ta&ubX7 sT8u`` 2)Un;;5T)6XOk,Wb(ob' );

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
