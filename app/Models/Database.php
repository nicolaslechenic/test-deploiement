<?php
namespace Project\Models;
use Exception;


if($_SERVER['HTTP_HOST'] !=  "supertheoapp.herokuapp.com") {
    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
    $dotenv->load();
}


class Database{

    private $stmt;

    protected function dbConnect(){
        
        $db_host = $_ENV['DB_HOST'];
        $db_name = $_ENV['DB_NAME'];
        $db_user = $_ENV['DB_USER'];
        $db_pass = $_ENV['DB_PASS'];

        try{
            $database = new \PDO("mysql:host=$db_host:8889;dbname=$db_name;charset=utf8", $db_user, $db_pass);
            return $database;
        } 
        catch(Exception $e){
            die('Error Database: ' . $e->getMessage());
        }

    }
    

}

