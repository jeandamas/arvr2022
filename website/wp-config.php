<?php // hey day

    if(isset($_SERVER['HTTP_X_FORWARDED_PROTO'] )) {
      if (strpos( $_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
        $_SERVER['HTTPS']='on';
      }
    };

    define( 'WP_MEMORY_LIMIT', '128M' );
    define( 'WP_MAX_MEMORY_LIMIT', '256M' );
    define( 'FS_METHOD', 'direct');
    define( 'AUTOSAVE_INTERVAL', 160 );
    define( 'WP_POST_REVISIONS', 5 );
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
define( 'DB_NAME', '633285_989fb7906559b132d8a0915a2ab55cb6' );

/** MySQL database username */
define( 'DB_USER', 'easywp_823561' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PIcPByvVtyQyVDQI+TdAMU9/hBzpCESIWNf24vKxkz8=' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-cluster-2-mysql-master.database.svc.cluster.local:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'ynG;-NBJ<x?gs>+eWIsE3rLKOIf50pE+BryZ{1])%NoN&%]itsZvb.Wj4UZ`C_*W' );
define( 'SECURE_AUTH_KEY',   'hFotY!H6{&J}-+tsT^[jrKPGQ/7uc)o`{|;RriXEQ37x4U<~K3xa-[:y]_.gnoF^' );
define( 'LOGGED_IN_KEY',     '~3|EG4&:PQ>BjjGW=>OBF>>SBko^v2Y;M3HdCBmZ,{/Ly3vY-jQ/n5JOPP+b_mv=' );
define( 'NONCE_KEY',         '?#1Jhr-6MY4]KO#e_0X]cHg3=2A]tvP($.Nog7S>T_+XduL4gBR2A1w(4^|yT[yg' );
define( 'AUTH_SALT',         'iXP&HC&.;j_|/NJyyM0g]F9)E0Lq`WOvKk?anwnmuX;]o,gWJbrS5F<t7r^k,r|Y' );
define( 'SECURE_AUTH_SALT',  'SIp5}n?~cw=4ZlqM`cP7M;t+,t`F~n{h<[HJ!sdVOMcBuL8pC&c0IL?oD.+4Yn}1' );
define( 'LOGGED_IN_SALT',    'a8<XL*GZyfkgp`jE5XRL]AB+C#%Iu}#+-9HwneHzmvqp[-0:aZE-%m*Ug4HXnG-:' );
define( 'NONCE_SALT',        'q^X:qdg`MenTe2_ga(-pBRvL9!6CMNQm52DQx[S$Z[rijl&VcwBKmLi%j<c)JQX&' );
define( 'WP_CACHE_KEY_SALT', 'L{(,t:B>8B8N`Y)@hSZ7Nh9&uXBLD0heHeLXc(60qlZ|r#.w,.d7@?yqWd6j|:nM' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
