<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";
$phrasee = strtolower($phrase);
$phrase1 = str_replace(" ", "", $phrasee);
$phrase2 = strrev($phrase1);
if ($phrase1 == $phrase2) {
    echo "La phrase \"$phrase\" est palindrome.";
} else
echo "La phrase \"$phrase\" n'est pas palindrome.";
?>