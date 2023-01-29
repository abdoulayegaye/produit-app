<?php
    
    function getMedecins(){
        global $db;
        $sql = "SELECT * 
                FROM medecin m, specialite s
                WHERE m.idS = s.idS
                ORDER BY nom ASC";
        return $db->query($sql)->fetchAll(2);
    }

    function getSpecialites(){
        global $db;
        $sql = "SELECT * FROM specialite ORDER BY nomS ASC";
        return $db->query($sql)->fetchAll(2);
    }

    function addMedecin($nom, $prenom, $telephone, $specialite){
        global $db;
        $sql = "INSERT INTO medecin VALUES(null, '$nom', '$prenom', '$telephone', $specialite)";
        return $db->exec($sql); //1 ou 0
    }
