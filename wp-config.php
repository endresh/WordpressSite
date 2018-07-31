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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'u|22Be~GLCtSHw:ovEH[$+V]P^tcJrSo1[/ki|7^X=ZBA1dTa*cfS+F0;.K`7snk');
define('SECURE_AUTH_KEY',  'pi2fu(YC^KZBCc.`AP&Ni|nP$U|<m]C@C{`]RA=eu:XU/]Q`$xWnhHXZIfb&mSZ&');
define('LOGGED_IN_KEY',    '5zAv0sNa`)U8M8w+}6Qug-Ol.kHHDjUOF4xdV3b]_mwNS$@h%)6+|qW1tHWCBb#L');
define('NONCE_KEY',        '#4FM%O_,b0t<!U0F`-ot|6?(9%49Ew&[jX-;1T&)s Y}~8IqBCn0Z7gVyrMLfd7>');
define('AUTH_SALT',        'Jo`%8:xTP[4Co7|>uog{::Z9`m_M{*fjE};j:}dM)F/XkL8yg^;Y9 ~`^o9ql|AK');
define('SECURE_AUTH_SALT', 'VxU2x,362R%Y/pIY&Q$eO<M;:TJ@_ >J 1uVBP-.,KwWuT .[7r}M/;^$l=F6$@/');
define('LOGGED_IN_SALT',   ')}uN/|2*]=?&N)eaAQ)04|:>v.SiruRJl/U9j.YiiO34/1&e&cP60(|y%;7fXS,=');
define('NONCE_SALT',       ' +dKz)<TM9|=+5:?bLc/;qbdOGClMps7MV]&ToRRM*Kb1&-O!9.G@ F9Zb_s2#WU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('FS_METHOD' , 'direct');
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
