<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9 - Notes</title>
</head>
<body>
<h1>Exercice 9 : Notes des étudiants</h1>
<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];
$somme = 0;
$nombreValides = 0;
$meilleureNote = null;
$meilleurEtudiant = "";
foreach ($notes as $etudiant => $note) {
    $somme += $note;
    if ($note >= 10) {
        $nombreValides++;
    }
    if ($meilleureNote === null || $note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $etudiant;
    }
}
$moyenne = $somme / count($notes);
?>
<table border="1">
    <thead><tr><th>Étudiant</th><th>Note</th><th>Résultat</th></tr></thead>
    <tbody>
    <?php foreach ($notes as $etudiant => $note): ?>
        <tr>
            <td><?= htmlspecialchars($etudiant, ENT_QUOTES, "UTF-8") ?></td>
            <td><?= $note ?></td>
            <td><?= $note >= 10 ? "Validé" : "Non validé" ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<ul>
    <li>Somme des notes : <?= $somme ?></li>
    <li>Moyenne de la classe : <?= $moyenne ?></li>
    <li>Étudiants validés : <?= $nombreValides ?></li>
    <li>Meilleure note : <?= $meilleureNote ?> (<?= htmlspecialchars($meilleurEtudiant, ENT_QUOTES, "UTF-8") ?>)</li>
</ul>
</body>
</html>