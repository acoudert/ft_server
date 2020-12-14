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
define( 'DB_NAME', '42website' );

/** MySQL database username */
define( 'DB_USER', 'db_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'rdlKYBN#L;ZxLVWb]$sb}`pUuTaefbmYDE,<=?CZh&,&zaP^--8qAYt7Pb+^o2UI');
define('SECURE_AUTH_KEY',  'M:gFcCg}(6$nY-@aiJ+yLTDd,W9.QRthmpeo(+7~JeGy#}&j3C,g98)[2A~&7h1]');
define('LOGGED_IN_KEY',    'Wp(){q={%taO;X[V&?pU<BSZCtmxuwbaC,chw+I|p(-Pdg_ek~yR=a%~s7^}q^Yk');
define('NONCE_KEY',        'Jr1*qk4BO3uh~7`o<7t&+.9+xGuJN2Y^9Iqn9pH_NfG*uO8$Gz>}[?0-zz0Je_p#');
define('AUTH_SALT',        '>SGT|:rV^Jw/54|~4w>s,|Fpu<-oOVv.?iwnB^}SvMNX=42v0Zdb3NjFMZ/ij+)H');
define('SECURE_AUTH_SALT', '9j0oShlgc]4p+cNtu-y]l:k9(:],wg>mP&3-O1(;wvpSXWlAG6_~~S?jnI+|&{-t');
define('LOGGED_IN_SALT',   '{azmixwCwZ?)JC0fu%XbJi8Ym_6bP#8Ixyo>TC);`K%q7Cuok*Gx.AEE&8X!rkZ2');
define('NONCE_SALT',       'iZvU_*}>HVQSCXcXSCtWpI[qsUO)-c,<rRnh-4X +VNUd:P>(R-)3vgE:eV+8D]/');

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
