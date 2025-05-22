<?php

class Database
{
    private static $connection;

    public static function getConnection()
    {
        if (!self::$connection) {
            try {
                self::$connection = new PDO('sqlite:' . __DIR__ . '/database.sqlite');
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Erro ao conectar ao banco de dados: ' . $e->getMessage());
            }
        }
        return self::$connection;
    }
}
