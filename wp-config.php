<?php

define('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);

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
define( 'DB_NAME', 'dbu1394375' );

/** MySQL database username */
define( 'DB_USER', 'dbu1394375' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Bluepandadigital' );

/** MySQL hostname */
define( 'DB_HOST', 'db5006686749.hosting-data.io' );

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
define( 'AUTH_KEY',          '4yL.}N*#)=>;RmxS&NhIrrZwd:[tAo=bnt+wa_kzQY0/iFF/u?F^]Cp4x5Q;vv6K' );
define( 'SECURE_AUTH_KEY',   '89]]EmNmpi(Nr{ +)sn<!NdJdgfYk8lrcr2VT-/RU%s1d2efcH)nu# PyFX+ v__' );
define( 'LOGGED_IN_KEY',     '8]AK3pw&|HY=;Ya(rjqOI]Wa>bDKZytBcL}P!N;.AI?ju-hh jd0=6ox?}d@>pRF' );
define( 'NONCE_KEY',         'wg].I*y:J>Q>n.AbpBV7/&c^ZF7G!_v9ge`]S/T~1qRxxweE]~DRdxZ(UOkdA?u3' );
define( 'AUTH_SALT',         ')^&59{>j}<R*3I;WJE?)fqlV&K3)>qUiDZ/y(_,33wmF[0HA_0QA3(&hBem}KxAv' );
define( 'SECURE_AUTH_SALT',  ';o7!Ata6voblFpbpD&`3Debnm_1r4;OtL#{gGY%*DYb@jzrA:gA..<,^9I82iA*4' );
define( 'LOGGED_IN_SALT',    'dMbk@+=:)b+Wv_zKnvV^c_6)=^:Ck|~~QB~=H.{iB/P!Z$b8j`8>G=irPT,gwEvB' );
define( 'NONCE_SALT',        'AncwHrX/_mPLB|6:|-a3|!b4b%|}Ys_ .{]d7vu`?[U c3t;yL|Cgf{]WW7qCzg)' );
define( 'WP_CACHE_KEY_SALT', '6~%Q9_8C1htj#E fw()ra {sJv*iUc0y[!WwmY1J>Q#ctNL)/%%lyavE!:+|A2}C' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gpdgGEMa';

define('WP_DEBUG', false);



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
