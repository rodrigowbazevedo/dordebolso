<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', substr($url["path"], 1));

/** Usuário do banco de dados MySQL */
define('DB_USER', $url["user"]);

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', $url["pass"]);

/** nome do host do MySQL */
define('DB_HOST', $url["host"]);

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lFSF?cf9tb6G!8#ZD:ih#rt1HVCxrk#{B6eq`B0/2hH[ua;+!G462$)IYKZ]N&YX');
define('SECURE_AUTH_KEY',  'c;tQKz bNuhB@O#A5tPR)wPm@~jr4~7x~#.UfhQLYb0a@-z~HvNQ3c0NC|SJ0<]9');
define('LOGGED_IN_KEY',    'yd6-|]qZxra>O[1o,cpe_2_ltgM3qj``7rvC;JTid&;fi`RQT6hRV!X%W;gFZ.M&');
define('NONCE_KEY',        '4Vd3g{B$},@^ZK fDhA6nAs8/;_rZ&foEY|o^Vp9fcvIU2=B$@Q&vsLZ)0}{Klt{');
define('AUTH_SALT',        '&u:$j+R[fuSpLi+%9Kj{1xHh+}]{4;)C>l H q&9bOY}-|bP-W?Rppm6-C>m]lTk');
define('SECURE_AUTH_SALT', 'mo38Bw2L0Ku9}Foto0+^-sW&H*hPeh38UgC|K[~A_<Ssx?{g:Rd2{)K]]LL5T8e@');
define('LOGGED_IN_SALT',   '`u%]]PFEdAJ +DQPX>~.r)i716)U|69OPX`ba&S+F^?-FiirS[SkSOT&%e3/FqQB');
define('NONCE_SALT',       '$6_89}C20Thlv,Nc)-LR$GX8G%XLp9k[84^lHz,2+$2q8:{6u2qP^_TitEQEw1!I');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
