<?php

class DataBaseModel{

   private static $hostname = 'localhost';
   private static $database = 'fale_nativo';
   private static $username = 'root';
   private static $password = '';
   private static $port = '3306';
   private static $con;
   
    public static function database_connect(){
   
       try {   
           self::$con = new PDO('mysql:host='.self::$hostname.';port='.self::$port.';dbname='.self::$database, self::$username, self::$password);
           self::$con->exec("set names utf8");
   
   
               return self::$con;
   
     
       }
       catch (PDOException $e) {
           print "¡Error!: " . $e->getMessage();
           die();
       }
   
   }
}

?>