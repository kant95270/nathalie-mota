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
define( 'DB_NAME', 'nathalie-mota' );

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
define( 'AUTH_KEY',         ':oN,ZfN{=imFo4Qtd34%LvbX,,8x6HaQ+hWZmGW3lc3,0rN;R[mZ=iwp|uV4?Q_l' );
define( 'SECURE_AUTH_KEY',  '%o<=)xd1z+aG[oq[k8A7poR8%6F_MVQC+4>1(a$*:!mOMW!q+s)xZBKy|Vadcy4|' );
define( 'LOGGED_IN_KEY',    '_=NnW!aqkp&!y4#x1@PQxK;,pgmGM$U5`TXxmxp_Kg3<Sj&lpWx>8G>;^Mpu^!wo' );
define( 'NONCE_KEY',        '^0z.;^b&q)d,m]2<xm]UGQ%vW%K4#Z+|L|M}F,VR#6@{J[fcyo@ZV?%S-F@J&ur1' );
define( 'AUTH_SALT',        'U6K~Fk0qLtV<l.x1Cg!W$KFV#O1O)sZ+@@72URAZL-Y!?JS$PTi`_gwC}C}kiuH{' );
define( 'SECURE_AUTH_SALT', 'tjYNqs $g];[oazlaSUdd5{6%n=OBW2B3jKum <U:jnV}OX;4[[c+}ru;q8C$(W`' );
define( 'LOGGED_IN_SALT',   'auq{cLi`<2S9[@]SS{#DnWvPrT^Zu$LB@p&+aPVVaJl-k3&@tNcuJpuB>]zM*X*Y' );
define( 'NONCE_SALT',       ':)}PM>_%RYJvs~7Hb=.n^KB;Mu{~#w(OR$B]Ihd+1!u=_R).A#0)6 l`(,UvzwXW' );
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
