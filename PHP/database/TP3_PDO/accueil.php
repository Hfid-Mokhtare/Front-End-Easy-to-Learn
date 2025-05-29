<?php
//session
session_start();
$login = $_SESSION['login'];

//connexiondb
include("connexion.php");

//req CompteProprietaire
$req_select_nom_prenom = "SELECT nom,prenom FROM CompteProprietaire WHERE username=?";
$statement = $connexion->prepare($req_select_nom_prenom);
$statement->bindParam(1, $login);
$statement->execute();
$row_user = $statement->fetchAll(PDO::FETCH_ASSOC);

// traitement :Bonjour ou Bonsoir


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Application Produits</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="accueil.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ajouterProduit.php">Ajouter Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="logout.php">Quitter la session</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-center">
            <?php
            //traitement :Bonjour ou Bonsoir
            foreach ($row_user as $user) {
                if (date('H') <= 12) {
                    echo 'Bonjour ' . $user['prenom'];
                } elseif (date('H') <= 20) {
                    echo 'Bonjour ' . $user['prenom'];
                } else {
                    echo 'Bonjour ' . $user['prenom'];
                }
            }

            ?>
        </h2>
        <h3 class="mt-4 mb-3">Produits</h3>

        <table class="table table-striped table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Référence</th>
                    <th>Libellé</th>
                    <th>Prix Unitaire</th>
                    <th>Date Achat</th>
                    <th>Photo Produit</th>
                    <th>Catégorie</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //b.	La liste des produits dans un tableau HTML
                $req_select_products = "SELECT produit.*, categorie.denomination
                                        FROM produit
                                        INNER JOIN categorie ON produit.idCategorie = categorie.idCategorie order by produit.libelle;";
                $statement = $connexion->prepare($req_select_products);
                $statement->execute();
                $row_products = $statement->fetchALL(PDO::FETCH_ASSOC);

                foreach ($row_products as $product) {
                    echo '<tr><td>' . $product['reference'] . '</td><td>'
                        . $product['libelle'] . '</td><td>'
                        . $product['prixUnitaire'] . '</td><td>'
                        . $product['dateAchat'] . '</td><td><img src="media/' . $product['photoProduit'] . ' " width="50" height="50"></td><td>'
                        . $product['denomination'] . '</td>
                        <td>
                            <a href="modifierProduit.php?Ref='.$product["reference"].'" class="btn btn-success btn-sm" title="Modifier">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="supprimerProduit.php?Ref='.$product["reference"].'" class="btn btn-danger btn-sm" title="Supprimer" onclick="return confirm("Êtes-vous sûr de vouloir supprimer cette catégorie ?");">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                        </tr>';
                }
 
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>