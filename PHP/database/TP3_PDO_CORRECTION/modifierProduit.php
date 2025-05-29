<?php
//connexiondb
//produit info by  ref


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
            <input type="hidden" name="reference" value="<?= $prod['reference'] ?>">

            <div class="mb-3">
              <label for="libelle" class="form-label">Libellé</label>
              <input type="text" class="form-control" id="libelle" name="libelle" value="" required>
            </div>

            <div class="mb-3">
              <label for="prixUnitaire" class="form-label">Prix</label>
              <input type="text" class="form-control" id="prixUnitaire" name="prixUnitaire" value="" required>
            </div>

            <div class="mb-3">
              <label for="dateAchat" class="form-label">Date d'achat</label>
              <input type="date" class="form-control" id="dateAchat" name="dateAchat" value="" required>
            </div>

            <div class="mb-3">
              <label for="categorie" class="form-label">Catégorie</label>
              <select class="form-select" id="categorie" name="categorie" required>
                <?php
                // liste categorie + selected
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
