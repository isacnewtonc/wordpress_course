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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'curso_wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'devisac5');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '4hsobvqi@2018');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'EC2>o=$}r$v1fpOtpYmV4(z6?%.KD2it-jXL|zS_>al+a0k$qeb}gcMwA`8`#6;o');
define('SECURE_AUTH_KEY',  'HWTsHpw3&xMx9U1.+Ao#uRA.f]j7&^Z:?Ai(`s1NPBG*l.?@RR6D!M>H@xn)6PNB');
define('LOGGED_IN_KEY',    'Pzct Bq37T2Q%]81tDaG`>-jeohKryU/t.)JQG#1Jqx8J>{wVFnctycg>Z$q<w,Z');
define('NONCE_KEY',        'O2wIdA%k_4mng&Zb>JB~LP9:0E{K|E-LDA=3.& ^n_l;lN))<3Oa{;rBH-G+#5BS');
define('AUTH_SALT',        '_|vWXU?yC_pBW@UxgjWhAx0%gTWOwUza$`2QOM^-XR^t6xj|^H&0|omlf>0.a(jp');
define('SECURE_AUTH_SALT', 'UF.5$6S.R.?4u{+Az<.=l|r/Eb2{ZJBB8Ck^Jfc;,~6j [M[Y1TE||+QBIc(!RHS');
define('LOGGED_IN_SALT',   'R7>j%(RxZ&Ks9]%cCONj7LYTDg513467cl/4PX?>|nU3+y|6C%BN.QO3kP@jPc0v');
define('NONCE_SALT',       'pX&zU/[hA}3,>W&-;4--^-@J^OAzXM~/cxY(wj[Ad>i{vX$4cH.-p<aIAx.88o@2');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'ne_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
