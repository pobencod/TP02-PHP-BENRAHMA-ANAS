<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5 - Mentions</title>
</head>
<body>
<h1>Exercice 5 : Évaluation d'une moyenne</h1>
<?php
$moyenne = 16;

if ($moyenne < 0 || $moyenne > 20) {
    $message = "Note invalide";
} elseif ($moyenne < 10) {
    $message = "Non validé";
} elseif ($moyenne < 12) {
    $message = "Passable";
} elseif ($moyenne < 14) {
    $message = "Assez bien";
} elseif ($moyenne < 16) {
    $message = "Bien";
} else {
    $message = "Très bien";
}
?>
<p>Moyenne : <?= $moyenne ?> / 20</p>
<p>Résultat : <strong><?= $message ?></strong></p>
</body>
</html>