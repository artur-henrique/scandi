<?php

namespace App;

class Connection {

    public static function getDb() {
        try {
            // $dsn="mysql:host=localhost;dbname=scandiweb;port=3306;charset=utf8";
            // $user="root";
            // $pass="#hique519849";
            $HOST = getenv('HOST');
            $DBNAME = getenv('DBNAME');
            $USER = getenv('USER');
            $PWD = getenv('PWD');

            $dsn = "mysql:host=".$HOST.";dbname=".$DBNAME.";port=3306;charset=utf8";
            $user=$USER;
            $pass=$PWD;

            $conn = new \PDO($dsn, $user, $pass);
            
            return $conn;

        } catch (\PDOException $e) {
            print_r($e);
            return;
        }
    }
}


?>