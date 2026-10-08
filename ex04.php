<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4 - Types PHP</title>
</head>
<body>
<h1>Exercice 4 : Types et conversions</h1>
<pre><?php
$entier = 42;
$chaine = "42";
$flottant = 15.8;
$vrai = true;
$faux = false;
$nul = null;

echo "Valeurs initiales :\n";
var_dump($entier, $chaine, $flottant, $vrai, $faux, $nul);

$chaineConvertie = (int) $chaine;
$flottantConverti = (int) $flottant;
$entierConverti = (string) $entier;

echo "\nConversions :\n";
echo "chaine \"42\" en entier : ";
var_dump($chaineConvertie);
echo "15.8 en entier : ";
var_dump($flottantConverti);
echo "42 en chaîne : ";
var_dump($entierConverti);

echo "\nAffichage de true et false avec echo :\n";
echo "true = [" . true . "] ; false = [" . false . "]\n";
echo "Affichage avec var_dump() :\n";
var_dump(true, false);

echo "\nConversions en booléens :\n";
foreach ([0, "0", "PHP", []] as $valeur) {
    echo "Valeur ";
    var_dump($valeur);
    echo "devient ";
    var_dump((bool) $valeur);
}
?></pre>
</body>
</html>