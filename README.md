# TP02-PHP-BENRAHMA-ANAS
TP 02 PHP — Programmation Web 2 — 2026/2027`

Exercice 2 — Variables et concaténation
Les variables $note et $Note sont différentes car PHP est sensible à la casse. Les majuscules et les minuscules sont donc distinguées.

Les noms de variables valides sont :

$a

$_a

$a_a

$AAA

$a1

Les noms invalides sont $a! et $1a. Le caractère ! n'est pas autorisé dans un nom de variable et un nom de variable ne peut pas commencer par un chiffre.

## Exercices 3 à 10

- **Exercice 3** : total HT = 180 MAD, TVA = 36 MAD, total TTC = 216 MAD,
  puis montant final avec livraison = 231 MAD. `defined()` confirme l'existence
  de `TAUX_TVA`.
- **Exercice 4** : la conversion de `15.8` en entier donne `15`. `echo` n'affiche
  rien pour `false`, tandis que `var_dump(false)` affiche explicitement
  `bool(false)`.
- **Exercice 5** : tests réalisés : `-1` → Note invalide, `9` → Non validé,
  `10` → Passable, `12` → Assez bien, `14` → Bien, `16` → Très bien,
  `21` → Note invalide.
- **Exercice 6** : tests réalisés : `1` → Janvier, `3` → Mars,
  `12` → Décembre, `15` → Numéro de mois invalide. Le fichier affiche
  ensuite le mois courant avec `(int) date("m")`.
- **Exercice 7** : la table se termine par `7 × 10 = 70` et la pyramide
  comporte six lignes.
- **Exercice 8** : la boucle `while` réalise 0 exécution et la boucle
  `do-while` en réalise 1. Les multiples de 3 et les valeurs à partir de 16
  sont ignorés dans la troisième partie.
- **Exercice 9** : somme = 60, moyenne = 12, 4 étudiants validés ; Sara a la
  meilleure note avec 16.
- **Exercice 10** : en GET, les champs apparaissent dans la query string de
  l'URL après le `?`. En POST, ils sont transmis dans le corps de la requête
  et n'apparaissent pas dans l'URL. Les deux traitements vérifient les champs,
  refusent les valeurs vides et échappent les données avec `htmlspecialchars()`.
