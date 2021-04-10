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
define( 'DB_NAME', 'wordpresssemaine' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '~0CY94_2ChM~8*`%r,K*~NEgz!ptkL*u>4`h,93jQ?B9qq^H2p|@@bk;*f97]tWI' );
define( 'SECURE_AUTH_KEY',  'WEq4Z{)>{3MZt0)2gE1:~3^a)|$|a6Ue~2RxpBEo>d%,c|QyF0zq0(4H c~/<onW' );
define( 'LOGGED_IN_KEY',    'Uat.BO:+[wu4D<|0XP{@:!caj%HK2KO8eGHGssn&#N8<bwyGe+%yPGRhe$kuxg9G' );
define( 'NONCE_KEY',        '}b-9=`rZ(T ]}aeEuemi<6eU~swt[wiz%i~<w1{n16^yV[ofT~Z<:YfipfhBRH/F' );
define( 'AUTH_SALT',        '2Lg:1TL^}:l M/y!AadETz_;mJMNUIfh;M8PY]v7;IMMKKF2+w!lP{O2@t?k:*F,' );
define( 'SECURE_AUTH_SALT', 'T_Avf3[1r0I6j@Br)(~ 6d9h>AM<`.uN.=6Z3r[P7>C2T|QAv92UFb$B@{7=gm`A' );
define( 'LOGGED_IN_SALT',   'LxV;)_u$^M*_R+~X8p#$N]sk<p*:u!sj1Wd_@L2Y2VH)x#8W/)o<RhtB){YQ~{Me' );
define( 'NONCE_SALT',       '&Qou0%H!Y:$xa%F#&.BcG5K0AH>U.$A1-iAV>.`J?/>cI0A(>7yC!^o2b!K_,{b^' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wqzabe_';

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
define( 'WP_DEBUG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
