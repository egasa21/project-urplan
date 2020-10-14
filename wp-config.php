<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u147595249_Iwp4p' );

/** MySQL database username */
define( 'DB_USER', 'u147595249_mkJ9B' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kiWBFA4goW' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'Ws:I_+!rQOdGS2S>8)FS4U-O*A+@KYC)fV=tz^|-Qdq8PYU#(80977]k==LT}1$X' );
define( 'SECURE_AUTH_KEY',   'P^EiNP1pq`VQN8bJez:9!6PIhh_%YXWt,q-[5e*$6[(ST_RzT~Sb5|obgo-Ptz=e' );
define( 'LOGGED_IN_KEY',     'GHYih5.C4n$K$S%ax9_<&fKC?u2OynyQS%nr=hy)V*581}0,eu}jYOU(`SdiPTi>' );
define( 'NONCE_KEY',         '*%jn-lVbjNn=*j?C~D}4(s{$HP3t#&{UGEo`zdGq0DF(UwJp#Cj1hhv=|i+x>vPf' );
define( 'AUTH_SALT',         '90rsgd#!p?,8bJ;I=}XaK|UL [Be;,Q@wgRqSBL#f.^V%sA*/,,L0L@qlUxlLgWP' );
define( 'SECURE_AUTH_SALT',  'S)9dSQ9-6F71^gpKC<vr1|Vb5!iGyq(M9]9+KvTapr~I+p$JZiB58KA!n]ehiQ }' );
define( 'LOGGED_IN_SALT',    '(=Q}z%fJLq4%]IB 4~x|7lKYM{8AWBi]7SiBXS(Q*N:xO? 5x<:Yg dgEm:;d5,w' );
define( 'NONCE_SALT',        'o?b*q@/` ~c^#DK|s(E;#wuoQFpe*#orJfWbH!B_<[[b!v*G|*92vGtKwA>FMaR<' );
define( 'WP_CACHE_KEY_SALT', 'buiYapgn{K=fE#_:8!CX}o[E*LdrwD<t!:]u%}vZP_H!H#0H4I>AmUmwkb:6AR&)' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
