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
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'hitit113112');

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
define('AUTH_KEY',         ';1s.u:U5MT9mg8C:;%C{PMmZM|#M)9.p8m:yeKs|nAjJ*/?#GMBRdbv<NJvI}voM');
define('SECURE_AUTH_KEY',  'xDyVfXML=ze0Zg~D>iemSw@)0H%_WKq(!S19(/#l[JG}`?9o;+:Z5>f[QKVxkfa1');
define('LOGGED_IN_KEY',    'ce]atuY$e)gME ,_s3TuY(`*URXkiTYIR4ym.*YznTK`0:;r8;U__Neuy*x}>zF9');
define('NONCE_KEY',        'A2wm2bV#5o*e`-Xpv(F q^_=_%Dw^ee=/S=L2w1*:wO|5I~+?Dx3BEx Sv[c6RGK');
define('AUTH_SALT',        '8`I^q/F%}fULDS=v%69bCQ6MuMZJOo&.-&k?Py~R+soF0Fw|N(Wmpo%&T]wv:p&P');
define('SECURE_AUTH_SALT', ']j[w(RJ.U0[1V 7l=xA(&-_xSI }D7?)%66r:8a%M,`A3:)zc2,<35MXZ`hw9Q1^');
define('LOGGED_IN_SALT',   '%AiK~8hu?2&#9<7,u#=d4doNA;7=F;sU|<8_[=$>b_?AM$pZO6I-nLwtT<)qJ@pt');
define('NONCE_SALT',       'PaN;1XGP&-8>MjaPM1eb/kh8SK4D!7ELAAKzDJv0<4:J)<$>s`C!L%t7]&MTD3gE');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
