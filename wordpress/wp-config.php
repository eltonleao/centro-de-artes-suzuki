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
define( 'DB_NAME', 'eltonl61_suzukipetropolis' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'eltonl61_suzukipetropolis' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'vYHX-TU?oS?w' );

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
define( 'AUTH_KEY',         '|vl{6smBFX70%nUd)481Qkb^!m8NxT?btptceD2}Z:~TwIbKGlgS_y1B;+5{EF@S' );
define( 'SECURE_AUTH_KEY',  'b=Y-yk]y`Lrpzb1#g[]_wi;FMTYkaTO0Je?zBJm(8%LDL|O+6O.DnTUYMj+( yMA' );
define( 'LOGGED_IN_KEY',    '#;aZAPH!1KnS>KZ+,tZrFvu85;HNH,PDslG3;^?]VI16ew({2*7& o??kWQS^.K^' );
define( 'NONCE_KEY',        'O3hb)62GMb|a$xzu$LWxRn:<_@I|~q#uvltXRa_!(g@!^y`rj{)AF|$/Y~fCfLql' );
define( 'AUTH_SALT',        '1=i:7RQn6yk*oP?=dLLd>ZoTxl1aAgd0e-{fsMQf]/xy(#n=`h>+mh1)QWiK+9`r' );
define( 'SECURE_AUTH_SALT', '+k=pjpv%5G9F#(hKu9V@UuoSu,GE7d!Bay8[XX0Q/u3*edJ;$-eX##[|{sT rY`5' );
define( 'LOGGED_IN_SALT',   'dCgu193)=XQApVLs[sQmJiV28Y{)_P(3f6hWpQ5[q#`NrWuo%]o!jwjR$<(C%}D%' );
define( 'NONCE_SALT',       ',K Bt{:N=j@guPlZX<QWFzlHC%q;CI{|tK1/HkOh%+SX{{SEx{b)KSln(_WH.UlK' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
