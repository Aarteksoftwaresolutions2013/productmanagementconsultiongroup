<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'harshita');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4$lun.4x0WY(]1#)[Gwf8`Sre8ul_6K+VWIZa-SsW4$|VUPOvXJy-GcX_|+X--bo');
define('SECURE_AUTH_KEY',  '~s,,Ul<tXsy+ezD+<-10C)kc&>&^*Dad+W:>|4+=?^M!S:/m=:6(`ya7:g,FqNH3');
define('LOGGED_IN_KEY',    ']kvm}pTIv 74/g1~i7+<r{DMHymsG-FeIdX1|G+C]#FH~@%g-wb.+O%.c*!8?e5q');
define('NONCE_KEY',        'UQBEr3;8sd~1W&BZ/WtUhr/&J ?]eszQ=+Z0-*A`sq0n6NZ}[-rTW{`3C16^S>gT');
define('AUTH_SALT',        'gkS9siF:sh,+$f%fw7P;O?R#iQ!un6R`B5sSSxSI13>X$!vZ!tyK|ehIo_(sT}l_');
define('SECURE_AUTH_SALT', 't&FSXDqzQ;.+DpBe449|{S_[$ O^PrL4^t|UB)9H7-Dnj+[{feWq=Q=#sY+sl!+)');
define('LOGGED_IN_SALT',   'hQ6|R0+FI18% CO#Io>AAh*]QGhkh|!=v),!Vbi&mfo50_%PHZ)`I06>(_JeTx>A');
define('NONCE_SALT',       'oj(Br/9I{-ndX1UlJhMmsO,Pbc((:/?b~hnFqWJUvi_Va5]jxfX[KVm-mE6`FG<#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
