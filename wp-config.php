<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'jhs' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-qvK:6+C-R,[!<O&pq:qqP#f>yKg}gxiz!~~=SlSW?b`UW; .|`EODV;I91^,?d}' );
define( 'SECURE_AUTH_KEY',  'JY&eP25L3<K( !hIO.$/Z83Cg||xvM-ui4`tLO%{K6f|P [5CyV0Bz+7SKDKI7T ' );
define( 'LOGGED_IN_KEY',    'C/o3iuTFsUB)AV@tr#$_BKzu.+ K3.0`&QpFLy0DDIOwmOiy#?q,wWE<m^9c~XfM' );
define( 'NONCE_KEY',        '#xR0]Lbfpt}ab-4%Ub#K>c=X$!F`ZPWJ //l#6Y2]BI=v7<7xpPuS{ s.<%>I|<L' );
define( 'AUTH_SALT',        '{6o%6or}@0c!-!RG+#GEAz[7:hespS4?Iy~Mj,jYLGbDqn^V;80S_`uDA|EMO#JP' );
define( 'SECURE_AUTH_SALT', 'Zv]VrWju]ep{*/$nua}dSSI>^G:.@&99R:B*xlEnEPeMZ6ehW#YHQ4=,oKAVST{2' );
define( 'LOGGED_IN_SALT',   'a?lp]/CI9[d/~KOe7~c#plDi~X[afur?]TU^NZ<dwop3m2AC]CzB.G(G*kf73g{`' );
define( 'NONCE_SALT',       'CK;)Z=HNEpJwMIj]PKqx#@n.e]~ %a$46g{[GLk0c1!@&B/Swl-zm&,~2#FC,eWJ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'jhs_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
