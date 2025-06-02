<?php
include 'connexion.php';

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM Emprunt WHERE Id_Emprunt = ?");
$stmt->bindParam(1, $id, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$erreurs = [];

if (isset($_POST['submit'])) {
    // Contrôles de saisie
    if (empty($_POST['cin']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['tel']) || empty($_POST['date_emprunt']) || empty($_POST['isbn_livre'])) {
        $erreurs[] = "Tous les champs sont obligatoires.";
    }

    if (!preg_match('/^06 \d{3}-\d{3}-\d{2}$/', $_POST['tel'])) {
        $erreurs[] = "Le numéro de téléphone doit être sous la forme : 06 000-000-00.";
    }

    // Si aucune erreur, exécuter la mise à jour
    if (empty($erreurs)) {
        $sql = "UPDATE Emprunt SET Cin = ?, Nom = ?, Prenom = ?, Tel = ?, date_emprunt = ?, isbn_livre = ? WHERE Id_Emprunt = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $_POST['cin']);
        $stmt->bindParam(2, $_POST['nom']);
        $stmt->bindParam(3, $_POST['prenom']);
        $stmt->bindParam(4, $_POST['tel']);
        $stmt->bindParam(5, $_POST['date_emprunt']);
        $stmt->bindParam(6, $_POST['isbn_livre']);
        $stmt->bindParam(7, $id);
        $stmt->execute();
        header("Location: liste_emprunts.php");
        exit;
    }
}
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
        <input type="text" name="cin" value="<?= htmlspecialchars($row['Cin']) ?>" >

        <label>Nom Emprunteur :</label>
        <input type="text" name="nom" value="<?= htmlspecialchars($row['Nom']) ?>" >

        <label>Prénom Emprunteur :</label>
        <input type="text" name="prenom" value="<?= htmlspecialchars($row['Prenom']) ?>" >

        <label>Téléphone :</label>
        <input type="text" name="tel" value="<?= htmlspecialchars($row['Tel']) ?>" >

        <label>Date d'Emprunt :</label>
        <input type="date" name="date_emprunt" value="<?= htmlspecialchars($row['date_emprunt']) ?>" >

        <label>ISBN Livre Emprunté :</label>
        <select name="isbn_livre" >
            <?php
            $livres = $conn->query("SELECT Isbn FROM Livre");
            while ($livre = $livres->fetch(PDO::FETCH_ASSOC)) {
                $selected = ($livre['Isbn'] == $row['isbn_livre']) ? 'selected' : '';
                echo "<option value='{$livre['Isbn']}' $selected>{$livre['Isbn']}</option>";
            }
            ?>
        </select>

        <input type="submit" name="submit" value="Modifier">
    </form>
</div>

</body>
</html>
