<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=gestionemprunt_v2", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connexion échouée : " . $e->getMessage());
}
?>
