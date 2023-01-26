<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

$francs = 10000000;
$conv = $francs / 6.55957;
echo round($conv, 2)."<br>";  // round renvoie un float
echo number_format($conv, 2, ",", " "); // number_format renvoie un string
?>