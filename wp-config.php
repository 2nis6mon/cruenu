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
define('DB_NAME', 'andresi2_wordpresscbc');

/** MySQL database username */
define('DB_USER', 'andresi2_wordcbc');

/** MySQL database password */
define('DB_PASSWORD', 'G9BEZ0h69l7n');

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
define('AUTH_KEY', '^hV}mwPQ%+%=MVRanRkPGAeejXX]g{_?L/pknxr_gPeb[{Uz>U]&kBXS=Kp=gb^BDHUA&b_EPqAGGmV(m>++^gXefep&d)faS%FZ[Ia[JGkztpr/dRd&f?LWeaXvYwwM');
define('SECURE_AUTH_KEY', 'oOSgX]mJSiJ)]H^n]nt[OYEO|W)Q}q=JoIDwV[g|I-aF=*ZzjYmsWHRIkN|-In/q!hYAtVDXii%%yp(yMCjcs[zEBP!t[w=DXO?L<HQC%]}JRPleZULxes/^-R@vli@-');
define('LOGGED_IN_KEY', 'lX@oJWzt+>/XcaNBv+fsuir&H}dm=ZR$S[ha{h+{[I|fNWd!nXljkq$SaQ<r$NH(C&ni/$sGvl{G@}^a+c(EvR)L(tg>R_iR(=$W+qXU?;[?*aBk!yFn?jTD<DaIUM^+');
define('NONCE_KEY', 'Jw_*=lkJ|ONDs*R=>YxJTL=Isr&HWdpBEe$y%eP;WDD/Ow}vOl?_jW];x/P[!TXaaRqwX=FJYB)kthL){;F=y^=JacW?kvdb+xIP&PrTNNHP%/Oc_T/^ni=v>h/[FXJ=');
define('AUTH_SALT', ';Opq{T[y%Pl!()IWg$%Y$k<GGTI{{k=HsqD?Ve?|o_bFiCIf)CBG<k_?Zshr&yy]$)vqm$$;YNz+SONVbF${MqSTm/fVE+Qld=Y!Bek%t{CFY)VXA(z@-!T@)NRhsMN;');
define('SECURE_AUTH_SALT', '%yM-OYcV-TN+NAPzo&(=S$/(cSj=C(HFt&HKQ^SGqP&cwzhRCm-i<H>tfGqeoq=-GosFvBdQkwRj{<NpjgpZTn;X!cCEnJepMmH)zFL=V/Ot{sKirD!Toa<@IF/S%sb$');
define('LOGGED_IN_SALT', 'G?@Y>k=<A{gHyOO<GuJsbI!Sq;Z_-it;mJxHM/G%bM?^Pgym-Nc-U-xBdKl)/juO?zaHIQ[{jN?tKszePs*sM)S%h}mVBiJvKC!v@lRdcDYm@Wl;}=@Nl<nE}mSUf;l[');
define('NONCE_SALT', '_jMU[tgK{}<RN|Fc(CKIEKKr/xFh_&eKIRpr]?feELLu&JKKN}ZdvYzJlnA*<KRASvi!ff@<J-E=$o--GFbIjWgb@wK(-bii!NmQ!FapFICyfnz^$E)VH]ZRXxCuPMh>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_fmjr_';

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
