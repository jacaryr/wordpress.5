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
define( 'DB_USER', 'username' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'cQRbQn~tV+_zXfW.O6N5p-N3Z) M~qqA?k&Z5n/2Q{:+(aLfK+GLU>fOo#EP9{$Q' );
define( 'SECURE_AUTH_KEY',  'YQJ${iz|1xrc;OUbQR+B,l_e3ppa Q8%xM>k+Rp9F{d/@hF`1Iq<t5xUv2@`t^U3' );
define( 'LOGGED_IN_KEY',    '{6dwWa5 bT&Bas8E6nOWz4|<^bA^$qi[>XMThQHqaFX((933 ^uyG~0#-g=hHc{j' );
define( 'NONCE_KEY',        'L(2iO.%E0V;u}d#x^Ze=?5YSfV_bp,f]F!JbfLx>efWI-3TG$=5x4o*zSaBp D4!' );
define( 'AUTH_SALT',        '&qTI+JNs7A%UkCw^;b!0(vxjt!F|lC5:yX]2QUBj|GCNJoo$mc-T%r3=H#F|T+{=' );
define( 'SECURE_AUTH_SALT', 'M$*t}O0~vvL63e m8:$i#>gbdBmOyLOMqt7x<LW~8/4><sqliqBJ%`0(;QlrRkM:' );
define( 'LOGGED_IN_SALT',   'vv^BB0{9lgNz=?GBqLEx[]L z]J&{APM1Tt%.F#ow *A/KjfN0>y[P-8{P{Ilt}]' );
define( 'NONCE_SALT',       '_U>_|^[1}_AF9P~dRtl/,|VBx&FMqyPZ?|UgcWv;3U7 :W9BY+& [TjoDr%h#kub' );

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
