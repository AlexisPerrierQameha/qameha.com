<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'alexip_qamehawp');

/** MySQL database username */
define('DB_USER', 'alexip_tycho');

/** MySQL database password */
define('DB_PASSWORD', 'brahe1546');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',        'uCS79n`g_)j}72/:3PFzJ/`_0|~-e4T7*6)n?P+{*WVeji(Q?aS1gy&iACVCg>:>');
define('SECURE_AUTH_KEY', 'w^D)Lt(ALl(x#RDKj.YMvb|#[dGph5lDlj<|55<@=|aS4I)USMS!Zr^6*XNC?#FF');
define('LOGGED_IN_KEY',   'jx^Grz1DdX(3-q|gs|PEPdhW+9LT|,A1g][O cEKvT-a6&PW=Ohq%AU7kjw+%+|+');
define('NONCE_KEY',       'k(r`uQm.BNoLj}4L[Q.>!QS;POMD6f,<d/BLFs%w*Y.lO}M~-1;0[|OI!-b8|.bT');
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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
?>
