<?php
include 'connexion.php';
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM Emprunt WHERE Id_Emprunt = ?");
$stmt->bindParam(1, $id);
$stmt->execute();
header("Location: liste_emprunts.php");
