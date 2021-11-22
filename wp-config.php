<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache



//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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
define( 'DB_NAME', 'marcclar_xanathar' );

/** MySQL database username */
define( 'DB_USER', 'marcclar_marcclar' );

/** MySQL database password */
define( 'DB_PASSWORD', '$3xUfk?wHwJYa~.R' );

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
define( 'AUTH_KEY',         '@2HpO<M859EJa|.<v^2= -%<X6L${C|e71s_dp&cEMd%:P@Pp2)Uw})wu{RBG]??' );
define( 'SECURE_AUTH_KEY',  '4b0QvEWp&MKE*n@|`73-F3[Ej?7x4IRms%ccwBkJ6[W_nXcv;xvGoPp8L7bpD[r{' );
define( 'LOGGED_IN_KEY',    '^9yW9!^yI=)WvD?9ge^]}(TQ_GkL9tm$B6]3Y+%yq,#9Rn[MhJP*<lyG2E~Q!j*,' );
define( 'NONCE_KEY',        'T%x78i;EmrgQdtl(J+ALVq~GXM^biKvOgK2hBhlW$_KbElP1r56.6([8Y0856w;u' );
define( 'AUTH_SALT',        'jYD$aT2bj~<.[Z,O8vy8Vs>S[mM{i)VC3.2UI-#E=mHQ[MOZy[ 4_$(7}OOrHFb;' );
define( 'SECURE_AUTH_SALT', '*pCG8:S4C%@W9m0Y3994;T2y,VOgs|bI<T>LutUk^2b2TJ)|-zIQ`&B[~ZjW3}is' );
define( 'LOGGED_IN_SALT',   'yV}`?:unAbURWI8%T$j}dbg#It80u.vt(Wb^J@fQooaUql7+$vBjd3x(sZt1~v9Z' );
define( 'NONCE_SALT',       'Ker5Op1k{lDffq;s6]^dcF}`0IM57H4;n)*O)+zs!yYB&ZJ<FIhF[[6ymC:/Ap`:' );

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
