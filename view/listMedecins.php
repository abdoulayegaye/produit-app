<?php
    $medecins = getMedecins();
?>
<div class="container spacer">
    <div class="card">
        <div class="card-header center">
            Liste des medecins
        </div>
        <div class="card-body">
            <table class="center table table-bordered table-striped">
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Téléphone</th>
                    <th>Spécialité</th>
                    <th colspan="3">Action</th>
                </tr>
                <?php foreach($medecins as $m){ ?>
                <tr>
                    <td><?= ucwords($m['prenom']) ?></td>
                    <td><?= strtoupper($m['nom']) ?></td>
                    <td><?= $m['telephone'] ?></td>
                    <td><?= $m['nomS'] ?></td>
                    <td>
                        <a href="#" class="btn btn-outline-dark btn-sm">Détail</a>
                        <a href="?page=editPatient&idPatient=<?= $p['idP'] ?>" class="btn btn-outline-primary btn-sm">Modifier</a>
                        <a href="?page=supPatient&idPatient=<?= $p['idP'] ?>" class="btn btn-outline-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
            <a href="?page=addMedecin" class="btn btn-success">Ajouter</a>
        </div>
    </div>
</div>
