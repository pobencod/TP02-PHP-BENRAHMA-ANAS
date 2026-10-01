<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2 - Variables PHP</title>
</head>
<body>

<h1>Exercice 2 : Variables et concaténation</h1>

<?php

$nom = "Benrahma";
$prenom = "Anas";
$age = 21;
$formation = "Programmation Web 2";
$presentation = "Je m'appelle " . $prenom . " " . $nom .
                ", j'ai " . $age . " ans et je suis en " . $formation . ".";

$presentation .= " J'apprends PHP.";

echo "<p>" . $presentation . "</p>";

// 4. Tester la différence entre $note et $Note
$note = 18;
$Note = 16;

echo "<p>La valeur de \$note est : " . $note . "</p>";
echo "<p>La valeur de \$Note est : " . $Note . "</p>";

?>

</body>
</html>
