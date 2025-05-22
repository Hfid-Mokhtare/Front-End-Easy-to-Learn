<?php

include('config.php');

session_start();
$connexion = $_SESSION['connexion'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    Okay, here's the CSS code to style your HTML table to look like the one in the image. This will create thin, light gray borders, a light gray header background, and subtle alternating row backgrounds.

    Here's the HTML structure (you would have your own table content):

    (Assuming your HTML table structure looks something like this)

    HTML:

    HTML

    <table>
        <thead>
            <tr>
                <th>Réf</th>
                <th>designation</th>
                <th>categorie</th>
                <th>Prix</th>
                <th>quantite</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>7</td>
                <td>des</td>
                <td>Cosmétique</td>
                <td>15</td>
                <td>50</td>
                <td>2025-05-14</td>
                <td><a href="#">Modifier</a> | <a href="#">Supprimer</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Flash all in one</td>
                <td>Nettoyage</td>
                <td>120</td>
                <td>84</td>
                <td>2022-04-17</td>
                <td><a href="#">Modifier</a> | <a href="#">Supprimer</a></td>
            </tr>
        </tbody>
    </table>
    <style>
       
    </style>
</head>

<body>
    <h1>>Liste des Produits</h1>
    <a href="#">Ajouter Produit</a><br>
    <a href="#">Recherche Produit</a><br>

    <?php
    $req_select_all_producte = "SELECT * FROM gestionStock";
    $statement = $connexion->prepare($req_select_all_producte);
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo "<table ><tr><th>Ref</th><th>designation</th><th>categorie</th><th>Prix</th><th>quantite</th><th>Date</th><th>Actions</th></tr>";
    foreach ($rows as $product) {
        echo '<tr><td>' . $product["designation"] . '</td><td>' . $product["categorie"] . '</td><td>' . $product["prix"] . '</td><td>' . $product["quantité"] . '</td><td>' . $product["dateCreation"] . '</td></tr>';
    }



    ?>

</body>

</html>