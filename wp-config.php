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
define( 'DB_NAME', 'myownboilertemplate' );

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
define( 'AUTH_KEY',         'J_a2U d9(/mf7Hw+f:Ja&z6(Ku6sz`E0u=>UfnF;mIiNI3LYzAKh#^S)VG.t)q05' );
define( 'SECURE_AUTH_KEY',  ';kqd@-0z{gq`27.6;+n^ym5b9m^HanT>b/N-!h^ =C.zL%>2HF3cLy(ml#M3Hch?' );
define( 'LOGGED_IN_KEY',    '7huUXY7N0:F94B20?Pmrhq2 O-DuR#Y_V|n6.Gr,V2}9i^oG,LYd?b}3R2|T k>D' );
define( 'NONCE_KEY',        'F(=I/}>5@b!3qvi;c6~e}~ =30,Pd 6j$XHTF_-5qN4~i&NvU~ZvKGGnul*r#3_:' );
define( 'AUTH_SALT',        '8uXKFg8Je&/n:y7rU,WHAEw[ZUj0=D3|eY1g[rO(3*CGZKnF#a}4ST1Go`ep=!{.' );
define( 'SECURE_AUTH_SALT', 'cRV1:_]8>1D#@W^{&8,Je%P|q uIBX?R9>X+6dxs 8kNT[76-b9r`t7XNK6F5-,/' );
define( 'LOGGED_IN_SALT',   '3E&uP%vplJ.Z,+|S$sp`X`BxdY{fG<PER$?rXa^~D:4LBxMc~XB?1R7Y420ZTiW.' );
define( 'NONCE_SALT',       'lTg$<]hJ]c93tZciF~*g3[sb$_I,m4lF! q834wmf<WA[co8fAQ9[cKAsa`Ij5l%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_myownboilertemplate_';

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
