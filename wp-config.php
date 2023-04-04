<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpressWesite');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`Xo6E.[qS3^?EIRpjDFnTndJlC_<6qGLhZ>(IThd78v87LR.9SRPUp0D%]HeARUR');
define('SECURE_AUTH_KEY',  'mjEr]nV_s8KVfi0D`c)~-6!Ex{A~@l1v#lWZ$gw8EDDM4x11?R}s]50TebTIh2j?');
define('LOGGED_IN_KEY',    '|KIzRUf&,sh$!tMIxRH>M*;&CYF}~QM*:pgT,;9Lwn|58mzdz!u]h ,GSn<#4/Vq');
define('NONCE_KEY',        '[V)DjI:]_t;x5;ab#DXv{UrJ+Q]Qx]/f.:x.gc>!1YH}**%lH07Z[}GSAJklvvy7');
define('AUTH_SALT',        'RG^| 9rq@$|JB#%B;L0$3eVd*FE1_{2.(?RFC@PPL-YvG@[2?g79I+>}bIj;#?r+');
define('SECURE_AUTH_SALT', '{^6jubi$Dh2>$ iHwHQV*DS7mLv.$Bf<Pb@j<p:W{S-8ewHzN7})0aA*:SS?eYCP');
define('LOGGED_IN_SALT',   'f_gvEIka%iVOlkOb8|y#k<y`dE>UW6h_,oY(;$jfYARaBbcu0CQ-8GH2TiAvIcG+');
define('NONCE_SALT',       'gM Z}m+Z`Ah~aY%Xg2#5a%h(<d3d*iQzl+Q+AkO[cPv&VK%|_3P&VoRAT KifzkL');

/**#@-*/

/**
 * WordPress database table prefix.
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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
