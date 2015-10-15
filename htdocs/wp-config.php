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
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '#&y!$T:pP`l+yA|zlt]3NFVtn2#Sjf`@:/m|M]?Kw9-H0sp< kN{lL m~X:lf/EJ');
define('SECURE_AUTH_KEY',  '@lC?qvn}Ua:Rvr#^rY31=Akk}1r8^$<fz=X0:%a-pov#*Mu_pnq?I/|z`(SEe(rF');
define('LOGGED_IN_KEY',    '1!5xES+}2sm6({Xi#4Rqy]qD{VB[$,dEA+5H.R(W+5lAw_`}d@f=TYcQH}kk~=TQ');
define('NONCE_KEY',        '3z!BVD0(S7lm}?;P;U?YeEZ5>U;5<,B,&F-57=ug|(_uf%ERDr=WdI-+Yt>Dcf<S');
define('AUTH_SALT',        'bP12^:T*(4wN_!`vZWtsp/-KutwM{u(+`YCsg#*JB=fc21fAIqsjZHttI+N>G,s|');
define('SECURE_AUTH_SALT', ')j=_1p._K)<nKWm!mX-TgE+~0`I<T|d`0[H;Eiegx-|QsA[#X?Y0TwS>uU5b.J^3');
define('LOGGED_IN_SALT',   'Mh8lOiJ3zKGh5WDRr]?_Nj-6/5q1;@mbhC5~+9,tKvGlNsX,*hCI)pUo)U/Yq~`a');
define('NONCE_SALT',       '6QX!y;XxWxM.LQ`*`G(eZYTeoEB+_ya%zI7%I|Yzt*-=4@na:SnSaU;y (X)f=ZW');

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
