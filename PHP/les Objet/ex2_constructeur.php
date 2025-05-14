<?php

class Voiture2
{
    public $marque;
    public $modele;
    public $couleur;
    public $vitesseActuelle = 0;
    public $vitesseMax = 220;
    // Définition du constructeur
    public function __construct($marque, $modele, $couleur)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->couleur = $couleur;
        // vitesseActuelle est déjà initialisée à 0 par défaut ou peut être explicitement mise à 0 ici.
        // $this->vitesseActuelle = 0;
        echo "Nouvelle voiture créée : " . $this->marque . " " . $this->modele . "<br>";
        // Message optionnel
    }
    public function afficherDetails()
    {
        echo "Marque : " . $this->marque . "<br>";
        echo "Modèle : " . $this->modele . "<br>";
        echo "Couleur : " . $this->couleur . "<br>";
        echo "Vitesse actuelle : " . $this->vitesseActuelle . " km/h<br>";
        echo "Vitesse maximale : " . $this->vitesseMax . " km/h<br>";
    }
    public function accelerer($acceleration)
    {
        $this->vitesseActuelle += $acceleration;
        if ($this->vitesseActuelle > $this->vitesseMax) {
            $this->vitesseActuelle = $this->vitesseMax;
            echo "Vitesse maximale atteinte !<br>";
        }
        echo "La voiture accélère à " . $this->vitesseActuelle . " km/h.<br>";
    }
}
// Section de test adaptée
// Création d'un premier objet Voiture avec le constructeur
$voiture1 = new Voiture2("Peugeot", "208", "Bleu");
$voiture1->afficherDetails();
$voiture1->accelerer(50);
$voiture1->afficherDetails();
// Créez un deuxième objet Voiture avec le constructeur
$voiture2 = new Voiture2("BMW", "Série 3", "Noire");
$voiture2->afficherDetails();
$voiture2->accelerer(80);
$voiture2->afficherDetails();



?>
