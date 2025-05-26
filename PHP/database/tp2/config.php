<?php 
    $servername="localhost";
    $dbname="gestionstock";
    $username="root";
    $password="";
try{
    $connexion=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "the connection to data base $dbname faild because : $e<br>";
}

?>