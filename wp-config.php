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
define( 'AUTH_KEY',         'FizqXBXogG|k!E%XD%.J-..%x|2x`MqCZR;w3y#R>?K82L]8P{~Vpp;qE.jckZCs' );
define( 'SECURE_AUTH_KEY',  '5(Ruat=|#+!pbq=;r48iAxVA|w$F90?^g3 =vr P-yods)zl1iZ.&)U!%7P;~b4f' );
define( 'LOGGED_IN_KEY',    'X]Dn/LA?]%Q@XvyPre?2)>1hs(^X9;ZN]6K.(39!/{y} UA|l`PpbQCkDaojOD+e' );
define( 'NONCE_KEY',        'AWwa7EsYJ{DAgx:RRuydPIJY$UkA+O)`m#%HjnHDlV$w{xBiqk~!!6DX)}M!aO}m' );
define( 'AUTH_SALT',        'UPs:4FK_4bgY#gjULtdsw]-veoI6ZHi!q}p %.pPkDVv:j[7xT}1N%d,CBilgea9' );
define( 'SECURE_AUTH_SALT', 'IAvdz(F&;i/hN=[7Yz6D6/ u&IJUKQ+JPZhYF*]A[+L1x,Gq05Tar<CjEIaDIAk2' );
define( 'LOGGED_IN_SALT',   '?bQZUcR5fNtZ,W~$]]t,|;{J5g;OmW~PFR!Qc_f^c5{XW_-hD9ScbE0n2CKxrK.$' );
define( 'NONCE_SALT',       ' ])OzUOit -^6ITkc!dbTa+xNo&@7OYy wYL)xX!^g=L4drUrJRstv?YsN6) +d{' );

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
