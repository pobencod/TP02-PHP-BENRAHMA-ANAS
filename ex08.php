<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8 - Contrôle des boucles</title>
</head>
<body>
<h1>Exercice 8 : Boucles et contrôle des itérations</h1>
<section>
    <h2>Nombres pairs de 0 à 20</h2>
    <?php
    $pair = 0;
    while ($pair <= 20) {
        echo $pair === 10 ? "<strong>$pair</strong> " : "$pair ";
        $pair += 2;
    }
    ?>
</section>
<section>
    <h2>while et do-while</h2>
    <?php
    $compteur = 5;
    $executionsWhile = 0;
    while ($compteur < 5) {
        $executionsWhile++;
        $compteur++;
    }
    $compteur = 5;
    $executionsDoWhile = 0;
    do {
        $executionsDoWhile++;
        $compteur++;
    } while ($compteur < 5);
    ?>
    <p>while : <?= $executionsWhile ?> exécution.</p>
    <p>do-while : <?= $executionsDoWhile ?> exécution.</p>
</section>
<section>
    <h2>continue et break</h2>
    <?php
    for ($compteur = 1; $compteur <= 20; $compteur++) {
        if ($compteur >= 16) {
            break;
        }
        if ($compteur % 3 === 0) {
            continue;
        }
        echo $compteur . " ";
    }
    ?>
</section>
</body>
</html>