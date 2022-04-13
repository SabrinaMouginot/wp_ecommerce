<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_ecommerce' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'Ptitesab' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Grenouille//52' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'eX&Uhn^W-b2r~3X!#(zrChPu!0n6iwDp|v[DZyy@R}rL-,bj@dhc|V|$NcZ})}^c' );
define( 'SECURE_AUTH_KEY',  'ZIE&,OO_T>F=;i~24BE:>K?%na|,R.tGnGF&SpPheYFyW^e{I0?FHm[+UU4C<C@n' );
define( 'LOGGED_IN_KEY',    'L4Gs~-4-a1;movO/leWi@e!~fgc.^PjKl-R3F=fc[]m.=(*!F21Aqbhu79sDd39t' );
define( 'NONCE_KEY',        '$uu<jHWnPyuQ3R%B;8@jy}Sk%N2NCC(3x!+1#rV,n+G,bStr~IdnaHZqSy99jgB+' );
define( 'AUTH_SALT',        'Z/s{vyUul{}A$pu1Hd*D`k:X7 dt,rF3LBvmT*>V?.x^&%K}x7Yh5}8{{k?)!V@/' );
define( 'SECURE_AUTH_SALT', 'jpBw lPM=?mvai-KY /JoJTNhgtGB.VoYKtw55oId|-:,Cvc2op{I.nBdVHSiAef' );
define( 'LOGGED_IN_SALT',   '8#,p;hm,Z)N1_|8C%V-wEDf/P)(^p=`zBe |mD#-dyqp-sJHlJ>nXUV4<-wlg[-8' );
define( 'NONCE_SALT',       'J^^*N!<$zZwNQo;^@@=$Bvqcm$6(0bSZWF D?0&0`|mGU}ny>[m%zerz%A^(OPu*' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
