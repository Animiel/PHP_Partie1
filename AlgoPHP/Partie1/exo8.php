<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la forme :<br>
Table de 8 :<br>
1 x 8 = 8<br>
2 x 8 = 16<br>
3 x 8 = 24<br>
... </p>

<h2>Résultat (méthode 1)</h2>

<?php

$para = 8;
echo nl2br("Table de $para :\n");
for ($i = 1; $i < 11; $i++) {
    $produit = $i * $para;
    echo nl2br("$i x $para = $produit\n");
}
?>

<h2>Résultat (méthode 2)</h2>

<?php

$table = 7;
$i = 1;
echo nl2br("Table de $table :\n");
while ($i <= 10) {
    $prod = $i * $table;
    echo nl2br("$i x $table = $prod\n");
    $i++;
}

echo nl2br("<br>");
foreach(range(1, 10) as $i) {
    $prod = $i * $table;
    echo nl2br("$i x $table = $prod\n");
}
?>