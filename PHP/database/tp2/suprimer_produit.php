<?php
include('config.php');
if (! isset($_GET['Ref'])){
    header("Location: index.php");
} 


$ref = $_GET['Ref'];
$req_select_product = "SELECT * FROM produit WHERE Ref=?";
$statement = $connexion->prepare($req_select_product);
$statement->execute([$ref]);
$row = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($row as $rowData) {

    $designation = $rowData['designation'];
    $categorie = $rowData['categorie'];
    $prix = $rowData['prix'];
    $Quantite = $rowData['quantite'];
    $dateCreation = $rowData['dateCreation'];
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   <form action="#" method="get">
    <fieldset class="search-criteria">
        <legend><span>Indiquez un critère de recherche:</span></legend>

        <div class="options-grid">
            <div>
                <input type="radio" id="ref" name="critere" value="reference">
                <label for="ref">Référence</label>
            </div>
            <div>
                <input type="radio" id="qte" name="critere" value="quantite">
                <label for="qte">Quantite</label>
            </div>
            <div>
                <input type="radio" id="des" name="critere" value="designation" checked>
                <label for="des">Désignation</label>
            </div>
            <div>
                <input type="radio" id="prix" name="critere" value="prix">
                <label for="prix">Prix</label>
            </div>
            <div>
                <input type="radio" id="date" name="critere" value="date_creation">
                <label for="date">Date Creation</label>
            </div>
        </div>

        <div class="search-box">
            <input type="text" name="search_value" value="Ras">
            <input type="submit" value="rechercher">
        </div>

    </fieldset>
</form>


    <?php

if (isset($_POST['modifier'])) {
    echo "test <br>";
    $req_modifier = "UPDATE produit SET designation = ?,categorie = ?,prix = ?,quantite = ?, dateCreation=? WHERE Ref = ?";
    $statement = $connexion->prepare($req_modifier);
    $statement->bindParam(1, $_POST['designation']);
    $statement->bindParam(2, $_POST['categorie']);
    $statement->bindParam(3, $_POST['prix']);
    $statement->bindParam(4, $_POST['Quantite']);
    $statement->bindParam(5, $_POST['Date_P']);
    $statement->bindParam(6, $ref);
    $statement->execute();

    header("Location: index.php");
}


?>

</body>

</html>

