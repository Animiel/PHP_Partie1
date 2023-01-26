<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.</p>

<h2>Résultat</h2>

<?php

class Personne {
    private string $_nom;
    private string $_prenom;
    private DateTime $_naissance;

    public function __construct (string $nom, string $prenom, string $naissance) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_naissance = new DateTime($naissance);
    }

    public function getNom () {
        return $this->_nom;
    }

    public function setNom ($nom) {
        $this->_nom = $nom;
    }

    public function getPrenom () {
        return $this->_prenom;
    }

    public function setPrenom ($prenom) {
        $this->_prenom = $prenom;
    }

    public function getNaissance () {
        return $this->_naissance;
    }

    public function setNaissance ($naissance) {
        $this->_naissance = $naissance;
    }

    public function getAge () {
        $now = new DateTime ();
        return $this->_naissance->diff($now);
    }

    public function __toString() {
        return $this->_nom. " ". $this->_prenom. " a". $this->getAge()->format(" %y ans.<br>");
    }
}

$perso1 = new Personne ("DUPONT", "Michel", "1980-02-19");
$perso2 = new Personne ("DUCHEMIN", "Alice", "1985-01-17");
echo $perso1;
echo $perso2;
?>