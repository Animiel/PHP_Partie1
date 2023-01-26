<h1>Exercice 12</h1>

<p>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (français --> "Salut", anglais --> "Hello", espagnol --> "Hola").</p>

<h2>Résultat</h2>

<?php

$personnes = [
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];
ksort($personnes);
foreach ($personnes as $prenom => $langue) {
    echo bonjour($langue, $prenom);
}

function bonjour($langage, $prenom) {
    switch($langage) {
        case "ENG": echo "Hello"; break;
        case "ESP": echo "Hola"; break;
        case "FRA": echo "Salut"; break;
        default: echo "Cette langue n'est pas prise en charge.";
    }
    return " $prenom<br>";
}
?>