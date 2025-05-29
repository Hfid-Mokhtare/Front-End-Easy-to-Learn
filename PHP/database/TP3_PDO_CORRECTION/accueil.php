<?php 
//session
//connexiondb
//req CompteProprietaire
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
    <? //traitement :Bonjour ou Bonsoir
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
  
        ?>
        </tbody>
    </table>
</div>

</body>
</html>
