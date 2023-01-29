<?php
    $id = $_GET['idPatient'];
    $patient = getPatientById($id);
    if(isset($_POST['editer'])){
        extract($_POST);
        updatePatient($id, $nom, $prenom, $adresse, $telephone);
        header("Location:?page=listPatients");//redirection automatique
    }
?>
<div class="container col-md-6 spacer">
    <div class="card">
        <div class="card-header center">Edition d'un patient</div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input class="form-control" type="text" name="nom" value="<?= $patient['nom'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="">Prénom</label>
                    <input class="form-control" type="text" name="prenom" value="<?= $patient['prenom'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="">Adresse</label>
                    <input class="form-control" type="text" name="adresse" value="<?= $patient['adresse'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="">Téléphone </label>
                    <input class="form-control" type="text" name="telephone" value="<?= $patient['telephone'] ?>" required>
                </div>
                <div class="form-group center">
                    <input class="btn btn-primary" type="submit" name="editer" value="Modifier">
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler">
                </div>
            </form>
        </div>
    </div>
</div>