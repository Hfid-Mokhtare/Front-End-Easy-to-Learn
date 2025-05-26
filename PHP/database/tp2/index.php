<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
    <title>Liste des Produits</title>
  
</head>

<body>
    <a href="ajoute_produi.php">Ajouter Produit</a><br>
    <a href="recherche_produi.php">Recherche Produit</a><br>
    

    <h1>Liste des Produits</h1>


    <?php
    $req_select_all_producte = "SELECT * FROM produit";
    $statement = $connexion->prepare($req_select_all_producte);
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo "<table ><tr><th>Ref</th><th>designation</th><th>categorie</th><th>Prix</th><th>quantite</th><th>Date</th><th>Action</th></tr>";
    foreach ($rows as $product) {
        echo '<tr><td>' . $product["Ref"] . '</td><td>' . $product["designation"] . '</td><td>'
         . $product["categorie"] . '</td><td>' . $product["prix"] . '</td><td>' . $product["quantite"] 
         . '</td><td>' . $product["dateCreation"] . 
         '</td><td><a href="modifie_produit.php?Ref='.$product["Ref"].'">Modifier3333333 </a>
         |<a href="suprimer_produit.php?Ref='.$product["Ref"].'"> Suprimer</a></tr>';
    }
    ?>

</body>

</html>