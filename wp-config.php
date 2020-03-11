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
define( 'DB_NAME', 'company' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'Z*H.BU(GwmyQy_nK/_v1|L:,[I?YHmx.E%5i$!aC9&8D.&I/WH=-ibE(B<RF3Zww' );
define( 'SECURE_AUTH_KEY',  'K(-BpLZqAY%n`ibBFJ[>HDcZ0?F?X90X3R(*?OT/(7Wf&@DL8ofx!K]!C7+tnTDx' );
define( 'LOGGED_IN_KEY',    'ac2=94o2eC&[1UjLu4RtaRZF:L6!fo3*}Fw.OX;#np:3S2PyF(N&c} =ZrVE79:%' );
define( 'NONCE_KEY',        '0{e;o>?%l8~t8qj!BCdC.EU&)G[EKf^tGb<[G8V7zoVNm08_B&jMrOR%v}e$rSzr' );
define( 'AUTH_SALT',        'OH46>SOoG6iN(z4*W|l[>Kr~rHS6[sIN&440B.!}zyg*RP|p7D`<iGW|Ep+(2h_c' );
define( 'SECURE_AUTH_SALT', 'E4{d+|*91-Pp}v3o5O12q_`u+XQ%8nY[y6a*.KtLB06a_j2U*Lr 2Hs^6iSd{$;W' );
define( 'LOGGED_IN_SALT',   '.W<zl.(v:Qkn#KZn1e9JYl>~Df[5yjU8Hb>n3oCbP-96g~E( fhN6gt!n>q6c|}>' );
define( 'NONCE_SALT',       'aQ(MG=LR!;a<n]TGu@Q.M&4v;r$F(a1}M7pDm<=#G3)K`*]{k=3Ok/;bk)6k`ZOO' );

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
