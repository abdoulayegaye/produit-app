<?php
    $categories = allCategories();
    if(isset($_POST['valider'])){
        extract($_POST);
        $ok = addProduit($code,$designation,$prix,$quantite,$categorie);
        echo $ok;
    }
?>
<div class="container col-md-6 spacer">
    <div class="card">
        <div class="card-header center">Ajout d'un produit</div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Code</label>
                    <input class="form-control" type="text" name="code" value="<?= generateCode() ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="">Désignation</label>
                    <input class="form-control" type="text" name="designation">
                </div>
                <div class="form-group">
                    <label for="">Prix</label>
                    <input class="form-control" type="number" name="prix" min="500">
                </div>
                <div class="form-group">
                    <label for="">Quantité</label>
                    <input class="form-control" type="number" name="quantite" min="1">
                </div>
                <div class="form-group">
                    <label for="">Catégorie</label>
                    <select class="form-control" name="categorie">
                        <option value="0">-- Sélectionner une catégorie --</option>
                        <?php foreach($categories as $cat){ ?>
                            <option value="<?= $cat['idCat'] ?>"><?= $cat['libelleCat'] ?></option>
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