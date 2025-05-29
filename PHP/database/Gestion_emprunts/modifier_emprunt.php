<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Emprunt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php if (!empty($erreurs)): ?>
    <ul style="color: red;">
        <?php foreach ($erreurs as $e): ?>
            <li><?= htmlspecialchars($e) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<div class="form-container">
    <h2>Modifier Emprunt</h2>
    <form method="POST">
        <label>CIN Emprunteur :</label>
        <input type="text" name="cin" value="" >

        <label>Nom Emprunteur :</label>
        <input type="text" name="nom" value="" >

        <label>Prénom Emprunteur :</label>
        <input type="text" name="prenom" value="" >

        <label>Téléphone :</label>
        <input type="text" name="tel" value="" >

        <label>Date d'Emprunt :</label>
        <input type="date" name="date_emprunt" value="" >

        <label>ISBN Livre Emprunté :</label>
        <select name="isbn_livre" >
           
        </select>

        <input type="submit" name="submit" value="Modifier">
    </form>
</div>

</body>
</html>
