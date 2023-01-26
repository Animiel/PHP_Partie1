<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d'en afficher le contenu (une marque de voiture par ligne). Il est également demandé d'afficher le nombre de marques de voitures présentes dans le tableau.</p>

<h2>Résultat</h2>

<?php

$marques = [
    1 => "Peugeot",
    2 => "Renault",
    3 => "BMW",
    4 => "Mercedes"
];

foreach($marques as $num => $marque) {
    echo "$num correspond à la marque $marque<br>";
}

// $i = 1;
// $nbr_marques = count($marques);
// echo nl2br("Il y a $nbr_marques marques de voitures dans le tableau :\n");
// while ($marques[$i] != $marques[$nbr_marques]) {
//     echo nl2br("$marques[$i]\n");
//     $i++;
// }


$voitures = [
    "Peugeot",
    "BMW",
    "Mercedes"
];

echo "<ul>";
foreach($voitures as $voiture) {
    echo "<li>$voiture</li>";
}
echo "</ul>";

for ($i=0; $i < count($voitures); $i++) { 
    echo $voitures[$i]."<br>";
}

$i=0;
while($i < count($voitures)) {
    echo $voitures[$i]."<br>";
    $i++;
}
?>