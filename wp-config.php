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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'renatomodulados' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'sua_senha_aqui' );

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
define( 'AUTH_KEY',         'McG({wQq3PKs~geDSwximO]sg^b28)ut 9cFJ5}KU4EDUXSse/<Ja{P`rHjvGXT<' );
define( 'SECURE_AUTH_KEY',  '~ QL/rbW.}YM!E:XQ^YQw0kAy`hgT?xaV>Zq}uVz$S?Q[a=GcoU?B|0]%XkH4r^c' );
define( 'LOGGED_IN_KEY',    ':tYhYdT?z{h}rS=O*fontQIb3^iz+Wq]pk}keE}}!lX3T.LboMjf!vTf-$_gs&k(' );
define( 'NONCE_KEY',        'gEq5]<Oal7l_)8owyZ|:`hi!7&N)#7?N}t%K{<mA$k[)4a`d@h]u${TsE |NmPbx' );
define( 'AUTH_SALT',        '!7.SFLo}ttfFI9+O;mn$,LibVscE#q*V13Dx*^(tU-fSdI-MbMp4nyi}.Z0eAsUT' );
define( 'SECURE_AUTH_SALT', '/|GYoD#7?$rO;TNHP1tWL]B@Iw3a#d{jnt]L3s} 6i,ITt5<5*}tyH_dHRmD8BU[' );
define( 'LOGGED_IN_SALT',   '-Nql])2g@1pqbTXgmbx$3h3-Rn,!J@uTRn$1tzR6=(PAW!l+LtjxXa lr{`AGX/0' );
define( 'NONCE_SALT',       'go`1+CBM;@{MN}XoW}_j@Jm$@[{H2D>DUA*U#{m@LZ,U=S{}U+*X}3ZGon.U?%ZO' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
