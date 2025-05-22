<?php 
//----------to enter a php db-----------------------//
$host="localhost"; // LE SERveur de base de donnees mysql local
$dbname="test"; // une base de donnees nommee "test"
$username="root"; // le compte root avec un mot de passe vide
$password="";

try{
    $connexion=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    echo "Vous etes maintenant connecte a $dbname sur $host.";
}catch(PDOexception $e){
    die("impossible de se connecter a db $dbname: ".$e->getMessage());
}

?>