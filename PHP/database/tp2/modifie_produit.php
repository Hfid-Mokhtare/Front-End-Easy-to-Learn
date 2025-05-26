<?php
include('config.php');
// if (! isset($_GET['Ref'])){
//     header("Location: index.php");
// } 


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
    <h2>Modifier le Produit de reference : <?=$ref?></h2>

    <form method="post">
        <table>
            <tr>
                <td>designation </td>
                <td> <input type="text" id="d" name="designation" value="<?= $designation ?>"></td>
            </tr>
            <tr>
                <td>categorie</td>
                <td> <select id="categorie" name="categorie">
                        <option value="<?php $categorie ?>" selected><?= $categorie ?></option>
                        <option value="cosmetique">cosmetique</option>
                        <option value="electrique">electrique</option>
                    </select></td>
            </tr>
            <tr>
                <td>prix</td>
                <td><input type="number" name="prix" value="<?= $prix ?>"></td>
            </tr>
            <tr>
                <td>Quantite</td>
                <td><input type="number" name="Quantite" value="<?= $Quantite ?>"></td>
            </tr>
            <tr>
                <td>Date de creation</td>
                <td><input type="date" name="Date_P" value="<?= $dateCreation ?>"></td>
            </tr>

            <tr>
                <td><input type="submit" value="Mettre a jour" name="modifier"></td>
            </tr>

        </table>
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

