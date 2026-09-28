<?php 
// Carrega configurações e inicia a sessão usada pelo painel.
include('../config.php');

// Usuário não autenticado: mostra a tela de login.
if(Painel::logado() == false){
    include('login.php');
}else{
    // Usuário autenticado: mostra o painel principal.
    include('main.php');
}

?>