<?php
class Personne
{
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $dateNaissance;

    public function __construct($nom, $prenom, $email, $password, $dateNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->password = $password;
        $this->dateNaissance = $dateNaissance; // Corrected: Assign $dateNaissance
    }

    public function Validation()
    {
        if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['mot_de_passe']) && !empty($_POST['confirmation_mot_de_passe']) && !empty($_POST['date_de_naissance'])) {
            if ($_POST['mot_de_passe'] == $_POST['confirmation_mot_de_passe']) {
                $dateTime = DateTime::createFromFormat('d/m/Y', $_POST['date_de_naissance']); // Corrected: Validate date of birth
                
                    $currentDateTime = new DateTime();
                    if ($dateTime < $currentDateTime) { // Corrected: Compare date of birth with current date
                        return true;
                    } else {
                        echo "La date de naissance doit être antérieure à la date actuelle.<br>";
                        return false;
                    }
                
                }
            } else {
                echo "Le mot de passe et la confirmation du mot de passe ne correspondent pas.<br>";
                return false;
            }
       
    }

    public function afficher()
    {
        return "Nom: " . $this->nom . ", Prénom: " . $this->prenom . ", Date de naissance: " . $this->dateNaissance;
    }

    //-----------------getter------------------------------

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
    //-----------------setter------------------------------
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPassword($newPassword)
    {
        $this->password = $newPassword;
    }
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }
}

$persone = new Personne($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mot_de_passe'], $_POST['date_de_naissance']);
if ($persone->Validation() == true) {
    echo "Le formulaire est validé<br>";
    echo str_repeat("-", 10) . "<br>"; // Corrected: Use str_repeat for the line
    echo $persone->afficher() . "<br>"; // Corrected: Echo the result of afficher()
}

?>
