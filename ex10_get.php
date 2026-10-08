<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Résultat GET</title></head>
<body>
<h1>Résultat du formulaire GET</h1>
<?php
$champs = ["nom", "prenom", "groupe"];
$donneesValides = true;
foreach ($champs as $champ) {
    if (!isset($_GET[$champ]) || trim((string) $_GET[$champ]) === "") {
        $donneesValides = false;
        break;
    }
}
if (!$donneesValides) {
    echo "<p>Veuillez remplir les champs nom, prénom et groupe depuis le formulaire.</p>";
} else {
    $nom = htmlspecialchars(trim((string) $_GET["nom"]), ENT_QUOTES, "UTF-8");
    $prenom = htmlspecialchars(trim((string) $_GET["prenom"]), ENT_QUOTES, "UTF-8");
    $groupe = htmlspecialchars(trim((string) $_GET["groupe"]), ENT_QUOTES, "UTF-8");
    echo "<p>Bienvenue " . $prenom . " " . $nom . ", vous êtes dans le groupe " . $groupe . ".</p>";
}
?>
<p><a href="ex10_get.html">Retour au formulaire GET</a></p>
</body>
</html>