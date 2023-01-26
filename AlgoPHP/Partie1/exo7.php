<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge :<br>
Poussin : entre 6 et 7 ans<br>
Pupille : entre 8 et 9 ans<br>
Minime : entre 10 et 11 ans<br>
Cadet : à partir de 12 ans<br>
Si la catégorie n'est pas gérée, merci de le préciser.</p>

<h2>Résultat</h2>

<?php

$enfant = "";
$age = 10;
if ($age == 6 || $age == 7) {
    $enfant .= "Poussin";
} elseif ($age == 8 || $age == 9) {
    $enfant .= "Pupille";
} elseif ($age == 10 || $age == 11) {
    $enfant .= "Minime";
} elseif ($age >= 12) {
    $enfant = "Cadet";
} else
    echo "L'enfant ne rentre dans aucune catégorie."
;
if ($enfant != "") {
    echo "L'enfant qui a $age ans appartient à la catégorie \"$enfant\"";
}

$age = 14;
// if($age >= 18) {
//     echo "La personne est majeure";
// } else {
//     echo "La personne est mineure";
// }

// ternaire
echo ($age >= 18) ? "La personne est majeure" : "La personne est mineure";





?>