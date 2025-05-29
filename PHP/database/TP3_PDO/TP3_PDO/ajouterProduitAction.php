<?php
//connexion
include('connexion.php');
//variable 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $libelle = $_POST['libelle'];
    $prix = $_POST['prixUnitaire'];
    $date = $_POST['dateAchat'];

    $image = $_FILES['photoProduit']["name"];
    $tmp = $_FILES['photoProduit']['tmp_name'];
    move_uploaded_file($tmp, "media/" . $image);

    $categorie = $_POST['categorie'];
}

//req INSERT
$req_insert_produit = "INSERT into produit (libelle, prixUnitaire, dateAchat, photoProduit, idCategorie)
values (?, ?, ?, ?, ?)";
$statement = $connexion->prepare($req_insert_produit);
$statement->bindParam(1, $libelle);
$statement->bindParam(2, $prix);
$statement->bindParam(3, $date);
$statement->bindParam(4, $image);
$statement->bindParam(5, $categorie);

$statement->execute();




//Location
header("Location: accueil.php");
