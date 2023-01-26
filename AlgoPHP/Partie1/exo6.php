<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d'articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20% -> 0.2).</p>

<h2>Résultat</h2>

<?php

$nbr_articles = 5;
$prix = 9.99;
$tva = 0.2;
$total = $nbr_articles * $prix * (1 + $tva);
echo nl2br("Prix unitaire de l'article : $prix\n");
echo nl2br("Quantité : $nbr_articles\n");
echo nl2br("Taux de TVA : $tva\n");
echo "Le montant de la facture à régler est de : $total";
?>