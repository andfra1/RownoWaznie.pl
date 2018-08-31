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
define('DB_NAME', 'holistycznie');

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
define('AUTH_KEY',         ' 5Ykj/MKA1oiHy4[!9``U<`+#*{f =E.v1~%*,PW@t4J.6WPaCZrk/Dc`b(tjPG^');
define('SECURE_AUTH_KEY',  'iX!3]q 3zRi=;k=EKU-3QF189Y]- c5hC[#)7fq]ew/#rn&hYf0U3@A%J{KS=iM!');
define('LOGGED_IN_KEY',    'ViE~RJv7V$*4|D7ve]F,$VTk$ozmDnY<68w$p|C0lDe!*asX4`-Tcu{i*lC@ @?@');
define('NONCE_KEY',        '/Kp@v(f;46:{M]9<, ([e=q=-l:xvP1_2EjtLe=}6PiJ)p#?^,mq`)<:PLa#Gn:B');
define('AUTH_SALT',        'CWs(jG`z9Ps#a*SV,.Qrl$<R)@d)!rG=A@s;*LP1L~uv1SW)8qsVd)xVw:j$Cju`');
define('SECURE_AUTH_SALT', 'MI]Zee7-2R)$eKSm`G!t1 <T=9Vzf#Q}df~{~T/@bMhb T>V5U*c2JO1;-}5rq-S');
define('LOGGED_IN_SALT',   '@8zLF}:xBX,Q&KnM7ImNcO>]|;nGPdto9J@Dn^/,~];SPKpaR5J@p14JP$n gc(U');
define('NONCE_SALT',       '5ITRr?/hGCV8<,{c:i-*fZAuvekO}r|q[>,k)z3Ibd2Vs,}=2]Yz?*=?3^,=/DiE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hol_';

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
