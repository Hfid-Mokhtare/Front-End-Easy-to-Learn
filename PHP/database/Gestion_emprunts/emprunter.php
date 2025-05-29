<?php
//Connextion
include("connexion.php");
//Vérification des champs obligatoires



// Vérification du format du téléphone
// Si pas d'erreur, insertion
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Nouvel Emprunt</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="form-container">
        <h2>Nouvel Emprunt</h2>
        <form method="POST" action="emprunter.php">
            <label>CIN Emprunteur :</label>
            <input type="text" name="cin">

            <label>Nom Emprunteur :</label>
            <input type="text" name="nom">

            <label>Prénom Emprunteur :</label>
            <input type="text" name="prenom">

            <label>Téléphone :</label>
            <input type="text" name="tel" placeholder="06 123-456-78">

            <label>Date d'Emprunt :</label>
            <input type="date" name="date_emprunt">

            <label>ISBN Livre Emprunté :</label>
            <select name="isbn_livre">
                <?php
                //liste :  SELECT Isbn FROM Livre
                $req_select_livres = "SELECT * FROM livre";
                $statement = $connextion->prepare($req_select_livres);
                $statement->execute();
                $row_livres = $statement->fetchALL(PDO::FETCH_ASSOC);
                foreach ($row_livres as $livre) {
                    echo '<option value="' . $livre['Isbn'] . '">' . $livre['Isbn'] . '</option>';
                }

                ?>
            </select>

            <input type="submit" name="submit" value="Emprunter">
        </form>
        <?php
        if (!empty($erreurs)) {
            echo '<ul style="color: red;">';
            foreach ($erreurs as $erreur) {
                echo '<li>' . htmlspecialchars($erreur) . '</li>';
            }
            echo '</ul>';
        }

        if (!empty($_POST['cin']) && !empty($_POST['nom']) &&  !empty($_POST['prenom']) && !empty($_POST['tel']) &&  !empty($_POST['date_emprunt']) && !empty($_POST['isbn_livre'])) {
            $Cin = $_POST['cin'];
            $Nom = $_POST['nom'];
            $Prenom = $_POST['prenom'];
            $Tel = $_POST['date_emprunt'];

            $date_emprunt = $_POST['date_emprunt'];
            $isbn_livre = $_POST['isbn_livre'];
        }

        $req_insert_emprunt = "INSERT INTO emprunt (Cin,Nom,Prenom,Tel,date_emprunt,isbn_livre) VALUES (?,?,?,?,?,?) ";
        $statement = $connextion->prepare($req_insert_emprunt);
        $statement->bindParam(1, $Cin);
        $statement->bindParam(2, $Nom);
        $statement->bindParam(3, $Prenom);
        $statement->bindParam(4, $Tel);
        $statement->bindParam(5, $date_emprunt);
        $statement->bindParam(6, $isbn_livre);

        $statement->execute();

        ?>

    </div>


</body>

</html>