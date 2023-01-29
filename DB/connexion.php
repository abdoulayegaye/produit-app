<?php

    require_once 'config.php';

    try {
        $db = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD);
        //echo "Connexion réussie !";
    } catch (PDOException $e) {
        //die($e->getMessage());
        die('Erreur de connexion à la BD');
    }