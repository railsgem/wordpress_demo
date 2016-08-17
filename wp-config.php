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
define('DB_NAME', 'goooo');

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
define('AUTH_KEY',         'lq!ZwQxmqt3Dd#v(duE&VRsw<%<;&$k(}dJih0m8shsPSjU=cMJAgtvFS(k%JWcS');
define('SECURE_AUTH_KEY',  '07Fsw}9g2?F2Q`S1 LXYPZr *Mt`n+=^I-Yu&q#aRcM&u$nqg2eRAZW7H|>#f6g^');
define('LOGGED_IN_KEY',    'Nh,iCZAk_#ro{hO*CRgy-.yJ4LTgP-0]`4GZkaHVNE$cP>X#|#9BfcVsE[}XlhI?');
define('NONCE_KEY',        '0,l#LL*ksQ[3F.GH#<bfajE|)bT6([kjXVgWi&g#[oz } )z x[P*fM6im*D#w?M');
define('AUTH_SALT',        '?E@Lw)48=8p?*e6,~7c0vRd*&lAfN:6?)@#A/Py>CkprKfN1k[UhNbARy@S7^&.L');
define('SECURE_AUTH_SALT', '75I+W>|P^vajYJhY y9V(=EN|Amq>-oTz;yEC3[b`u=V;|wK{$K jZ`m_w-06xHB');
define('LOGGED_IN_SALT',   'mdG~bFK|xpfINaxUrhlU)Q*eFgg?=#oV9 aK;Uu@t9BDK)l_k$*:GBL64#VIM${9');
define('NONCE_SALT',       'a=_NhtYkvb%{R6$U!Fd@&>dD$$0psjWl~=S{bLMH=g=VV,?%m3N<m(5j+M}z5V.l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'go_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');