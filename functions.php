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