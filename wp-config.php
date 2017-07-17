<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'clarissa');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0:}y/ IU{k3S=-SnQsxT+xh_:[hNW7*AR@A0VeQ74J{+(:44WI1l=n0XkM$.*c/C');
define('SECURE_AUTH_KEY',  'HkC_L,nt{q_KJh|x3Rt6q>X{>KiR9eMj;+Z>[^9H/BU5hrf(w.q^4q#uh;52vl6H');
define('LOGGED_IN_KEY',    'j~lo6:Oj;,oKwqWzO6>o@f8xql8ebDvn}gEs%^VDd#]e]<W^,^iffA~nR`Ov:]NS');
define('NONCE_KEY',        '%9a:)Mv/]--2@^Z7 N8Mcaeg#9w`3<dHN,rTGe1k3j.n;,Y,*jIn!LemEuM4/`:-');
define('AUTH_SALT',        '8*{d;qG)Coh)`b1}CkDK XTA0Fb$k1=kIjQqUEV3^lYLB78+WMV&!j */>X#a<xS');
define('SECURE_AUTH_SALT', 'A,)`o2o6wu:k r@L^wNI>83WTT~aZfxU <> o`-6P-=|]*:S+b#OWP*jl3xiXA9#');
define('LOGGED_IN_SALT',   ':4q^co-PJcX-1}Z((WZxskHlA:|63keS!RPz 4W`Yyequh7+$Ug]s*71V=  YB3S');
define('NONCE_SALT',       '/)]naxsa:KRrSo>?qY9V%C2a=&2S.5rA9R@89n_OXl+ECWR.J$A*:y,OMLNmfGdM');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
