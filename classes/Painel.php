<?php 
// Reúne funções relacionadas à autenticação e ao painel administrativo.
class Painel{
    // Retorna true quando existe uma sessão de login ativa.
    public static function logado() {
        return isset($_SESSION['login']) ? true : false;
    }

    // Encerra a sessão atual e redireciona para o painel.
    public static function loggout() {
        session_destroy();
        header('location: '.INCLUDE_PATH_PAINEL);
    }

    public static function carregarPagina() {
      /* conferindo se existe a url */  
      if(isset($_GET['url'])){
        /* separa a barra da url */
        $url = explode('/',$_GET['url']);
        /* verifica se a url existe, caso exista ela vai incluir essa url na home */
        if(file_exists('pages/'.$url[0].'.php')){
            include('pages/'.$url[0].'.php');
        }else{
            // Pagina nao existe
            header('Location: '.INCLUDE_PATH_PAINEL);
        }
      }else{
        include('pages/home.php');
      }
    }

    public static function listarUsuariosOnline() {
        /* limpa os usuarios */
       self::limparUsuariosOnline();
       /* pega tudo da tabela */
       $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.online`");
       /* executa */
       $sql->execute();
       /* retorna todos os resultados encontrados. */
       return $sql->fetchAll();
    }

    public static function limparUsuariosOnline() {
        /* pega a data e hora atual do servidor */
        $data = date('Y-m-d H:i:s'); 
        /* Apague da tabela online todos os usuários cuja ultima_acao seja anterior a 1 minuto atrás. */
        $sql = MySql::conectar()->exec("DELETE FROM `tb_admin.online` WHERE ultima_acao < '$data' - INTERVAL 5 MINUTE");
    }

}

?>