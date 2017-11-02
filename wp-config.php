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
define('DB_NAME', 'PRG');

/** MySQL database username */
define('DB_USER', 'PRG');

/** MySQL database password */
define('DB_PASSWORD', 's5w1OnHvF8CzR0NM');

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
define('AUTH_KEY',         '5w]sP-HCQ5V9M5K=ud|;6jyTTkl(e&AP:=v?e%5#6qx;)cD^m=Ty`UXpn?*,+l*_');
define('SECURE_AUTH_KEY',  'c$6c}/n@;MJ2FV]&U1)>nf^9ZLpZT?VJ)<I=>O-qFsDp9`~hid={Uu;KtKU BemG');
define('LOGGED_IN_KEY',    'Q8NfCTPT4 v3pd_gpDHN-hU|(?pm?-Wi%S?cvq`rk6hV~P|IQPR<w ns3@/,^HRx');
define('NONCE_KEY',        'mP`uDS&n#_@.@NE{y)Zc(%X6cKv9ZxUXSyxc.&8lqkX~B]OOg8U?Wb,GfqxOi2aM');
define('AUTH_SALT',        'A+.O @p{XBevr6,D,HS.n(d-#bNjLa/=FY/kN#ZiByBjP{EdLG fx~H&{~):id@3');
define('SECURE_AUTH_SALT', '.@fIlc5?bU|R;h}g=>?)=eY8jt|<l)tn;3]a^J!tqj&})hcN#Y9|6a(6:@DCl6(-');
define('LOGGED_IN_SALT',   'oa@R~#(<[q#CalM5A^&;X5}(Cb>THv!>0R=#+GGL`VOh(?Bg~n%Wk*-x;!K4oj|Z');
define('NONCE_SALT',       'AzFA=xBUZjC XklfAq}9bf}po4Bv0*!YYIP&-NE{@-B:,`w_n;xq~rW5s/t/_ L*');

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
