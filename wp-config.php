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
define('DB_NAME', 'nuburgerDB9lfwf');

/** MySQL database username */
define('DB_USER', 'nuburgerDB9lfwf');

/** MySQL database password */
define('DB_PASSWORD', '5QbYh0EBKe');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'KswK5-Z:!VZO!hGN}koR[:wNRGvk8C}kJ!|oNR4rvk04>VYN@rzB07gUc,z@QFIvj');
define('SECURE_AUTH_KEY',  'MvE^bxqA.mLPDpti;2#PWL+_x9;2eSW_x+ODHthlD#]hHO:s-S19wWd5-_hG~|lCK');
define('LOGGED_IN_KEY',    'Y!svU4rcg8@UYN$rvM}jnc,zUYMvjnF,cfU,y$U3ruj7^bfT$quM{jnb{*.XMuimE');
define('NONCE_KEY',        'Cg4B!YcF@!vFNBkrg>@,NBJznr7}0nQU}vzYBF$bjB^>fFMmMT{qIQ7uTbA*XfE$');
define('AUTH_SALT',        'c,>gFN{rIMnrU}yXbE$^jBE<fjY{yQTIuym37{fiX*<+E2AjXf;.<THL.mqI{;');
define('SECURE_AUTH_SALT', ',@F47vYc4zYfF$^jBF>gjY{,MUIryn7}fjX,<$EMBjrf6{XbQ$^uAE3mqe<.P');
define('LOGGED_IN_SALT',   'oG0oRV:sKN1RU8vzo48}YcR^>@FNBkrg>@,UJQznr7}0cQU>$^MBFrfj,>nQU{uy');
define('NONCE_SALT',       'DmL];_PSHpem;.#aOS]txO25tSa9_#dDK_hpH#;sS[1wOS5twZ8C|dhV_|-CK9owk');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
