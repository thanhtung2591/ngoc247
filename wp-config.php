<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tungseoc_wp89');

/** MySQL database username */
define('DB_USER', 'tungseoc_wp89');

/** MySQL database password */
define('DB_PASSWORD', '76LS9PV3()');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '2nbpcxyqllmp5hvqkpfvzlvmp1wxqw2oafufovqfcudcotwdxvaxkftqnkmm9pjg');
define('SECURE_AUTH_KEY',  'yy04hndchqfkvppkpc9c2gma47wh4rgaxcj3utxucilovtltd6nmuzvwjttagptz');
define('LOGGED_IN_KEY',    'z6uz9j4wyjd9mpqtrfq2wpo7mcob7hpap8cntlmnkfzptlx2tscij2oc9jybiqqf');
define('NONCE_KEY',        'rubjctrsb9bxhlok5yckvjcb51ocv6qvft6hozqc2jqq9tloki4pjzyux2r9hdt2');
define('AUTH_SALT',        'lhy835npbrozqdtpg0c1azejnqc8s9hcjdsqnwfqagswiwigzjct8kmeyikurwjn');
define('SECURE_AUTH_SALT', 'l7l445lmfsyujhalrpi48wagwotwl1bw06uh42t1b4dssqtmehn6gflctoparutv');
define('LOGGED_IN_SALT',   'uuxrzxli41deqalabkersyyinqhwxnbbaa0tqaxau5js4l63nrlasfxujisratgu');
define('NONCE_SALT',       'szu8gzxrhhcegyhc6q3crl1orenfjozjkcixwkstkiodfdqlwooii6jinuxqqlif');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
