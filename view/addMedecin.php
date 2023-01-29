<?php
    $specialites = getSpecialites();
    if(isset($_POST['valider'])){
        extract($_POST);
        $ok = addMedecin($nom, $prenom, $telephone, $idSpecialite);
        if($ok == 1){
            echo "<div class='alert alert-success'>Insertion réussie !</div>";
        }else{
            echo "<div class='alert alert-danger'>Insertion échouée !</div>";
        }
    }
?>
<div class="container col-md-6 spacer">
    <div class="card">
        <div class="card-header center">Ajout d'un medecin</div>
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
                    <label for="">Téléphone </label>
                    <input class="form-control" type="text" name="telephone" required>
                </div>
                <div class="form-group">
                    <label for="">Spécialité</label>
                    <select name="idSpecialite" class="form-control">
                        <option value="0">-- Sélectionner une spécialité --</option>
                        <?php foreach($specialites as $s){ ?>
                            <option value="<?= $s['idS'] ?>"><?= $s['nomS'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group center">
                    <input class="btn btn-primary" type="submit" name="valider" value="Enregistrer">
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler">
                </div>
            </form>
        </div>
    </div>
</div>