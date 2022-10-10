<?php
    #Paramétres de connexion
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'formation_php_db');
    #Chaine de connexion
    $connection_string = 'mysql:host='.HOST.';dbname='.DATABASE;
    try {
        #Connexion à la base
        $db = new PDO($connection_string, USER, PASSWORD);
        //echo 'ok';
    } catch (PDOException $e) {
        //echo $e->getMessage();
        die('Erreur de connexion à la base de données !');
    }
    
    
    
    