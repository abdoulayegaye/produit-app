<?php
    /*
        PDO::FETCH_ASSOC = 3
        PDO::FETCH_NUM = 2
    */
    function getPatients(){
        global $db;
        $sql = "SELECT * FROM patient ORDER BY nom ASC";
        return $db->query($sql)->fetchAll(2);
    }

    function genererNumDossier(){
        return "PAT@".date('Ymdhis')."#";
    }

    function addPatient($nom, $prenom, $adresse, $telephone){
        global $db;
        $numDossier = genererNumDossier();
        $sql = "INSERT INTO patient VALUES(null, '$numDossier', '$nom', '$prenom', '$adresse', '$telephone')";
        return $db->exec($sql); //1 ou 0
    }

    function getPatientById($id){
        global $db;
        $sql = "SELECT * FROM patient WHERE idP = $id";
        return $db->query($sql)->fetch(2);
    }

    function updatePatient($id, $nom, $prenom, $adresse, $telephone){
        global $db;
        $sql = "UPDATE patient 
                SET nom = '$nom', 
                    prenom = '$prenom',
                    adresse = '$adresse',
                    telephone = '$telephone'
                WHERE idP = $id";
        return $db->exec($sql);
    }

    function deletePatient($id){
        global $db;
        $sql = "DELETE FROM patient WHERE idP = $id";
        return $db->exec($sql);
    }