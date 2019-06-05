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
define( 'DB_NAME', 'vidziedits_db' );

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
define( 'AUTH_KEY',         '*8qIw<Ju&3u8!wEdAiNEU8%qOOh(*.P4d9cd)Dp`iO{}](D>/Kg]c# ^}>~k]Zp>' );
define( 'SECURE_AUTH_KEY',  '6wCB<Pxq=GYG-{@t6f9oXk9A]KViTN<p# eVkM546hch9C&~30UA&qybQ#`2p3=R' );
define( 'LOGGED_IN_KEY',    '}kP~8A@c+rl@lw8AS}YND0^#HycV$`|r)O(&??p2&l0DG6k=A:Vb@@|eK}XFZ!<m' );
define( 'NONCE_KEY',        '!Rs|-td+VK$}6F 5rByGs}{LD<)3azf`H-YvPou EY;L5(~@=w;3<}t}!7UA@6pe' );
define( 'AUTH_SALT',        '#!Jp20rTX[p :Ey,&|Pp7oqJxc>2l%S^|K76S8rU>r`dNmG/G:!uY>QYlVy@0R I' );
define( 'SECURE_AUTH_SALT', 'X^FFdT+*S}OU-%PPQKGS+DG38]lqx=;LpU0Bbf9?yRT;9x:X7I?;ZL.FbOet!];x' );
define( 'LOGGED_IN_SALT',   'ArLzaOu~f@rAE.ym?d>Kx#*l0,Qwy}4G=Nic5 *VeD&${dedOj=|bo&IA4o0&U<,' );
define( 'NONCE_SALT',       's=*D8lZHD;~#9saMnsZCy!,jR& I{3Sh1gpJ) (%h#E4N(P*>mt6Z;vpz5Q)YpXP' );

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
