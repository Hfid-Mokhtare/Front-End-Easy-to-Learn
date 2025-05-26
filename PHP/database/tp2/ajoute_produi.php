<?php
include('config.php');




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ajoute_produi.php" method="post">
        <table>
            <tr>
                <td>designation </td>
                <td> <input type="text" id="d" name="designation"></td>
            </tr>
            <tr>
                <td>categorie</td>
                <td> <select id="categorie" name="categorie">
                        <option value="nettoyage">nettoyage</option>
                        <option value="cosmetique">cosmetique</option>
                        <option value="electrique">electrique</option>
                    </select></td>
            </tr>
            <tr>
                <td>prix</td>
                <td><input type="number" name="prix"></td>
            </tr>
            <tr>
                <td>Quantite</td>
                <td><input type="number" name="Quantite"></td>
            </tr>
            <tr>
                <td>Date de creation</td>
                <td><input type="date" name="Date_P"></td>
            </tr>

            <tr>
                <td><input type="submit" value="Mettre a jour" name="ajouter"></td>
            </tr>

        </table>
    </form>

</body>

</html>

<?php
if (isset($_POST['ajouter'])) {
  
    $req_add_row = "INSERT INTO produit(designation, categorie, prix, Quantite, dateCreation) VALUES (?,?,?,?,?)";
    $statement = $connexion->prepare($req_add_row);
    $statement->bindParam(1, $_POST['designation']);
    $statement->bindParam(2, $_POST['categorie']);
    $statement->bindParam(3, $_POST['prix']);
    $statement->bindParam(4, $_POST['Quantite']);
    $statement->bindParam(5, $_POST['Date_P']);
    $statement->execute();

    header("Location: index.php");
}

?>
