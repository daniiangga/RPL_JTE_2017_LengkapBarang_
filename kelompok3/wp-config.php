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
define('DB_NAME', 'cipiyohc_wp174');

/** MySQL database username */
define('DB_USER', 'cipiyohc_wp174');

/** MySQL database password */
define('DB_PASSWORD', 'pT4]5]ypS6');

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
define('AUTH_KEY',         'fd5eegg05ywvukk4sb7lodmpv3ptkm5bcpgaijqx2cp86vfrphl5jqpn6k6laobr');
define('SECURE_AUTH_KEY',  '9bsnpn7jkcjklvadekhftmclvmq4rckxxulrgx5i8ahobwj3slc2ulro1nmijjhe');
define('LOGGED_IN_KEY',    'hwtgguwba1jwvqhryla7kbvkw0q1dmk0cnkbjegarbqwdyeovcjelfthkwsabdrh');
define('NONCE_KEY',        'wj3ivhc7naulwd35p68jpsx2znxrvwqytgszrlgxd0z2u3pspe6nfou5hr565vmy');
define('AUTH_SALT',        'jimnyyttmtwo1ih4dtn1oe3pgn4dejub6ejrgfvb0bohycwgwvtce7epyxtdasmf');
define('SECURE_AUTH_SALT', '35wknwpa7hbdtuccpveafxpuljdmkuir3rznybf2mpc9qzrstnhjmxmnkabqfsfp');
define('LOGGED_IN_SALT',   'waunkj35tclkyynoczcc2lolso7xxcwmakqrcuuekh9kfleuvsvqunno2qa0h48e');
define('NONCE_SALT',       'bhuobtkwalfephpjjtqlkggr1upjiqw6w8v3ysorerdy8htuhopq8ip2cdbtrrew');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpmb_';

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
