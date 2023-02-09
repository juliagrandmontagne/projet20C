<?php
define( 'WP_CACHE', true ) ;

define('FS_METHOD', 'direct');

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
define( 'DB_NAME', 'db823683665' );

/** MySQL database username */
define( 'DB_USER', 'dbo823683665' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bHYqFfQviIZUZzBjStiK' );

/** MySQL hostname */
define( 'DB_HOST', 'db823683665.hosting-data.io' );

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
define( 'AUTH_KEY',          'I6<qr8{{ZRnO,TZikWW=n(=0Nq~@r(.H~W`Q8j!P ZZ#QJjheuzD!Nwg9v}!|8VR' );
define( 'SECURE_AUTH_KEY',   'XnP|qR,|n:SHP!pMYowd/H:TpF4WZz0XXkvvM[/`LWQx|}A|sX,n9#y-&}(jP[0f' );
define( 'LOGGED_IN_KEY',     'QVE[&+=WbuRdS3SADH2{JNrx!ED0t7wzc[3xftT&lf@!GP1Zp;2vR$dI[_D8SEqZ' );
define( 'NONCE_KEY',         'LV~,&$.s(>W*rw`o=ws+&<E;Z31FR9~jN<{w,5rvQ#2ko~k.*p[|x[TJbAq/TOyf' );
define( 'AUTH_SALT',         'V_Gx0D( nCV;wolAUZ)]@/L!pyQL#C%IIU<)X66|.*p]cDLBgaAP8my1=KSs0va}' );
define( 'SECURE_AUTH_SALT',  '3?`m_@lnVQO*jd.[twk^?m/@iqMB#@!:QT;$!/>=ymwx;DxX{1Mv^c g$Msr%YF$' );
define( 'LOGGED_IN_SALT',    '.:4?$]3n%0PB5zI= XorXYhC^CY8[61;)~Y^jbX8k6$~/8W9*AQjXy|!Z.,sWKoe' );
define( 'NONCE_SALT',        '=?y=iggg @V7Cgu@wW0#{RrNUek:i0BGT`CNLV<lZF Kv^TEKXwNK=<Qc]gGN-o[' );
define( 'WP_CACHE_KEY_SALT', '[n6?Ei7)#lYmhny9]{V$x_62A:);t`,%er(E-jvJ#[*);nS+3Rt0u!nLh#~NnT|i' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eWSObAJZ';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
