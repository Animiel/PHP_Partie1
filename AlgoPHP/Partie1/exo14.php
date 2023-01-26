<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php

$naissance = new DateTime ("1985-01-17");
$date = new DateTime ("2018-05-21");
$diff = $naissance->diff($date);
echo "Age de la personne : ".$diff->format("%y ans, %m mois et %d jours.")
?>