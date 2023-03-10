<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient).<br>Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$total_notes = count($notes);
$somme = 0;
echo "Les notes obtenues par l'élève sont : ";
foreach($notes as $note) {
    echo "$note, ";
    $somme = $somme + $note;
}
$moyenne = round($somme / $total_notes, 2);
echo "<br>Sa moyenne générale est donc de : $moyenne"

// J'ai utilisé une boucle foreach pour m'entrainer à la maîtriser, on aurait pu également faire de cette manière : $somme = array_sum($array).
?>