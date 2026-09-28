<?php
class Site
{
    /* funcao para ver quantos usuarios online no site */
    public static function atualizarUsuarioOnline()
    {
        /* verifica se existe a sessao online, se existir ele armazena na variavel $token */
        if (isset($_SESSION['online'])) {
            $token = $_SESSION['online'];
            $horarioAtual = date('Y-m-d H:i:s');
            $check = MySql::conectar()->prepare("SELECT `id` FROM `tb_admin.online` WHERE token = ?");
            $check->execute(array($_SESSION['online']));
            if ($check->rowCount() == 1) {
                // fala pro banco setar a ultima acao($horario atual) quando o $token[sessao] do usuario for setado
                $sql = Mysql::conectar()->prepare("UPDATE `tb_admin.online` SET ultima_acao = ? WHERE token = ?");
                // essas variaveis sao os valors que estao ? na linha de cima
                $sql->execute(array($horarioAtual, $token));
            } else {
                // pega o ip
                $ip = $_SERVER['REMOTE_ADDR'];
                // pega o token que foi gerado
                $token = $_SESSION['online'];
                // pega o horario atual
                $horarioAtual = date('Y-m-d H:i:s');
                // insere os valores no banco
                $sql = Mysql::conectar()->prepare("INSERT INTO `tb_admin.online` VALUES (null,?,?,?)");
                // executa o codigo
                $sql->execute(array($ip, $horarioAtual, $token));
            }
        } else {
            // se nao existir a sessao?

            // cria um token uniqid[gera um indentificador unico que é guardado na sessao[online]]
            $_SESSION['online'] = uniqid();
            // pega o ip
            $ip = $_SERVER['REMOTE_ADDR'];
            // pega o token que foi gerado
            $token = $_SESSION['online'];
            // pega o horario atual
            $horarioAtual = date('Y-m-d H:i:s');
            // insere os valores no banco
            $sql = Mysql::conectar()->prepare("INSERT INTO `tb_admin.online` VALUES (null,?,?,?)");
            // executa o codigo
            $sql->execute(array($ip, $horarioAtual, $token));
        }
    }
}
