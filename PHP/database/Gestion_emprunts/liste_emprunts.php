<?php
include 'connextion.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des emprunts</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="emprunter.php" class="button-link">+ Ajouter un Emprunt</a>
    <br><br>
    <table border="1">
        <tr>
            <th>CIN</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Date Emprunt</th>
            <th>Date Retour</th>
            <th>Jours Restants</th>
            <th>Actions</th>
        </tr>
        <?php
        $req_select_emprinte = "SELECT * FROM emprunt";
        $statement = $connextion->prepare($req_select_emprinte);
        $statement->execute();
        $row_emprintes = $statement->fetchALL(PDO::FETCH_ASSOC);
        foreach ($row_emprintes as $emprunt) {
           echo '<tr><td>'
           .$emprunt['Cin'].'</td><td>'
           .$emprunt['Nom'].'</td><td>'
           .$emprunt['Prenom'].'</td><td>'
           .$emprunt['Tel'].'</td><td>'
           .$emprunt['date_emprunt'].'</td><td>'
           .$emprunt['isbn_livre'].'</td><td>'
           '</td><td>'
           .$emprunt['isbn_livre'].'</td><td>'

           </tr>';
        }

        ?>
    </table>
</body>

</html>