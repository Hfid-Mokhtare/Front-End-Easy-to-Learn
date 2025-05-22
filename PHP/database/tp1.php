<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <style>
        /* Basic styling for the table container */
        table {
            width: 80%; /* Makes the table take up 80% of its parent's width */
            border-collapse: collapse; /* Essential: merges cell borders into a single line */
            margin: 20px auto; /* Centers the table horizontally and adds vertical space */
            font-family: Arial, sans-serif; /* A clean, common font */
        }

        /* Styling for all table cells (headers and data cells) */
        th, td {
            border: 1px solid black; /* 1px solid black border */
            padding: 8px; /* Space between cell content and its border */
            text-align: left; /* Aligns text to the left within cells */
        }

        /* Optional: Styling for table headers to make them stand out */
        th {
            background-color: #f2f2f2; /* Light gray background for headers */
            font-weight: bold; /* Ensures header text is bold */
        }
    </style>
</head>

<body>

    <?php
    $host = 'localhost';
    $dbname = 'test1234';
    $username = 'root';
    $password = '';

    //---------------------cree la base de donne -------------------------------

    try {
        $connexion = new PDO(
            "mysql:host=$host;dbname=$dbname",
            $username,
            $password
        );
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $req_cree_db = "CREATE DATABASE IF NOT EXISTS MyFirstProject ";
        $connexion->exec($req_cree_db);
        echo '<table style="width: 100%; border-collapse: collapse"><tr>';
        echo "<td>You are connected to the db: $dbname, if the database is not existe it will be created :)</td></tr>";


        //---------------------creete the table -------------------------------


        $req_cree_table = "CREATE TABLE IF NOT EXISTS utilisateur (
    id int(11) unsigned NOT NULL auto_increment PRIMARY KEY,
    login varchar(30) NOT NULL, 
    password varchar(20) NOT NULL
    );";

        $connexion->exec($req_cree_table);
        echo "<tr><td>the first table was created with name : <b>utilisateur</b></td></tr>";

        //---------------------insert into the table -------------------------------

        $nomUser = "Mohamed Ali";
        $passwordUser = "12345";

        $req_insert_to_table = "INSERT INTO utilisateur (login, password) VALUES (?, ?)";
        $statement = $connexion->prepare($req_insert_to_table);
        $statement->bindParam(1, $nomUser); // 1er "?"
        $statement->bindParam(2, $passwordUser); // 2ème "?"
        $statement->execute();

        echo "<tr><td>the table now is fill with a row containe  username and password</td></tr>";


        //--------------------- SELECT FROM THE TABLE  -------------------------------

        // Requête SQL
        $req_select = "SELECT login, password FROM utilisateur";
        // Préparer la requête
        $statement = $connexion->prepare($req_select);
        // Exécuter la requête
        $statement->execute();
        // Récupérer les résultats
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        // Afficher les résultats
        echo "<tr><td>Get all users : (using <b>prepare</b>) <br>";

        foreach ($results as $row) {
            echo "<p>Login: " . $row['login'] . ", Password: " .
                $row['password'] . "</p><br>";
        }
        echo "</td></tr>";
        // PDO::FETCH_ASSOC retourne chaque ligne de la requête
        // sous forme de tableau associatif, où les clés sont les noms
        // des colonnes de ta table, et les valeurs sont les valeurs
        // des colonnes correspondantes.

        // 1. Définir la requête SQL

        //---------------------use function Query -------------------------------

        $req_use_query = "SELECT login, password FROM utilisateur";
        // 2. Exécuter directement la requête
        $statement = $connexion->query($req_use_query);
        // 3. Récupérer tous les enregistrements sous forme de tableaux associatifs
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        echo "<tr><td>Get all users : (using <b>query</b>) <br>";

        foreach ($results as $row) {
            echo "<p>Login: " . $row['login'] . ", Password: " .
                $row['password'] . "</p><br>";
        }
        echo "</td></tr>";

        //---------------------UPDATE the table -------------------------------


        $newLogin = "REDA";
        $newPassword = "00000";
        $idUser1 = "1";

        $req_modifier = "UPDATE utilisateur SET login = ?, password = ? WHERE id = ?";
        $statement = $connexion->prepare($req_modifier);
        $statement->bindParam(1, $newLogin);
        $statement->bindParam(2, $newPassword);
        $statement->bindParam(3, $idUser1);     // ? auto incriment 
        $statement->execute();
        echo "<tr><td>the user name and password are changed for the id <b>$idUser1</b> :<br>";

        // -------------------------------------------- //

        $statement = $connexion->query($req_use_query);
        // 3. Récupérer tous les enregistrements sous forme de tableaux associatifs
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($results as $row) {
            echo "<p>Login: " . $row['login'] . ", Password: " .
                $row['password'] . "</p><br>";
        }
        echo "</td></tr>";


        //---------------------Delet Row form the table -------------------------------

        $idUser2 = 3;
        // 1. Préparation de la requête DELETE
        $req_DELETE = "DELETE FROM utilisateur WHERE id = ?";
        $statement = $connexion->prepare($req_DELETE);
        // 2. Liaison du paramètre (ici l'id de l'utilisateur)
        $statement->bindParam(1, $idUser2);
        // 3. Exécution
        $statement->execute();

        echo "<tr><td>all the row in the table are Deleted now ....";

        $statement = $connexion->query($req_use_query);
        // 3. Récupérer tous les enregistrements sous forme de tableaux associatifs
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($results as $row) {
            if (!empty($row)) {
                echo "<p>Login: " . $row['login'] . ", Password: " .
                    $row['password'] . "</p><br>";
            } else {
                echo "<br>the table is empty</td></tr>";
            }
        }
        echo "</table>";
    } catch (PDOException $e) {
        die("Impossible de se connecter à la base de donnée $dbname :" . $e->getMessage());
    }
    ?>

</body>

</html>