<?php
//connexiondb
include('connexion.php');
//produit info by  ref

$req_select_product = 'SELECT * FROM produit WHERE produit.reference= ?';
$statement = $connexion->prepare($req_select_product);
$statement->bindParam(1, $_GET["Ref"]);
$statement->execute();

$prod = $statement->fetch();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Modifier un produit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-lg">
          <div class="card-header bg-warning text-dark text-center">
            <h4>Modifier un produit</h4>
          </div>
          <div class="card-body">
            <form action="modifierProduitAction.php" method="POST">
              <input type="text" name="reference" value="<?= $prod['reference'] ?>">

              <div class="mb-3">
                <label for="libelle" class="form-label">Libellé</label>
                <input type="text" class="form-control" id="libelle" name="libelle" value="<?= $prod['libelle'] ?>" required>
              </div>

              <div class="mb-3">
                <label for="prixUnitaire" class="form-label">Prix</label>
                <input type="text" class="form-control" id="prixUnitaire" name="prixUnitaire" value="<?= $prod['prixUnitaire'] ?>" required>
              </div>

              <div class="mb-3">
                <label for="dateAchat" class="form-label">Date d'achat</label>
                <input type="date" class="form-control" id="dateAchat" name="dateAchat" value="<?= $prod['dateAchat'] ?>" required>
              </div>

              <div class="mb-3">
                <label for="categorie" class="form-label">Catégorie</label>
                <select class="form-select" id="categorie" name="categorie" required>
                  <?php
                  $req_select_categories = "SELECT * FROM categorie";
                  $statement = $connexion->prepare($req_select_categories);
                  $statement->execute();
                  $row_categorie = $statement->fetchALL(PDO::FETCH_ASSOC);

                  foreach ($row_categorie as $categorie) {
                    echo '<option value="' . $categorie['idCategorie'] . '" selected>' . $categorie['denomination'] . '</option>';
                  }
                  ?>
                </select>
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-warning">Modifier</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>