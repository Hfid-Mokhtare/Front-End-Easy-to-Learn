<?php include 'connexion.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des emprunts</title>
    <link rel="stylesheet" href="style.css">

    <a href="emprunter.php" class="button-link">+ Ajouter un Emprunt</a>
<br><br>
<table border="1">
    <tr>
        <th>CIN</th><th>Nom</th><th>Prénom</th><th>Téléphone</th>
        <th>Date Emprunt</th><th>Date Retour</th><th>Jours Restants</th><th>Actions</th>
    </tr>
    <?php
    $sql = "SELECT * FROM Emprunt ORDER BY date_emprunt ASC";
    $stmt = $conn->query($sql);
    // Traitement de chaque ligne
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // Vérification que date_emprunt n'est pas vide
    if (!empty($row['date_emprunt'])) {
        $dateEmprunt = new DateTime($row['date_emprunt']);

        // Calcul de la date de retour
        $dateRetour = new DateTime($dateEmprunt->format('Y-m-d'));
        $dateRetour->add(new DateInterval('P15D'));//Period of 15 Days


        // Calcul du nombre de jours restants
        $aujourdhui = new DateTime();
        $diff = $aujourdhui->diff($dateRetour);
        if ($dateRetour < $aujourdhui) {
            $joursRestants = 0;
        } else {
            $joursRestants = $diff->days;
        }

        // Affichage de la ligne
        echo "<tr>
            <td>{$row['Cin']}</td>
            <td>{$row['Nom']}</td>
            <td>{$row['Prenom']}</td>
            <td>{$row['Tel']}</td>
            <td>{$row['date_emprunt']}</td>
            <td>{$dateRetour->format('Y-m-d')}</td>
            <td>{$joursRestants}</td>
            <td>
                <a href='modifier_emprunt.php?id={$row['Id_Emprunt']}'>Modifier</a> |
                <a href='supprimer_emprunt.php?id={$row['Id_Emprunt']}' 
                   onclick='return confirm(\"Confirmer la suppression ?\");'>Supprimer</a>
            </td>
        </tr>";
    }
}
    ?>
</table>
</body>
</html>
