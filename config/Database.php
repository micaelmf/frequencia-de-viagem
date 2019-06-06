<?php
require_once CONFIG . 'config.php'; // ? Desnecessario?
class Database
{
    private static $conexao = null;

    public static function getConexao()
    {
        if (is_null(self::$conexao)) {
            self::$conexao = new PDO(
                "mysql:host=".BD_HOST.";dbname=".BD_NAME."",
                BD_USER,
                BD_PW,
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_PERSISTENT => false,
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                )
            );
        }
        return self::$conexao;
    }
}
