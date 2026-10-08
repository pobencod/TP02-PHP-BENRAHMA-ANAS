<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Résultat POST</title></head>
<body>
<h1>Résultat du formulaire POST</h1>
<?php
$champs = ["nom", "prenom", "groupe"];
$donneesValides = true;
foreach ($champs as $champ) {
    if (!isset($_POST[$champ]) || trim((string) $_POST[$champ]) === "") {
        $donneesValides = false;
        break;
    }
}
if (!$donneesValides) {
    echo "<p>Veuillez remplir les champs nom, prénom et groupe depuis le formulaire.</p>";
} else {
    $nom = htmlspecialchars(trim((string) $_POST["nom"]), ENT_QUOTES, "UTF-8");
    $prenom = htmlspecialchars(trim((string) $_POST["prenom"]), ENT_QUOTES, "UTF-8");
    $groupe = htmlspecialchars(trim((string) $_POST["groupe"]), ENT_QUOTES, "UTF-8");
    echo "<p>Bienvenue " . $prenom . " " . $nom . ", vous êtes dans le groupe " . $groupe . ".</p>";
}
?>
<p><a href="ex10_post.html">Retour au formulaire POST</a></p>
</body>
</html>