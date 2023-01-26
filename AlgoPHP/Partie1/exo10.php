<h1>Exercice 10</h1>

<p>A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 euros et 5 euros, de pièces de 2 euros et 1 euro.</p>

<h2>Résultat</h2>

<?php

$prix = 152;
$paiement = 200;
$billet5 = 0;
$billet10 = 0;
$reste = 0;
$pièce2 = 0;
$remboursement = $paiement - $prix;
if ($paiement < $prix) {
    $écart = $prix - $paiement;
    echo "Paiement insuffisant, il vous reste $écart euros à payer, merci.";
} else {
    if ($paiement == $prix) {
            echo "Merci pour votre achat, bonne journée.";
    } else {
        $billet10 = intval($remboursement / 10);
        $reste = $remboursement - ($billet10 * 10);
        $billet5 = intval($reste / 5);
        $reste = $reste - ($billet5 * 5);
        $pièce2 = intval($reste / 2);
        $reste = $reste - ($pièce2 * 2);
        echo nl2br("Rendu de monnaie :\n");
        echo "$billet10 billets de 10 - $billet5 billets de 5 - $pièce2 pièces de 2 - $reste pièces de 1";
    }
    
}

?>