<?php 
//----------creat db-----------------------//
$servername="localhost";
$username="root";
$password="";
$dbname="ma_nouvelle_base";



try{
    $pdo=new PDO("mysql:host=$servername",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    $pdo->exec($sql);
    echo "Base de donnees $dbname cree avec succes";
}catch(PDOexception $e) {
    echo "impossible de se connecter a db $dbname: ".$e->getMessage();

}

?>
