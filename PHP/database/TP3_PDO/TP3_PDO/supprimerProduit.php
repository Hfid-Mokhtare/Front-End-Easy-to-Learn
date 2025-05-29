<?php
//connexiondb
include("connexion.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $reference = $_POST['reference'];
}

//req delete
$req_delete_product="DELETE FROM produit where reference = ?";
$statement=$connexion->prepare($req_delete_product);
$statement->bindParam(1,$_GET['Ref']);
$statement->execute();

//location
header("Location: accueil.php");

?>
