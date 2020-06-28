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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1362290696Afp' );

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
define( 'AUTH_KEY',         'E[h:#O_h>c2=pWL[f$#{pyM(.#uh6CzrO(FP_eU%fE{xKd8Vr.0%eba&atQEK0L3' );
define( 'SECURE_AUTH_KEY',  'x!Ubm~[joEiz7pSvoy;PbM6!YKN>/~wg=swZzn^Ek=Z=}!uw~=~[,c.lO``8i*1u' );
define( 'LOGGED_IN_KEY',    ' LQB[?Gea>Y6k[swD@{Ubab<L!cM;a!E|uMY*Vl}FG/.AtGVyv}2A@wI(%*<v~!C' );
define( 'NONCE_KEY',        'o>gT!b.YuPjUaST8_#zQDJ|Fb#`y3gXK1WPB _i@nvupeKN^TidBUsT65(RN w?j' );
define( 'AUTH_SALT',        ')CpDeM0i]a5>7N0kirR _1)9?ZuynQ;&CD!Ak}cq[@Duy+?Tpwf!j7YTv_zv(%jy' );
define( 'SECURE_AUTH_SALT', 'RJQD)~(`Q{=wcTap<?|^jGu{%~y.o3W@Cq%37tINK.#(5j}v1bcMj:Y9T}x7%tJM' );
define( 'LOGGED_IN_SALT',   '8n{6:$}jzhllgNG+782o4D<eU `m}t;1`|*!C<`*Cyk{$%5[FV-}.nII=na>)m&]' );
define( 'NONCE_SALT',       'GcC41])}!Q+3gst1SZ^muoov0 +NA@iNn|yY3afHbaEWNru@+q]t#+L>mbaPFnn!' );

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
