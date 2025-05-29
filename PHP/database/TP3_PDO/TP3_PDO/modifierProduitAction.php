<?php
//connexiondb
include("connexion.php");

//variable 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $reference = $_POST['reference'];
    $libelle = $_POST['libelle'];
    $prix = $_POST['prixUnitaire'];
    $date = $_POST['dateAchat'];

    // $image = $_FILES['photoProduit']["name"];
    // $tmp = $_FILES['photoProduit']['tmp_name'];
    // move_uploaded_file($tmp, "media/" . $image);

    $categorie = $_POST['categorie'];
}

//req update
$req_update_produit = "UPDATE produit set libelle = ?,prixUnitaire=?,dateAchat=?,idCAtegorie=?
                       where reference=?";

$statement = $connexion->prepare($req_update_produit);
$statement->bindParam(1, $libelle);
$statement->bindParam(2, $prix);
$statement->bindParam(3, $date);
$statement->bindParam(4, $categorie);
$statement->bindParam(5, $reference);

$statement->execute();

//Location
header("Location: accueil.php");


//location


?>
