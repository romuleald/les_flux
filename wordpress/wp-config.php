<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'lesfluxfdpflux');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'lesfluxfdpflux');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Lesfluxbdd1');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'lesfluxfdpflux.mysql.db');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6me_u/wqZp81Q/?<QT2}aLVMc+)n?eB-Q~CtvP=c}=iRP#=rO.]h/Zd9ZuC2<&Ia');
define('SECURE_AUTH_KEY',  'RMfkZh,zWc9#^^ziZ^Htx{F&/,bfn1w1>v[O`OB;Ch&S7le#S[8[&{Dz)e?MdpDU');
define('LOGGED_IN_KEY',    '@;6L<Kp]]D3TfzA_U<on?T+3(}_sFHWo%qb4tvilqk/6jz>9^/7t0qbkA!|,r.[@');
define('NONCE_KEY',        'fL>uQtk{PRlIUaF%>UR6IP.LLUj#r;P2F!XCNJRkP!omB-@vU:VckVW ^Zw*P!&_');
define('AUTH_SALT',        'M|e6&U.r0B,{a1>@/>Hrwj@{iMfHREu(A`|yc&AfUrk>G.vZ7@ /NMe<rU_&}U}q');
define('SECURE_AUTH_SALT', 'eB,]P?(EofUbbXOG;[YVJ?cc12`J*pMY/?c16pz`at.IL7Y=:D<6}Y4=%489xy#u');
define('LOGGED_IN_SALT',   'RG9.5NC*jAoa-|#iww-g^eBQ?@J:S$UEP@n}3/nq*Rq/!x3Uou?q7+n`B>,6>4(J');
define('NONCE_SALT',       'vu?&Y%X$I9_gE_acXU3{zK!?vc-PT>P{#A?KtaxfQ<*!m@z[0:Bw6taEJzA}[n1d');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');