<?php
$host = "localhost";
$dbname = "gestionemprunt_v2";
$username = "root";
$password = "";
try {
    $connextion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $connextion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connection filde $e";
}
