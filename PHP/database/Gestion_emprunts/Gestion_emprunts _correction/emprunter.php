<?php include 'connexion.php'; ?>

<?php include 'connexion.php'; ?>
<?php
$erreurs = [];

if (isset($_POST['submit'])) {
    // Vérification des champs obligatoires
    if (
        empty($_POST['cin']) || empty($_POST['nom']) || empty($_POST['prenom']) ||
        empty($_POST['tel']) || empty($_POST['date_emprunt']) || empty($_POST['isbn_livre'])
    ) {
        $erreurs[] = "Tous les champs sont obligatoires.";
    }

    // Vérification du format du téléphone
    if (!preg_match('/^06 \d{3}-\d{3}-\d{2}$/', $_POST['tel'])) {
        $erreurs[] = "Le numéro de téléphone doit être au format : 06 000-000-00.";
    }

    // Si pas d'erreur, insertion
    if (empty($erreurs)) {
        $sql = "INSERT INTO Emprunt (Cin, Nom, Prenom, Tel, date_emprunt, isbn_livre) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $_POST['cin']);
        $stmt->bindParam(2, $_POST['nom']);
        $stmt->bindParam(3, $_POST['prenom']);
        $stmt->bindParam(4, $_POST['tel']);
        $stmt->bindParam(5, $_POST['date_emprunt']);
        $stmt->bindParam(6, $_POST['isbn_livre']);
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
    <title>Nouvel Emprunt</title>
      <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
    <h2>Nouvel Emprunt</h2>
    <form method="POST">
        <label>CIN Emprunteur :</label>
        <input type="text" name="cin" >

        <label>Nom Emprunteur :</label>
        <input type="text" name="nom" >

        <label>Prénom Emprunteur :</label>
        <input type="text" name="prenom" >

        <label>Téléphone :</label>
        <input type="text" name="tel"   placeholder="06 123-456-78">

        <label>Date d'Emprunt :</label>
        <input type="date" name="date_emprunt" >

        <label>ISBN Livre Emprunté :</label>
        <select name="isbn_livre" >
            <?php
            $stmt = $conn->query("SELECT Isbn FROM Livre");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='{$row['Isbn']}'>{$row['Isbn']}</option>";
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
    ?>
</div>


</body>
</html>
