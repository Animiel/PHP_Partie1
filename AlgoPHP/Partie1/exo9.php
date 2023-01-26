<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br>
Si la personne est une femme dont l'âge est compris entre 18 et 35 ans ou si c'est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n'est pas le cas, "non imposable").</p>

<h2>Résultat</h2>

<?php

$age = 32;
$genre = "F";
echo nl2br("Age : $age\n");
echo nl2br("Sexe : $genre\n");

$cond1 = ($genre == "F" && ($age >= 18 && $age <= 35));
$cond2 = ($genre == "M" && ($age >= 20));

if ($cond1 || $cond2) {
    echo "La personne est imposable";
} else
    echo "La personne n'est pas imposable";
?>