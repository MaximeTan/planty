<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '1dMfQfRlnEsEnK[h8?yO9_,O|mO@}8?}$>|o`c5_B1qG!f$a>|yAcK)C/e3!%hP&' );
define( 'SECURE_AUTH_KEY',  'O8]`54Qvb-LH1p[^,TZ23$4z:Q}~BYfE4`C3J3L#B?_;C(<}=IE$$1<ivu!m3st;' );
define( 'LOGGED_IN_KEY',    '.JZOAqC<N.pHyzW3}9)#@AO L4 )^)j<>FZ~SCVM2(:*ZN[[g-Y^a0t[>J$$+SLo' );
define( 'NONCE_KEY',        '+(*F=w67LIo&L,K-Z[h Bm,}!q(YM0lIkqVpmH^BadcJ$rP4}LYlpMcL}3|Hx(UM' );
define( 'AUTH_SALT',        ':Yv-@99X)J]]A9AY]#x!RC2aA040gLNzSldI<figCWCUZ`q.Bp_Ey|H$EdA{ay~*' );
define( 'SECURE_AUTH_SALT', ']hww![4qG>Szpvn=mKcG1,?EMwj7wcz,!c51vX_~E8~aJ5]U#4-LQDq(Ha`-_#Ue' );
define( 'LOGGED_IN_SALT',   'q<lnG* M<V!wf:kQpeEv!QU%9D,DX_r9NLK*u.%w!x|M7PVTT[J,cq=q7`$<i5 p' );
define( 'NONCE_SALT',       '0vB^0UFT0<Q,{B71j,W6ieG{PVUm3qUV)!zxmES1(mQ=9bX+`afFPe<TXHZqJ_/-' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
