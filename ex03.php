<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3 - Calcul de TVA</title>
</head>
<body>
<h1>Exercice 3 : Calcul de TVA</h1>
<?php
const TAUX_TVA = 20;
const DEVISE = "MAD";

$prixUnitaireHT = 60;
$quantite = 3;
$totalHT = $prixUnitaireHT * $quantite;
$montantTVA = $totalHT * TAUX_TVA / 100;
$totalTTC = $totalHT + $montantTVA;
$totalTTC += 15;
?>
<ul>
    <li>Prix unitaire HT : <?= $prixUnitaireHT ?> <?= DEVISE ?></li>
    <li>Quantité : <?= $quantite ?></li>
    <li>Total HT : <?= $totalHT ?> <?= DEVISE ?></li>
    <li>TVA (<?= TAUX_TVA ?> %) : <?= $montantTVA ?> <?= DEVISE ?></li>
    <li>Total TTC : <?= $totalHT + $montantTVA ?> <?= DEVISE ?></li>
    <li>Frais de livraison : 15 <?= DEVISE ?></li>
    <li>Montant final : <?= $totalTTC ?> <?= DEVISE ?></li>
</ul>
<p>La constante TAUX_TVA existe : <?= defined("TAUX_TVA") ? "oui" : "non" ?>.</p>
</body>
</html>