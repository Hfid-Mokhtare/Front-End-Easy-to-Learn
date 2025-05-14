<?php
class Voiture
{
    // Déclaration des propriétés
    public $marque;
    public $modele;
    public $couleur;
    public $vitesseActuelle = 0;
    public $vitesseMax = 220; // Exemple de vitesse maximale
    // Définition de la méthode afficherDetails
    public function afficherDetails()
    {
        // Code pour afficher les détails de la voiture
        echo "Marque : " . $this->marque . "<br>";
        // ... autres propriétés
        echo "Vitesse actuelle : " . $this->vitesseActuelle . " km/h<br>";
    }
    // Définition de la méthode accelerer
    public function accelerer($acceleration)
    {
        // Code pour augmenter la vitesse actuelle
        // N'oubliez pas de vérifier la vitesseMax
        $this->vitesseActuelle += $acceleration;
        if ($this->vitesseActuelle > $this->vitesseMax) {
            $this->vitesseActuelle = $this->vitesseMax;
            echo "Vitesse maximale atteinte !<br>";
        }
        echo "La voiture accélère à " . $this->vitesseActuelle . " km/h.<br>";
    }
}
// Section de test
// Création d'un premier objet Voiture
$voiture1 = new Voiture();
$voiture1->marque = "Peugeot";
$voiture1->modele = "208";
$voiture1->couleur = "Bleu";
$voiture1->afficherDetails();
$voiture1->accelerer(50);
$voiture1->accelerer(100);
$voiture1->accelerer(100); // Te
?>
