<?php
// Inicia a sessão para manter informações do usuário entre as páginas.
session_start();
// configurando para o php pegar o harario de sao paulo
date_default_timezone_set('America/Sao_Paulo');
// Carrega automaticamente as classes do projeto quando elas forem utilizadas.
$autoload = function ($class) {
    // A classe Email depende do autoload do Composer, usado pelo PHPMailer.
    if($class == 'Email') {
        require_once('classes/vendor/autoload.php');
    }
    // Carrega a classe correspondente dentro da pasta classes.
    include('classes/'.$class.'.php');
};

// Registra a função de autoload no PHP.
spl_autoload_register($autoload);


// Caminho base usado pelos arquivos públicos do projeto.
define('INCLUDE_PATH','http://localhost/webCompleto/projects/projeto_01/');
// Caminho base específico do painel administrativo.
define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');
// Configurações utilizadas na conexão com o banco de dados.
define('HOST','localhost');
define('USER','root');
define('PASSWORD','');
define('DATABASE','projeto_01');

// Funções auxiliares utilizadas pelo projeto.
function pegaCargo ($cargo){
    $arr = array(
        '0' => 'Normal',
        '1' => 'Sub Administrador',
        '2' => 'Administrador',
    );

    return $arr[$cargo];
}
?>