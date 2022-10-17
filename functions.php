<?php
    #allProduits() est une fonction qui retourne tous les produits
    #PDO::FETCH_ASSOC = 2
    #PDO::FETCH_NUM = 3
    function allProduits()
    {
        #Rendre global la variable de connexion
        global $db;
        #Ecrire la requête SQL
        $sql = "SELECT * 
                FROM categorie c, produit p 
                WHERE c.idCat=p.idCategorie 
                ORDER BY designationProd";
        #Exécuter la requête et Récupérer les données
        $results = $db->query($sql);
        #Transformer les données sous forme de tableau PHP 
        $data = $results->fetchAll(2);
        #Retourner les données
        return $data;
    }

    function generateCode(){
        return "P#@".date('his');
    }

    function allCategories()
    {
        global $db;
        $sql = "SELECT * FROM categorie ORDER BY libelleCat ASC";
        return $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    function addProduit($code, $designation, $prix, $quantite, $categorie){
        global $db;
        $sql = "INSERT INTO produit VALUES(null, '$code', '$designation', $prix, $quantite, $categorie)";
        return $db->exec($sql);//0 ou 1
    }