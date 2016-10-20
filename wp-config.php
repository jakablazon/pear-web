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

$domain = $_SERVER['SERVER_NAME'];

define( 'IS_LOCAL',   stristr( $domain, 'local' ) );
define( 'IS_STAGING', stristr( $domain, 'stage.' ) );
define( 'IS_LIVE',    ! ( IS_STAGING || IS_LOCAL ) );

if ( IS_LOCAL || IS_STAGING || IS_LIVE ) { // there is no ssl
    $protocol = 'http';
} else {
    $protocol = 'https';
}

define( 'WP_SITEURL',       $protocol . '://' . $domain . '/wordpress' );
define( 'WP_HOME',          $protocol . '://' . $domain );
define( 'WP_CONTENT_DIR',   $_SERVER['DOCUMENT_ROOT'] . '/wp-content' );
define( 'WP_CONTENT_URL',   $protocol . '://' . $domain . '/wp-content' );

define( 'WP_DEFAULT_THEME', 'pear' );


if( IS_LOCAL ) {
    // Local Environment

    // ** MySQL settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    define( 'DB_NAME', 'wp_pear' );

    /** MySQL database username */
    define( 'DB_USER', 'wp_pear' );

    /** MySQL database password */
    define( 'DB_PASSWORD', 'wp_pear' );

} elseif( IS_STAGING ) {
    // Staging Environment

    // ** MySQL settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    define( 'DB_NAME', '' );

    /** MySQL database username */
    define( 'DB_USER', '' );

    /** MySQL database password */
    define( 'DB_PASSWORD', '' );

} else {
    // Live Environment

    // ** MySQL settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    define( 'DB_NAME', '' );

    /** MySQL database username */
    define( 'DB_USER', '' );

    /** MySQL database password */
    define( 'DB_PASSWORD', '' );

}

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
define('AUTH_KEY',         '(mJtxW]j9t}-2-Dkmqed8gh,pi/Y1V8< jW*)0*3#P+DG%_`JaEw<Wd`V.+N6e-v');
define('SECURE_AUTH_KEY',  'Y0O5+z|,nUA(|eWS$W3`Z+2#QoFLz(&o+pvCDm1+~|CgmPQr>8L;wrrx> XEs=:N');
define('LOGGED_IN_KEY',    'z/0qWGoo-z,lP:7~wU&ophBlmo#[_gA79w+9TmYY(Q6:QxZI20/pn!8K$>FIR+;m');
define('NONCE_KEY',        'dJzUZ.D)xTO-=z[3=X-8Ao-6`0$9|u9<YjOdD}M]-]PK|;q!?I,qXl^TkNZ_lXcu');
define('AUTH_SALT',        'k0|,[&ste?6o7g*N6*q,~1+{8C+Ly`Qz{:^R^[~|o^WfnZWEI?+{/OBg$o$OX3>A');
define('SECURE_AUTH_SALT', ')&.Tn-FKm6`ZIry[~] |j_urcl~P*mP,[L|i^*$+gx2jE?8f{eF]HkDzj>x.~`j8');
define('LOGGED_IN_SALT',   'U9F$Zw2X+Fh~O9jSMx+l)wTV)MhM,t$+mbj5Wf($/=8O^b4)^qei+YsIq?m:BZnR');
define('NONCE_SALT',       'EP{?#+1Y!FZX8N`T[!+T2J./=+y*qERC=BF*cUx/H:h<qBA{,niF2tG?bRdudYZL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pr_';

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
define( 'WP_DEBUG', IS_LOCAL || IS_STAGING );

// Prevent people to shoot themself in the face
// define( 'DISALLOW_FILE_EDIT', ! WP_DEBUG ); # disable plugin installs and updates
define( 'DISALLOW_FILE_MODS', ! WP_DEBUG );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define( 'ABSPATH', dirname(__FILE__) . '/' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');