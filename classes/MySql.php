<?php
// Centraliza a conexão do projeto com o banco de dados.
class MySql{
    // Guarda uma única instância da conexão para ser reutilizada.
    private static $pdo;

    // Cria ou retorna a conexão PDO.
    public static function conectar()
    {
        // Só cria uma nova conexão quando ainda não existe uma.
        if (self::$pdo == null) {
            try {
                // Cria a conexão usando as constantes definidas no config.php.
                self::$pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DATABASE, USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                // Faz o PDO lançar exceções quando ocorrer um erro SQL.
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Evita exibir diretamente os detalhes internos da exceção.
            } catch (Exception $e) {
                echo '<h2>erro ao conectar</h2>';
                echo '<hr>';
            }
        }

        // Entrega a conexão para o código que chamou este método.
        return self::$pdo;
    }
}
