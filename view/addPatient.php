<?php
    if(isset($_POST['valider'])){
        /*$nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $telephone = $_POST['telephone'];*/
        extract($_POST);
        $ok = addPatient($nom, $prenom, $adresse, $telephone);
        if($ok == 1){
            echo "<div class='alert alert-success'>Insertion réussie !</div>";
        }else{
            echo "<div class='alert alert-danger'>Insertion échouée !</div>";
        }
    }
?>
<div class="container col-md-6 spacer">
    <div class="card">
        <div class="card-header center">Ajout d'un patient</div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input class="form-control" type="text" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="">Prénom</label>
                    <input class="form-control" type="text" name="prenom" required>
                </div>
                <div class="form-group">
                    <label for="">Adresse</label>
                    <input class="form-control" type="text" name="adresse" required>
                </div>
                <div class="form-group">
                    <label for="">Téléphone </label>
                    <input class="form-control" type="text" name="telephone" required>
                </div>
                <div class="form-group center">
                    <input class="btn btn-primary" type="submit" name="valider" value="Enregistrer">
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler">
                </div>
            </form>
        </div>
    </div>
</div>