<?php

namespace App;

class Connection {
    public static function getDb() {
        try {
            $dsn="mysql:host=localhost;dbname=scandiweb;port=3306;charset=utf8";
            $user="root";
            $pass="#hique519849";

            $conn = new \PDO($dsn, $user, $pass);
            
            return $conn;

        } catch (\PDOException $e) {
            print_r($e);
            return 'Caiu na exceção da conexão com o BD.';
        }
    }
}


?>