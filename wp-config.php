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
define( 'DB_NAME', 'erroneous_db' );

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
define( 'AUTH_KEY',         '5>[*e>}bm0jhlO|WGh`OQ-EB%P{C?YD[fL>%wMhp(O>y|~s`<$tZc6}$C`oHAw6`' );
define( 'SECURE_AUTH_KEY',  'Ztyw4tZK(6Li>?[2z~Dq:YNn:#`&MrjBJzLqij-}xxiO/n`?f-qEm=:qIN`Qs4:9' );
define( 'LOGGED_IN_KEY',    'xETT P-iB$(s8QtaXTgdAm[H e56IXB8b5h>|HYQ+by/D^4Y~~W{OFvL=_2f{7T7' );
define( 'NONCE_KEY',        'zS]Abmn*N+tqi!jbXut8rDy}D39$5HcssCwOI)ob<J&=Bf$y&EwnSS7}v,z=}#cv' );
define( 'AUTH_SALT',        'Kr4g6*)g^Bo#MV;*_.|P|k~r/w7<kCvA>1MB0~U!G*`i*Fs?:xJcm-.8W[q#[oH%' );
define( 'SECURE_AUTH_SALT', 'QjSb_}U^>gY~EL#0JF[p&0`M7J{&LT==Hm=Vpo4{-0 #wErKCxXq|^/(A%ooeBo@' );
define( 'LOGGED_IN_SALT',   '(5hD)kcyQLq*Z*<&rqwU2_$5?NVt.XB{D9qbk-tb.3^OW4N?}V(;4R&nIcxl*}DN' );
define( 'NONCE_SALT',       '(`tyry/ <J#lf{ui2)$LXx(~-V1B.SQ]:lARpkstjY`H2&3uZ_iwHBf)[=[0w/f+' );

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
