<?php
$host="localhost";
$dbname="login";
$user="root";
$password="";
try{
    $connexion=new PDO("mysql:host=$host;dbname=$dbname",$user,$password);

}catch(PDOException $e){
    die("impossible de se connecter a db $dbname: ".$e->getMessage());
}


?>