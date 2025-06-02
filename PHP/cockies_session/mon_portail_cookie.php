<?php
$resulte = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $resulte = "post";
    if (isset($_POST['creer'])) {
        if (empty($_POST['nom']) || empty($_POST['age']) || empty($_POST['ville'])) {

            $resulte = "tous les champe sons obligatoire ";
        } else {
            setcookie("nom", $_POST["nom"], time() + 86400);
            setcookie("age", $_POST["age"], time() + 86400);
            setcookie("ville", $_POST["ville"], time() + 86400);
            $resulte = "Cookie creer aver succer<br>";
        }
    }
    elseif (isset($_POST['lire'])) {
        if (isset($_COOKIE['nom']) && isset($_COOKIE['age']) && isset($_COOKIE['ville'])) {
            $resulte = 'nom : ' . $_COOKIE['nom'] . '<br> age : ' . $_COOKIE['age'] . '<br> ville : ' . $_COOKIE['ville'];
        } else {
            $resulte = "Aucun cookie est afficher<br>";
        }
    }
    elseif (isset($_POST['supprimer'])) {
        setcookie("nom", '', time() - 3600);
        setcookie("age", '', time() - 3600);
        setcookie("ville", '', time() - 3600);
        $resulte = "Cookie a eter suprimer<br>";
    }
    else{
        $resulte="aucan action domonder";
    }
}




?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Portail Cookie PHP</title>
    <style>
        body {
            background-color: #f8c8c8;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 40px;
        }

        input,
        button {
            margin: 6px;
            padding: 8px;
            width: 250px;
        }

        .btns {
            margin-top: 20px;
        }

        .result {
            margin-top: 25px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <h2 style="color:green;">MonPortailCookie</h2>
    <h3>Portail de gestion des cookies (PHP uniquement)</h3>

    <form method="POST">
        <div>
            <label>Entrez votre nom :</label><br>
            <input type="text" name="nom" placeholder="Votre nom">
        </div>
        <div>
            <label>Entrez votre âge :</label><br>
            <input type="number" name="age" placeholder="Votre âge">
        </div>
        <div>
            <label>Entrez votre ville :</label><br>
            <input type="text" name="ville" placeholder="Votre ville">
        </div>

        <div class="btns">
            <button type="submit" name="creer">Créer Cookie</button>
            <button type="submit" name="lire">Lire Cookie</button>
            <button type="submit" name="supprimer">Supprimer Cookie</button>
        </div>
    </form>

    <div class="result">
        <?php
        echo $resulte;
        ?>
    </div>

</body>

</html>