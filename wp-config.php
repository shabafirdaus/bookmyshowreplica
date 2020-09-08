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
define( 'DB_NAME', 'bookmyshowreplica' );

/** MySQL database username */
define( 'DB_USER', 'shaba2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'shaba11' );

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
define( 'AUTH_KEY',         'N_/wV&fP~:-m{q!FVbvfD[KK|#e;w[oC[t;6bU #)G2uzjl@FIr^H_fMi$4;xTti' );
define( 'SECURE_AUTH_KEY',  'fBO)IkrQ,v]jWAn&jnAx|%(w[S~zvr=?JLtg:TN6LL>hlmxF8zoh`+p%hE.V/9]l' );
define( 'LOGGED_IN_KEY',    'P}G)_i;]xM57174Jz&9}SsBxWDfE~5LhY<c.P;i!=W(5k~UO5(TTL; vF<+*|SP)' );
define( 'NONCE_KEY',        'QOG<NNbPlBY=$3UZ>Gu]mZ@fn>CJETMibo[^Am+$Z42=UPoC*ocV@g1+sVcTdhGt' );
define( 'AUTH_SALT',        's3iir #ZvGj]u@1eow-6Qh.|~eOdaG3nh(9WW0;STes5$i_T+5(ZcM#8Nmw$6~7L' );
define( 'SECURE_AUTH_SALT', 'rFrjEXB?f1!lI)M}]O5QKK5/7YMv:WF|D42fdcDM!0bs^4&Q[OwQtN[k3~bTM3~_' );
define( 'LOGGED_IN_SALT',   '/2IR`UptwcsH!GUXF6?e})Q$/E;9 3lf5T/T ?1:`o?;l5[cPk?)Cxa+-*;@R<KM' );
define( 'NONCE_SALT',       '#Epd]1$b+w|XsGwblz<H?lg-EI5mg?R1%nTJ^U:OO1p{)=L1#5uuobsv20GS@SEJ' );

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
