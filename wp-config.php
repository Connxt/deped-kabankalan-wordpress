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
define('DB_NAME', 'deped_kabankalan');

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
define('AUTH_KEY',         'LE|^cewPl5,oiP|%t]CVZ0d)?DtCXe~5G<-.psCP5-B!6#[B+;trg `nF;{Yt-ms');
define('SECURE_AUTH_KEY',  'zdCB(k|l:MA*3h*I-6)y1Z4Wi(<3,Np@j3@7kVKuoUF<-=R,(`A1h`_Hf04D>>sI');
define('LOGGED_IN_KEY',    'bg6zDa5iPa9IZ[Nxsdn9&i-3j@TuwkabC1_:yKBUqr(+2@p3TpRCP+,7!OpHrQ5p');
define('NONCE_KEY',        ';ae_{qwlbah2Q!:?M/!v p&.`r0=L6ataK8)R+^VzK=Q-%?^@9q,r73-)zP&mgp^');
define('AUTH_SALT',        'W:*93Kw@O>h([<H~-Gx&$Neucp+hXdI5o<7R{iTo*@)LdK?e8e~c}>C_bwY5rwaX');
define('SECURE_AUTH_SALT', 'atCMihMT#qfYnGxIr<q2Lv8JCH+M.HtQb%6DI^VY3zmPx^;Dv@6QqTTj}X+!c86|');
define('LOGGED_IN_SALT',   '#Y[+6-,A%.6-6we]!LVrB/t-I~.8/?6W#|-9+3jgc|M&N6EIK1.dUXlk6TH)}Mg,');
define('NONCE_SALT',       'GPEG^zU{+o1[0P(%W`9B&Yfzpjad[Wc&?.olC9U;J9Lf>FDe=]ijt4rsB4@..Ds#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'deped_kabankalan_';

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
