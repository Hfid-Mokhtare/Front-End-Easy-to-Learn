<?php
//---------------------------------//
$servername = "localhost";
$dbname = "ma_nouvelle_base";
$username = "root";
$password = "";



try {
    $pdo_connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo_connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE USER if not exists 'user2'@'localhost' IDENTIFIED BY '.monPass1!'; ";

    $pdo_connexion->exec($sql);

    echo "the the new user est cree avec succes";
} catch (PDOexception $e) {
    echo "impossible de se cree se user " . $e->getMessage();
}



//------------------or user this methode------------------------------//

// try {
//     $pdo_connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     $pdo_connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $sql = "CREATE  USER if not exists 'user2'@'localhost' IDENTIFIED BY '.monPass1!'; ";


//     $statement =$pdo_connexion->prepare($sql);
//     $statement->execute();


//     echo "the the new user est cree avec succes";
// } catch (PDOexception $e) {
//     echo "impossible de se cree se user " . $e->getMessage();
// }

