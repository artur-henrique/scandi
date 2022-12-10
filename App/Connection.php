<?php

namespace App;

class Connection {

    public static function getDb() {
        try {
            // local
            // $dsn="mysql:host=localhost;dbname=scandiweb;port=3306;charset=utf8";
            // $user="root";
            // $pass="#hique519849";

            //production
            $dsn="mysql:host=us-cdbr-east-06.cleardb.net;dbname=heroku_ffca86025b0c438;port=3306;charset=utf8";
            $user="bd5ece3864105b";
            $pass="f79126db";

            $conn = new \PDO($dsn, $user, $pass);
            
            return $conn;

        } catch (\PDOException $e) {
            print_r($e);
            return;
        }
    }
}


?>