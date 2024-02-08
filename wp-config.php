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
define( 'DB_NAME', 'manpreet' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Dell@1234' );

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
define( 'AUTH_KEY',         'D:nnviO*@*&W81P@6+Ve&uxYha<*6_&OWxn&kq<]7rjU_KZKhy62{AgiKy{k8Msu' );
define( 'SECURE_AUTH_KEY',  'e{k5ec&l0b8;}Jf7jd$4x* Gwj<zxGO@if8On7sJ098g<z)ysD5%iD1XsG7 qreh' );
define( 'LOGGED_IN_KEY',    '6]^DD>qo(Be DAcS()^R)&T3(qW>BK{rdt/.&H_eHkF#8]Qh%->LIVqTCeG@Sb&/' );
define( 'NONCE_KEY',        'fD>=.>$:H,]OS(%7M q{p>)(YQ-,bG6dDl>eXR*X|[S-|rmu@)Q7_d|`*_U+NCS`' );
define( 'AUTH_SALT',        'y|T2~uV;;,ttKmoESL~05V02b*vGsU q7Hla%xm C!l9Vw5Cc{5~caI^_9g2Qwl(' );
define( 'SECURE_AUTH_SALT', 'KAnxKz_^&HB;xw`(g+lX7U>ZK9;ZK3EYz=pfpjC4+?CR_f~S?ZV*{QIA>n^98]R<' );
define( 'LOGGED_IN_SALT',   'CaR0s^:UMyKBc!y[z6I0*_1,?q)ut3/)/:/tv%9.;y%?Od78~px,M ,:Jv4TpWvE' );
define( 'NONCE_SALT',       '=^TZ#TR8D+DgF$V7-@_P6DY3|lv4|L<`#wxV,g}^.zx9l=>vj9UUm rcBt!7QeJd' );

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

