<?php
    $produits = allProduits();
    $total = 0;
?>
<div class="container spacer">
    <div class="card">
        <div class="card-header center">Liste des produits</div>
        <div class="card-body">
            <table class="center table table-bordered table-striped">
                <tr>
                    <th>Code</th>
                    <th>Désignation</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Catégorie</th>
                    <th>Montant</th>
                </tr>
                <?php foreach($produits as $p){ ?>
                <tr>
                    <td><?= $p['codeProd'] ?></td>
                    <td><?= $p['designationProd'] ?></td>
                    <td><?= $p['prixProd'] ?></td>
                    <td><?= $p['quantiteProd'] ?></td>
                    <td><?= $p['libelleCat'] ?></td>
                    <td><?= $p['prixProd'] * $p['quantiteProd'] ?></td>
                </tr>
                <?php $total += $p['prixProd'] * $p['quantiteProd']; ?>
                <?php } ?>
                <tr>
                    <td colspan="5">Montant Total</td>
                    <td style="color:green"><?= $total ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>