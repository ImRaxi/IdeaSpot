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
define( 'DB_NAME', 'ideaspot' );

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
define( 'AUTH_KEY',         ';aPeSx_O<.X3R8}n.fVs&Sd>S!UyIxU!tCme$U*zIz1-F}=Ts(i-yu+d1g$E?L6=' );
define( 'SECURE_AUTH_KEY',  '$#Hmhy~gEY1;,mAnNH~g,9BcK4BCxBT(UM-)oe<qfvk v3b@;D6%^snj9(L@o*eO' );
define( 'LOGGED_IN_KEY',    '68M&uy80cE+<`!.dx!XHcy]F:l9,kduXA}}:M;Ll<nF^K6x*A:j}=K=Skw./iq)w' );
define( 'NONCE_KEY',        '3|~i-ZyO/jEPnTb]ra}@|,`rP2~N:l@|nmgNDMOhw#i W{D,<@6QXRt,MrN ihJ&' );
define( 'AUTH_SALT',        'I?38YYQcLJ `TBLA||,Kx:ldB!Ey1|2cOnJm&7yI.e-#nFwjeBujpN<Jq3$E7jpc' );
define( 'SECURE_AUTH_SALT', 'fN?hRuFLFHg~!YCC!ChwnZf;YhSB!Y90 h3{mIoN!dKP83=^~9K0/[1z@d/fCC_V' );
define( 'LOGGED_IN_SALT',   '(B]g->6j{P?ia.T#~3vWpfhR+-4+7J *D)8LT8[dw t9mOw=*)%R+2tqeSWffD->' );
define( 'NONCE_SALT',       'V@ b`p,H:2F#2pyu?;/9?x }s8`&0G_f|&![V<>.SmGXN$y%QJg&[f*5f`N`O39M' );

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
