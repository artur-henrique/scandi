<?php 
    require_once "./vendor/autoload.php";
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Access-Control-Allow-Headers: Content-Type");
    $route = new \App\Route;

    
?>