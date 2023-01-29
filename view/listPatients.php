<?php
    $patients = getPatients();
?>
<div class="container spacer">
    <div class="card">
        <div class="card-header center">
            Liste des patients
        </div>
        <div class="card-body">
            <table class="center table table-bordered table-striped">
                <tr>
                    <th>Numéro Dossier</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                    <th colspan="3">Action</th>
                </tr>
                <?php foreach($patients as $p){ ?>
                <tr>
                    <td><?= $p['numDossier'] ?></td>
                    <td><?= ucwords($p['prenom']) ?></td>
                    <td><?= strtoupper($p['nom']) ?></td>
                    <td><?= $p['adresse'] ?></td>
                    <td><?= $p['telephone'] ?></td>
                    <td>
                        <a href="#" class="btn btn-outline-dark btn-sm">Détail</a>
                        <a href="?page=editPatient&idPatient=<?= $p['idP'] ?>" class="btn btn-outline-primary btn-sm">Modifier</a>
                        <a href="?page=supPatient&idPatient=<?= $p['idP'] ?>" class="btn btn-outline-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
            <a href="?page=addPatient" class="btn btn-success">Ajouter</a>
        </div>
    </div>
</div>
