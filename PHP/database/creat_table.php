<?php
//---------------------------------//
$servername = "localhost";
$dbname = "ma_nouvelle_base";
$username = "root";
$password = "";



try {
    $pdo_connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo_connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE  if not exists utilisateur(
id int(11) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
login varchar(30) not null,
password varchar(20) not null
);";

    $pdo_connexion->exec($sql);

    echo "the table utilisateur est cree dons $dbname db avec succes";
} catch (PDOexception $e) {
    echo "impossible de se cree se tablaux a db $dbname: " . $e->getMessage();
}
