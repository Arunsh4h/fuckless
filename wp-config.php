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
define( 'DB_NAME', 'fuck' );

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
define( 'AUTH_KEY',         'NAr/LjQP~@q[gH(Nm$7JG<>O-gR 0E28sQ71!%Q_Q7uZhAW8=u8|5;!H+1S=nNbl' );
define( 'SECURE_AUTH_KEY',  '1ILIO9vG&mr_$-.b1UTqgB0^,G5OP1u9t^]JU!?*9susqmYRCI3a`h34B$KoTl-^' );
define( 'LOGGED_IN_KEY',    'eQ9Oh_yH6j}PW}qL+^87xL0.$|lmDkYsCXzzSJ 1g6a0nWf9hsvOlnOCA]r#~y)e' );
define( 'NONCE_KEY',        ')fd*H#W@h1|A0y4*De0SOm9yY&rr*vP)b}H[H6VTKB^#4%5` nSA$]Mf{.:?I,ct' );
define( 'AUTH_SALT',        '(hZy]MZUOwqa8{}p6yIZ|Z+kVG?9,8 9HQRukT1R{d[r5K)zB~}A$&&^jp0@prH9' );
define( 'SECURE_AUTH_SALT', 'C;XwKSk[r q1/C:lHWPD74qd<eZHy }y8B-,1?#uXC_MCisz^=<)Dae+juEpQK4?' );
define( 'LOGGED_IN_SALT',   'F(k/0UyEd6i;2d)ml/oXd|.<JWypC|GW|7XVyXMhr*7NXs0=dCtMbgf[.[K| _!<' );
define( 'NONCE_SALT',       ';nwY@i.km6?;b6JD_g$t/]BGk[;b/xn{0&TZktWi8gy0^?I>qKdSdWycLSR#37{[' );

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
