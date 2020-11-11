<?php
    class conecta extends PDO
    {
        const HOST= " 192.168.1.3";
        const PORT = "3306";
        const USER= "root";
        const PASS=  " ";
        // const PASS= ""; (windows)//
        const DB =  "Foodhealthy";

    }

    function conecta ()
    {
        $pdo = null;
        try {
            $pdo = new PDO ('mysql:host='  .  self::HOST  . ":" . self::PORT .  ';dbname=' .  self::DB,  self::USER, self::PASS);
            $pdo-> SetAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e){
            print "Error! : " . $e->getMessage() . "<br/>"; 
            die();
        }

        return $pdo
    }

?>