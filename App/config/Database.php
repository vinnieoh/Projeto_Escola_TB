<?php
namespace App\config;

use PDO;
use PDOException;

class Database
{
    private $conn;

    public static function getConnection(): PDO
    {
        try {

            $envPath = realpath(dirname(__FILE__).'/../env.ini');
            $env = parse_ini_file($envPath);

            $conn = new PDO($env['dsn'], $env['username'], $env['password']);

        } catch (PDOException $e){
            die("Erro: " . $e->getMessage());
        }

        return $conn;
    }

}